<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
$array=array("veysel","esot",10,50,80,100);



echo $array[0];
echo " ".$array[1];
echo "<pre>";
print_r($array);
echo "</pre>";

//dizilerde sık kullanılan hazır fonksiyonlar
/*
sort => küçükten büyüğe alfabetik doğru sıralar.
rsort => büyükten küçüğe alfabetik doğru sıralar.
in_array =>dizi içerisinde aradığımız değerin olup olmadığına bakar varsa 1 döndürür.
imlode =>dizi değerlerini birleştirmeye yarar.
explode değişkeni parçalayarak dizi haline getirir.
*/

$array1 = array(10,9,8,7,6,12,5,4,3,2,1);
echo "<pre>";
sort($array1);
print_r($array1);
echo "</pre>";

echo "<pre>";
rsort($array1);
print_r($array1);
echo "</pre>";

$array2= array("a","c","b","d");
echo "<pre>";
sort($array2);
print_r($array2);
echo "</pre>";

echo "<pre>";
rsort($array2);
print_r($array2);
echo "</pre>";

echo "<hr>";

$sonuc=in_array("a",$array2);
$sonuc1=in_array("e",$array2);

if ($sonuc) {
	echo "var"."<br>";
}
else{
	echo "yok"."<br>";
}
if ($sonuc1) {
	echo "var"."<br>";
}
else{
	echo "yok"."<br>";
}


$sonuc3=implode("+",$array2);
echo $sonuc3;



$time="30-04-2022 19:07";

$sonuc4=explode(" ",$time);

echo "<pre>";
print_r($sonuc4);
echo "</pre>";

echo "Tarih :  ".$sonuc4[0]." Saat :  ".$sonuc4[1];

echo "<hr>";

//time zone ayarları ve anlık zaman alma
date_default_timezone_set('Europe/Istanbul');
echo $date=date("d-m-y h:i:s");
$sonuc5=explode(" ",$date);
echo "<pre>";
print_r($sonuc5);
echo "</pre>";

?>
</body>
</html> 