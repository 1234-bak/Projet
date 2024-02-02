<?php
$dsn = "mysql:host=localhost;dbname=ProjetClass;charset=utf8";
$login = "root";
$password = "";

try {
    $cnx = new PDO($dsn,$login,$password);
    $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    
} catch (Exception $e) {
    $e->getMessage();
}


?>
