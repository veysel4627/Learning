<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 

//if örnek

//or veya and veya

$kadi="12";
$pass="123";

if ($kadi==$_POST['kullanici_ad'] AND $pass==$_POST['kullanici_password']) 
{
	echo "Giriş Başarılı";
}
else{
	echo "Başarısız Giriş Denemesi";
}

 ?>

 <br>
 <hr>

 <h3>Kullanıcı Girişi</h3>
 <form action="" method="POST">
 	
Kullanıcı Adı <input type="text" name="kullanici_ad" placeholder="Kullanıcı Adını Giriniz...">

Şifre <input type="password" name="kullanici_password" placeholder="Şifrenizi Giriniz">

<button type="submit">Giriş yap</button>

 </form>


</body>
</html>
