<?php 


$dsn = 'mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_1d20e6a364ea66f';
$user = 'b948b35f1ef641';
$pass = 'b33c94f2';
$options = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
$pdo = new PDO($dsn, $user, $pass, $options);


?>
