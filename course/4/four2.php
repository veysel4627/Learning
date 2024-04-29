<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 

if (isset($_POST['notislemi'])) {


$sayi=5;

//switch case
	switch ($sayi) {
		case '1':
			echo "1";
			break;
		case '2':
			echo "2";
			break;
		case '3':
			echo "3";
			break;
		case '4':
			echo "4";
			break;
		case '5':
			echo "5";
			break;	

		default:
			echo "hiçbiri";
			break;
	}
 echo "<br>";

 echo "Notunuz : ".$not=$_POST['not'];

 switch ($not) {
 	case '5':
 		echo " Pek iyi";
 		break;
 	case '4':
 		echo " iyi";
 		break;	
 	case '3':
 		echo " ortalama";
 		break;
 	case '2':
 		echo " Geçtin";
 		break;	

 	case '1':
 		echo " Kaldın";
 		break;	
 	default:
 		echo " Tanımsız Sonuç";
 		break;
 }
}
 ?>
<hr>
<br>


 <form action="" method="POST">
 	Notunuzu Girin <input type="number" max="5" name="not">
 	<button type="submit" name="notislemi">Sonuçlandır</button>
 </form>

</body>
</html>