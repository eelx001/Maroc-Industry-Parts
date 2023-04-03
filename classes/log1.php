<?php
$so = "";
$fo ="";
if(isset($_POST['adlog'])){
  if(empty($_POST['usertxt'])&&(empty($_POST['passtxt']))){
    $so = "<center><p style='color:red;'> Entrer le Nom d'utilisateur ou le mot de passe</p></center>";
  }else{
    
  $name = $_POST['usertxt'];
  $password = $_POST['passtxt'];

  $dsn = 'mysql:host=localhost;dbname=mip';
  $user = 'root';
  $pass = '';
  $options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
  );
  $pdo = new PDO($dsn, $user, $pass, $options);

  $stmt = $pdo->prepare('SELECT * FROM admin WHERE username = :name');
  $stmt->execute(array(':name' => $name));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  if($row && $row['password'] == $password) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['user'] = $row['username'];
    header('Location: panel.php');
    exit();
  } else {
    $fo = "<center><p style='color:red;'>Nom d'utilisateur ou mot de passe invalide.</p></center>";
  }
}
}
?>