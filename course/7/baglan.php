<?php 

try {
	


	$db=new PDO("mysql:host=localhost;dbname=udemy;charset=utf8",'root','12345678');

	//echo "Veri tabanı bağlantısı başarılı";
} catch (PDOExpception $e ) {

	echo $e->getMessage();
	
}


 ?>
