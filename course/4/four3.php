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
//tek çift
if (isset($_POST['notislemi'])){
echo "Sayi : ".$not=$_POST['not']; echo " - ";
}

if ($not%2) {
	echo " Bu Sayı Tektir ";
} else {
	echo " Bu Sayı Çifttir ";
}

 ?>

<hr>

 <form action="" method="POST">
 	Sayı Girin Girin <input type="number" max="5" name="not">
 	<button type="submit" name="notislemi">Sonuçlandır</button>
 </form>

</body>
</html>