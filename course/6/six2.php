<?php 

//cookie nedir ve nasıl oluşturulur?
$adsoyad="Veysel Eşot";
date_default_timezone_set('Europe/Istanbul');
setcookie("adsoyad",$adsoyad,time()+3600);


echo $_COOKIE['adsoyad'];



//cookie süre arttırma  strtotime("+30 seconds") gibi
setcookie("adsoyad",$adsoyad,strtotime("+1 week"));

//cookie silme

setcookie("adsoyad","",strtotime("-1 week"));

 ?>