<?php //echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=login.html\">"; 
       $nombre = $_POST['nombre'];
       
       $email = $_POST['email'];
       
       $phone = $_POST['phone'];
       
       $password = $_POST['password'];

      

$db = new PDO("mysql:host=localhost;dbname=Prueba","prueba","prueba");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
 $queryStr = "INSERT INTO probando(login,phone,email,password) VALUES ('$nombre',$phone,'$email','$password')";
 $db->query($queryStr);
 header("location:login.html");
} catch (PDOException $e) {
 echo $e->getMessage();
}


?>