<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 <?php 
//post ve get methodları
 /*echo  $_POST['ad'];
 echo "<br>";
 echo  $_POST['soyad'];*/
 echo  $_GET['ad'];
 echo "<br>";
 echo  $_GET['soyad'];
 $kullanici_id=151;
  ?>


  <form action="three2.php" method="GET">
  	
  	Ad <input type="text" name="ad" placeholder="Adınızı Giriniz">
  	Soyad <input type="text" name="soyad" placeholder="Soyadınızı Giriniz">

  	<input type="submit" value="Formu Gönder" name="">

  </form>


  <a href="three2.php?kullanici_id=<?php echo $kullanici_id ?>"><button>Kullanıcıyı Sil</button></a>
</body>
</html>