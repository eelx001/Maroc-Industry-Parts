<?php 


$dsn = 'mysql:host=localhost;dbname=mip';
$user = 'root';
$pass = '';
$options = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
$pdo = new PDO($dsn, $user, $pass, $options);


?>