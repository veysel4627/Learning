<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <meta charset="utf-8">
</head>
<body>
<?php
echo "Veysel Esot"; //yorum
print " veysel esot";
#yorum
/*yorum*/
echo "<br>";
//birleştirme operatörü.

echo "Öğrenci  "."Veysel Eşot"."  Ahmet		";
 ?>
 <?php 
//değişkenler
echo "<br/>";

 $ad="Veysel";
 $soyad="Eşot";//string
 $no=1500;//int
 $AdSoyad="veysel889494";
 /*
 -Değişkenler $ ile başlar.
 -Değişkene değer ataması yapılırken = kullanılır.
 -Değişkene metinsel ifadeler aktarılırken " " veya' '
 kullanılabilir.
 -Değişkene integer sayısal değer aktarılırken direkt olarak yazılabilir.
 */
 echo $ad.$soyad;
 $ad="Course";
 echo "<br>".$ad.$soyad."<br>"."<br>";
  ?>


<?php 
$ad="Veysel";
echo "<h1>Bilgilerim</h1>";
echo "<hr>";

echo "Adım ve Soyadım .....: ".$ad." ".$soyad."<br>";
echo "Numaram .............: ".$no;

echo "<hr>";

 ?>

<?php 
$numara1=50;
$numara2=13;
//echo $numara2+$numara1;
echo "Toplama İşlemi"."<br>";
$topla=$numara1+$numara2;
echo "$numara1+$numara2=$topla";
echo "<br>"."<hr>";

echo "Çıkarma İşlemi"."<br>";
$cıkar=$numara1-$numara2;
echo "$numara1-$numara2=$cıkar";
echo "<br>"."<hr>";

echo "Bölme İşlemi"."<br>";
$bolme=$numara1/$numara2;
echo "$numara1/$numara2=$bolme";
echo "<br>"."<hr>";

echo "Çarpma İşlemi"."<br>";
$carpma=$numara1*$numara2;
echo "$numara1*$numara2=$carpma";
echo "<br>"."<hr>";


 //Atama İşlemleri 

$atama=400;

echo "\$atama değişkeninin değeri : ".$atama;
echo "<hr>";

$atama+=500;//atama *= /= -= += , ++ -- 

echo "\$atama değişkeninin değeri : ".$atama;
echo "<hr>";

//hazır fonksiyonlar
$sayi=rand(0,10);//rand belirlenen aralıkta rastgele sayı
if ($sayi>=5) {

    echo "kazandınız"."<br>";
}
else{
    echo "kaybettiniz"."<br>";
}

/*

" tırnak ve ' tırnak arasındaki farklar
-Çift Tırnak içerisnde değişken içerikleri okunabilir
-Tek tırnakta okunamaz
*/

echo "<hr>";
$ad="Veysel";
$soyad="Eşot";

echo "Benim adım $ad"."<br>";
echo 'Benim adım $ad'."<hr>";

/*Yok sayma işaretleri
php nin yok saymasını istediğin komutun başına \ getirilir

*/

echo "Ben \"Veysel Eşot'um\""."<hr>";




/*Hazır String Fonksiyonlar

strtolower =>büyük metni küçük metne çevirir
strtoupper =>küçük metni büyük metne çevirir
ucwords => metnin kelimelerinin ilk harflerini büyük yazar
ucfirst => metnin ilk harfini büyük yazar
strlen => metnin karakter sayısını verir
substr => metnin belli bir karakter sayısını alır
*/

echo $yazi="BEN PHP OGRENIYORUM";
echo "<br>";
echo $yazi=strtolower($yazi);
echo "<br>";
echo $yazi=strtoupper($yazi);
echo "<br>";
$yazi=strtolower($yazi);
echo $yazi=ucwords($yazi);
echo "<br>";
$yazi=strtolower($yazi);
echo $yazi=ucfirst($yazi);
echo "<br>";
echo "\$yazi değişkeninde olan karakter sayısı :".strlen($yazi);
echo "<br>";
echo substr($yazi,0,4);
echo "<br>"."<hr>";
// devamını oku uygulaması

echo "<h1>Haber Başlığı</h1>";
$yazi="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lobortis eu dui id ultrices. Aliquam erat volutpat. Suspendisse elit felis, sodales et tortor sed, pharetra maximus velit. Integer aliquet nec magna vel bibendum. Sed sed purus nec nisi ornare bibendum. Pellentesque consectetur urna eu turpis rhoncus mollis. Cras auctor arcu at mi porta placerat. In vel posuere erat, nec dignissim orci. Aliquam mi odio, bibendum sed pulvinar at, molestie et neque. Integer a lorem sit amet ex laoreet hendrerit vel vel magna. Nam eget sapien vestibulum, imperdiet lectus ut, suscipit leo. Sed euismod ex at ultricies tincidunt.
 Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam non tincidunt ante. In varius, lectus non lacinia euismod, massa odio consectetur ligula, non dignissim nunc lorem eget arcu. Proin et ultricies arcu, vitae varius odio. Curabitur ut quam vel ante pretium bibendum vitae eget nunc. Fusce vel aliquet est, sed lacinia dui. Aliquam erat volutpat. Sed auctor pellentesque felis, ac ultricies dui viverra euismod. Ut a est volutpat, egestas ante non, tincidunt dui.";


echo "<p>".substr($yazi,0,250)."....</p>";

echo "<a href=\"#\">Devamını oku</a>";















 ?>



</body>
</html> 