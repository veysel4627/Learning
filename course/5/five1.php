<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
//while döngüsü
	/*$say=1;

	while ($say <= 10)
		{
		echo $say."<br>";
		$say++;
		
		}*/

	//for Döngüsü ile dizi yazırma	
	$dizi = array("elma" ,"armut","karpuz","kavun","portakal" );	
	echo "<pre>";
	print_r($dizi);
	echo "</pre>";

	echo $dizi[0];
	echo $dizi[1];
	echo $dizi[2];
	echo $dizi[3];
	echo "<hr>";
	$say=count($dizi);//count dizideki eleman sayısını saydırma
	for ($i=0; $i <=$say ; $i++) { 
		echo $dizi[$i];echo " ";
	}
	echo "<hr>";

	//foreach dööngüsü
	foreach ($dizi as $meyve) {
		echo "$meyve";echo " ";
	}
 ?>
</body>
</html>
