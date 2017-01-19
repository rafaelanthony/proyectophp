<?php

if (isset($_POST['login'])) {
 	$login = $_POST['login'];

 } 
 else{
 	echo "La variable login no está definida";
 }
 

$db = new PDO("mysql:host=localhost;dbname=Prueba","prueba","prueba");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
 $querySelect = "SELECT * FROM probando WHERE login = '$login'";

 $comprobar=$db->query($querySelect);
 $cuenta=$comprobar->rowCount();

	 if ($cuenta == 0){
		echo 'el user no esta registrado';
		exit();

	 }
	 if ($cuenta == 1){
 		$querySelect = "SELECT password FROM probando WHERE login = '$login'";
		$mirarpassw=$db->query($querySelect);
		
		if ($password = $mirarpassw){
		header("location:inicio.html");	}
		else{
			echo "Error password incorrecto";
			header("location:login.html");
		}
 	}
 	if ($cuenta >= 2){
		$querySelect = "SELECT password FROM probando WHERE login = '$login'";
		$mirarpassw=$db->query($querySelect);


		

	}
 
	
}
	catch (PDOException $e) {
 echo $e->getMessage();
}

?>
