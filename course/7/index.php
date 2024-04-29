<?php require_once 'baglan.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD İŞLEMLERİ</title>
</head>
<body>
		<h1>Veritabanı PDO kayıt işlemleri</h1>
		<hr>
		<?php 
		if ($_GET['durum']=="ok") {
			echo "İşlem Başarılı";
		}
		elseif ($_GET['durum']=="no") {
			echo "İşlem Başarısız";
		}
		 ?>
		<form action="islem.php" method="POST">
			<input type="text" required name="bilgilerim_ad"	placeholder="Adınızı Giriniz...">
			<input type="text" required name="bilgilerim_soyad"	placeholder="Soyadınızı Giriniz...">
			<input type="email" required name="bilgilerim_mail"	placeholder="Mailinizi Giriniz...">
			<input type="text" required name="bilgilerim_yas"	placeholder="Yaşınızı Giriniz...">
			<button type="submit" name="insertislemi">Formu Gönder</button>
		</form>
		<br>

		<h4>Kayıtların Listelenmesi</h4>
		<hr>
		<?php 
		
		/* $bilgilerimsor=$db->prepare("SELECT * from bilgilerim");
		$bilgilerimsor->execute();

		$bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);
		
		echo "<pre>";
		print_r($bilgilerimcek);
		echo "</pre>"."<br>";



		echo $bilgilerimcek['bilgilerim_ad']; */
/*select islemi
		$bilgilerimsor=$db->prepare("SELECT * from bilgilerim");
		$bilgilerimsor->execute();

		while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC))
		{
		echo $bilgilerimcek['bilgilerim_ad']."<br>";
		}*/


		//where işlemi

		/*$bilgilerimsor=$db->prepare("SELECT * from bilgilerim WHERE bilgilerim_yas=:bilgilerim_yas");
		$bilgilerimsor->execute(
			array('bilgilerim_yas'=>21)
		);

		while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC))
		{
		echo $bilgilerimcek['bilgilerim_ad']."<br>";
		}*/

		 ?>

		 <table style="width:  60%" border="1">
		 	<tr>
		 		<th>Sıra No.</th>
		 		<th>ID</th>
		 		<th>Ad</th>
		 		<th>Soyad</th>
		 		<th>Mail</th>
		 		<th>Yaş</th>
		 		<th width="50">İşlemler</th>
		 		<th width="50">İşlemler</th>
		 	</tr>
<?php
		$bilgilerimsor=$db->prepare("SELECT * from bilgilerim ");
		$bilgilerimsor->execute();
		$sno=0;
		while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)){ $sno++;

?>
		 	<tr>
		 		<td><?php echo $sno; ?></td>
		 		<td><?php echo $bilgilerimcek['bilgilerim_id']; ?></td>
		 		<td><?php echo $bilgilerimcek['bilgilerim_ad']; ?></td>
		 		<td><?php echo $bilgilerimcek['bilgilerim_soyad']; ?></td>
				<td><?php echo $bilgilerimcek['bilgilerim_mail']; ?></td>
				<td><?php echo $bilgilerimcek['bilgilerim_yas']; ?></td>
				<td align="center"><a href="duzenle.php?bilgilerim_id=<?php echo $bilgilerimcek['bilgilerim_id'] ?>"><button>Düzenle</button></td></a>
		 		<td align="center"><a href="islem.php?bilgilerim_id=<?php echo $bilgilerimcek['bilgilerim_id'] ?>&bilgilerimsil=ok"><button>Sil</button></td></a>
		 	</tr>
		 <?php } ?>
		 </table>
</body>
</html>