<?php 


$dsn = 'mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_34dbae8beb91c36';
$user = 'b1d30d637b6822';
$pass = 'd84e8674';
$options = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
$pdo = new PDO($dsn, $user, $pass, $options);


?>
