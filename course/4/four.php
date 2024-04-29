<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 

/*if koşulu
== eşit ise
=== aynısı ise


*/



$say=5;

if ($say<5) {
	echo "1 yanlış";
}
elseif ($say<=5) {
	echo "doğru";
}
else{
	echo "Başka bir şey";

}
echo "<br>";
echo "<hr>";

//kısa if kullanımı
echo $say=='800' ? 'doğru':'yanlış';


echo "<br>";
$deger="Elma";
 ?>
<select>
	<option<?php echo $deger=='Armut' ? 'selected':''; ?>>Armut</option>
	<option <?php echo $deger=='Elma' ? 'selected':''; ?>>Elma</option>
</select>

</body>
</html>