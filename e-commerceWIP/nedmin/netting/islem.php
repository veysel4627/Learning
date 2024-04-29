<?php 
ob_start();
session_start();

include 'baglan.php';
include '../production/fonksiyon.php';


if (isset($_POST['kullanicikaydet'])) {
	echo "merhaba";
}




if (isset($_POST['sliderkaydet'])) {


	$uploads_dir = '../../dimg/slider';
	@$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
	@$name = $_FILES['slider_resimyol']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	


	$kaydet=$db->prepare("INSERT INTO slider SET
		slider_ad=:slider_ad,
		slider_sira=:slider_sira,
		slider_link=:slider_link,
		slider_resimyol=:slider_resimyol
		");
	$insert=$kaydet->execute(array(
		'slider_ad' => $_POST['slider_ad'],
		'slider_sira' => $_POST['slider_sira'],
		'slider_link' => $_POST['slider_link'],
		'slider_resimyol' => $refimgyol
		));

	if ($insert) {

		Header("Location:../production/slider.php?durum=ok");

	} else {

		Header("Location:../production/slider.php?durum=no");
	}




}

if (isset($_POST['sliderresimduzenle'])) {

	

	$uploads_dir = '../../dimg/slider';

	@$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
	@$name = $_FILES['slider_resimyol']["name"];

	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	
	$duzenle=$db->prepare("UPDATE slider SET
		slider_resimyol=:resim
		WHERE slider_id={$_POST['slider_id']}");
	$update=$duzenle->execute(array(
		'resim' => $refimgyol
		));



	if ($update) {

		$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");

	} else {

		Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=no");
	}

}


if (isset($_POST['sliderduzenle'])) {

	$slider_id=$_POST['slider_id'];

	$ayarkaydet=$db->prepare("UPDATE slider SET
		slider_ad=:slider_ad,
		slider_link=:slider_link,
		slider_sira=:slider_sira,
		slider_durum=:slider_durum
		WHERE slider_id={$_POST['slider_id']}");

	$update=$ayarkaydet->execute(array(
		'slider_ad' => $_POST['slider_ad'],
		'slider_link' => $_POST['slider_link'],
		'slider_sira' => $_POST['slider_sira'],
		'slider_durum' => $_POST['slider_durum']
		));


	if ($update) {

		Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");

	} else {

		Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=no");
	}

}

if ($_GET['slidersil']==ok) {
	$sil=$db->prepare("DELETE FROM slider WHERE slider_id=:id");
	$kontrol=$sil->execute(array('id'=>$_GET['slider_id']));
	


	if ($kontrol) {
		header("Location:../production/slider.php?sil=ok");
	}

	else{

		header("Location:../production/slider.php?sil=no");

	}



}



if (isset($_POST['logoduzenle'])) {

	

	$uploads_dir = '../../dimg';

	@$tmp_name = $_FILES['ayar_logo']["tmp_name"];
	@$name = $_FILES['ayar_logo']["name"];

	$benzersizsayi4=rand(20000,32000);
	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");

	
	$duzenle=$db->prepare("UPDATE ayar SET
		ayar_logo=:logo
		WHERE ayar_id=0");
	$update=$duzenle->execute(array(
		'logo' => $refimgyol
		));



	if ($update) {

		$resimsilunlink=$_POST['eski_yol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/genel-ayar.php?durum=ok");

	} else {

		Header("Location:../production/genel-ayar.php?durum=no");
	}

}



if (isset($_POST['admingiris'])) {
	$kullanici_mail=$_POST['kullanici_mail'];
	$kullanici_password= md5($_POST['kullanici_password']);
	
	$kullanicisor=$db -> prepare("SELECT * FROM kullanici WHERE kullanici_mail=:mail AND kullanici_password=:password AND kullanici_yetki=:yetki");
	$kullanicisor -> execute(array(
		'mail'=> $kullanici_mail, 
		'password'=> $kullanici_password,
		'yetki'=>5 ));

	$say=$kullanicisor->rowCount();

	if ($say==1) {

		$_SESSION['kullanici_mail']=$kullanici_mail;
		header("Location:../production/index.php");
		exit;



	}else{

		header("Location:../production/login.php?durum=no");
		exit;
	}


}

if (isset($_POST['genelayarkaydet'])) {
	//echo "Başarılı";
	//Tablo Güncelleme İşlemleri Kodları.
	$ayarkaydet=$db->prepare("UPDATE ayar SET 

		ayar_title=:ayar_title,
		ayar_description=:ayar_description,
		ayar_keywords=:ayar_keywords,
		ayar_author=:ayar_author WHERE ayar_id=0");


	$update=$ayarkaydet->execute(array(

		'ayar_title' => $_POST['ayar_title'],
		'ayar_description' => $_POST['ayar_description'],
		'ayar_keywords' => $_POST['ayar_keywords'],
		'ayar_author' => $_POST['ayar_author'], ));

	if ($update) {
		header("Location:../production/genel-ayar.php?durum=ok");
	}
	else{

		header("Location:../production/genel-ayar.php?durum=no");
	}
}

if (isset($_POST['iletisimayarkaydet'])) {
	//echo "Başarılı";
	//Tablo Güncelleme İşlemleri Kodları.
	$ayarkaydet=$db->prepare("UPDATE ayar SET 

		ayar_tel=:ayar_tel,
		ayar_gsm=:ayar_gsm,
		ayar_faks=:ayar_faks,
		ayar_mail=:ayar_mail,
		ayar_il=:ayar_il,
		ayar_ilce=:ayar_ilce,
		ayar_adres=:ayar_adres,
		ayar_mesai=:ayar_mesai WHERE ayar_id=0");


	$update=$ayarkaydet->execute(array(

		'ayar_tel' => $_POST['ayar_tel'],
		'ayar_gsm' => $_POST['ayar_gsm'],
		'ayar_faks' => $_POST['ayar_faks'],
		'ayar_mail' => $_POST['ayar_mail'],
		'ayar_il' => $_POST['ayar_il'],
		'ayar_ilce' => $_POST['ayar_ilce'],
		'ayar_adres' => $_POST['ayar_adres'],
		'ayar_mesai' => $_POST['ayar_mesai'], ));

	if ($update) {
		header("Location:../production/iletisim-ayarlar.php?durum=ok");
	}
	else{

		header("Location:../production/iletisim-ayarlar.php?durum=no");
	}
}


if (isset($_POST['apiayarkaydet'])) {
	//echo "Başarılı";
	//Tablo Güncelleme İşlemleri Kodları.
	$ayarkaydet=$db->prepare("UPDATE ayar SET 

		ayar_analystic=:ayar_analystic,
		ayar_maps=:ayar_maps,
		ayar_zopim=:ayar_zopim WHERE ayar_id=0");


	$update=$ayarkaydet->execute(array(

		'ayar_analystic' => $_POST['ayar_analystic'],
		'ayar_maps' => $_POST['ayar_maps'],
		'ayar_zopim' => $_POST['ayar_zopim'], ));

	if ($update) {
		header("Location:../production/api-ayarlar.php?durum=ok");
	}
	else{

		header("Location:../production/api-ayarlar.php?durum=no");
	}
}


if (isset($_POST['mailayarkaydet'])) {
	//echo "Başarılı";
	//Tablo Güncelleme İşlemleri Kodları.
	$ayarkaydet=$db->prepare("UPDATE ayar SET 

		ayar_smtphost=:ayar_smtphost,
		ayar_smtpuser=:ayar_smtpuser,
		ayar_smtppassword=:ayar_smtppassword,
		ayar_smtpport=:ayar_smtpport WHERE ayar_id=0");


	$update=$ayarkaydet->execute(array(

		'ayar_smtphost' => $_POST['ayar_smtphost'],
		'ayar_smtpuser' => $_POST['ayar_smtpuser'],
		'ayar_smtppassword' => $_POST['ayar_smtppassword'],
		'ayar_smtpport' => $_POST['ayar_smtpport'], ));

	if ($update) {
		header("Location:../production/mail-ayarlar.php?durum=ok");
	}
	else{

		header("Location:../production/mail-ayarlar.php?durum=no");
	}
}



if (isset($_POST['sosyalayarkaydet'])) {
	//echo "Başarılı";
	//Tablo Güncelleme İşlemleri Kodları.
	$ayarkaydet=$db->prepare("UPDATE ayar SET 

		ayar_facebook=:ayar_facebook,
		ayar_twitter=:ayar_twitter,
		ayar_google=:ayar_google,
		ayar_youtube=:ayar_youtube WHERE ayar_id=0");


	$update=$ayarkaydet->execute(array(

		'ayar_facebook' => $_POST['ayar_facebook'],
		'ayar_twitter' => $_POST['ayar_twitter'],
		'ayar_google' => $_POST['ayar_google'],
		'ayar_youtube' => $_POST['ayar_youtube'], ));

	if ($update) {
		header("Location:../production/sosyal-ayarlar.php?durum=ok");
	}
	else{

		header("Location:../production/sosyal-ayarlar.php?durum=no");
	}
}

if (isset($_POST['hakkimizdakaydet'])) {
	//echo "Başarılı";
	//Tablo Güncelleme İşlemleri Kodları.
	$ayarkaydet=$db->prepare("UPDATE hakkimizda SET 

		hakkimizda_baslik=:hakkimizda_baslik,
		hakkimizda_icerik=:hakkimizda_icerik,
		hakkimizda_video=:hakkimizda_video,
		hakkimizda_vizyon=:hakkimizda_vizyon,
		hakkimizda_misyon=:hakkimizda_misyon WHERE hakkimizda_id=0");


	$update=$ayarkaydet->execute(array(

		'hakkimizda_baslik' => $_POST['hakkimizda_baslik'],
		'hakkimizda_icerik' => $_POST['hakkimizda_icerik'],
		'hakkimizda_video' => $_POST['hakkimizda_video'],
		'hakkimizda_vizyon' => $_POST['hakkimizda_vizyon'],
		'hakkimizda_misyon' => $_POST['hakkimizda_misyon'], ));

	if ($update) {
		header("Location:../production/hakkimizda.php?durum=ok");
	}
	else{

		header("Location:../production/hakkimizda.php?durum=no");
	}
}


if (isset($_POST['kullaniciduzenle'])) {

	$kullanici_id=$_POST['kullanici_id'];

	$ayarkaydet=$db->prepare("UPDATE kullanici SET
		kullanici_tc=:kullanici_tc,
		kullanici_adsoyad=:kullanici_adsoyad,
		kullanici_durum=:kullanici_durum
		WHERE kullanici_id={$_POST['kullanici_id']}");

	$update=$ayarkaydet->execute(array(
		'kullanici_tc' => $_POST['kullanici_tc'],
		'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
		'kullanici_durum' => $_POST['kullanici_durum']
		));


	if ($update) {

		Header("Location:../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=ok");

	} else {

		Header("Location:../production/kullanici-duzenle.php?kullanici_id=$kullanici_id&durum=no");
	}

}

if ($_GET['kullanicisil']==ok) {
	$sil=$db->prepare("DELETE FROM kullanici WHERE kullanici_id=:id");
	$kontrol=$sil->execute(array('id'=>$_GET['kullanici_id']));

	if ($kontrol) {
		header("Location:../production/kullanici.php?sil=ok");
	}

	else{

		header("Location:../production/kullanici.php?sil=no");

	}



}


if (isset($_POST['menuduzenle'])) {

	$menu_id=$_POST['menu_id'];

	$menu_seourl=seo($_POST['menu_ad']);

	
	$ayarkaydet=$db->prepare("UPDATE menu SET
		menu_ad=:menu_ad,
		menu_detay=:menu_detay,
		menu_url=:menu_url,
		menu_sira=:menu_sira,
		menu_seourl=:menu_seourl,
		menu_durum=:menu_durum
		WHERE menu_id={$_POST['menu_id']}");

	$update=$ayarkaydet->execute(array(
		'menu_ad' => $_POST['menu_ad'],
		'menu_detay' => $_POST['menu_detay'],
		'menu_url' => $_POST['menu_url'],
		'menu_sira' => $_POST['menu_sira'],
		'menu_seourl' => $menu_seourl,
		'menu_durum' => $_POST['menu_durum']
		));


	if ($update) {

		Header("Location:../production/menu-duzenle.php?menu_id=$menu_id&durum=ok");

	} else {

		Header("Location:../production/menu-duzenle.php?menu_id=$menu_id&durum=no");
	}

}



if ($_GET['menusil']=="ok") {

	$sil=$db->prepare("DELETE from menu where menu_id=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['menu_id']
		));


	if ($kontrol) {


		header("location:../production/menu.php?sil=ok");


	} else {

		header("location:../production/menu.php?sil=no");

	}


}

if (isset($_POST['menuekle'])) {

	

	$menu_seourl=seo($_POST['menu_ad']);

	
	$menuekle=$db->prepare("INSERT INTO menu SET
		menu_ad=:menu_ad,
		menu_detay=:menu_detay,
		menu_url=:menu_url,
		menu_sira=:menu_sira,
		menu_seourl=:menu_seourl,
		menu_durum=:menu_durum
		");

	$insert=$menuekle->execute(array(
		'menu_ad' => $_POST['menu_ad'],
		'menu_detay' => $_POST['menu_detay'],
		'menu_url' => $_POST['menu_url'],
		'menu_sira' => $_POST['menu_sira'],
		'menu_seourl' => $menu_seourl,
		'menu_durum' => $_POST['menu_durum']
		));


	if ($insert) {

		Header("Location:../production/menu.php?durum=ok");

	} else {

		Header("Location:../production/menu.php?durum=no");
	}

}




?>
