<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
	//for döngüsü
	
	
	for ($i=0;  $i < 10 ; $i++) { 
		echo $i;
	}

	echo "<hr>";
 ?>

<select>
	<?php 
		for ($i=1; $i <= 81; $i++) { ?>
			<option><?php echo $i; ?></option>
		<?php  }?>
</select>

<?php 
echo "<hr>";

for ($i=0; $i <= 100 ; $i++) { 
	echo $i." ";
	if ($i==50) {
		echo "<br>";
		echo "50. sayıya ulaştık ";
		echo "<br>";
	}
}

$cift=0;
$tek=0;

echo "<hr>";

for ($i=1; $i <20 ; $i++) { 
	echo " $i.sayı :".$i;
	if ($i%2==0) {
		echo " çift sayı";$cift++;	}
		else{
			echo " tek sayı";$tek++;
		}
		echo "<br>";
	}
echo "$cift tane çift $tek tane tek var";
	
 ?>

</body>
</html>