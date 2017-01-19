<?php
$db = new PDO("mysql:host=localhost;dbname=Prueba","prueba","prueba");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
 $queryStr = "INSERT INTO probando(login,phone,email) VALUES ('rafa',68547587,'rafa@gmail.com')";
 $db->query($queryStr);
} catch (PDOException $e) {
 echo $e->getMessage();
}