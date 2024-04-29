<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	</title>
</head>
<body>
<?php 
$ad="veysel esot";

echo strlen($ad)."<br>";
echo rand(1,50)."<br>";

function yaz(){
	echo "Fonksiyon çıktısı";

}

yaz();

echo "<hr>";

function topla($sayi1,$sayi2){

	echo $sayi1+$sayi2;

}
function topla2($sayi1,$sayi2){

	return $sayi1+$sayi2;

}
topla(5,5);
echo "<br>".topla2(5,5)."<hr>";
$b=10;
function ekle($a){
	global $b;
	return $a+$b;

}
function ekle2($a){

	return $a+$b;

}
echo ekle(20)."<br>";
echo ekle2(20);


function yazi($ad,$soyad="Soy isim girilmedi!"){
	return $ad." ".$soyad;

}
 echo yazi("Veysel")."<br>";
	
//recursive fonksiyon
$sabit=1;
function faktoriyel($a){
	global $sabit;

	if ($a>1) {
		$sabit=$sabit*$a;
		$a--;
		faktoriyel($a);
	}
	return $sabit;
}
echo faktoriyel(3)."<hr>";


//fonksiyon var mı yok mu

if (function_exists("yaz")) {
	echo "Fonksiyon var.";
}
else{
	echo "Fonksiyon yok.";
}

//tüm fonksiyonları listeleme;

$goster=get_defined_functions();

echo "<pre>";
print_r($goster);
echo "</pre>";

 




 ?>



</body>
</html>
