<?php
$db = new PDO("mysql:host=localhost;dbname=Prueba","prueba","prueba");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
 $queryStr = "SELECT * FROM probando where id=1";
 $sacandodatos=$db->query($queryStr);
 $row=$sacandodatos->fetch();
 echo 'nombre: '.$row['login'].' telefono: '.$row['phone'];
} catch (PDOException $e) {
 echo $e->getMessage();
}