<?php
session_start();
include('classes/log1.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="img1/fav.png" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>MIP login</title>
</head>
<style>
  .container{
    padding-top:10%;
    width:40%;
  }
  .btn {
  background: #308f8a !important;
  background-image: -webkit-linear-gradient(top, #ADFF2F, #70ab11);
  background-image: -moz-linear-gradient(top, #ADFF2F, #70ab11);
  background-image: -ms-linear-gradient(top, #ADFF2F, #70ab11);
  background-image: -o-linear-gradient(top, #ADFF2F, #70ab11);
  background-image: linear-gradient(to bottom, #ADFF2F, #70ab11);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  -webkit-box-shadow: 0px 3px 15px #050405;
  -moz-box-shadow: 0px 3px 15px #050405;
  box-shadow: 0px 3px 15px #050405;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 7px 20px 7px 20px;
  text-decoration: none;
  color:black;
  font-family:monospace;
  font-weight:600;
  float:right;
}

.btn:hover {
  background: #3cb0fd;
  text-decoration: none;
}
.img{
  text-align:center;   
}
</style>
<body>
    <br>
    <div class="img"><img src="img1/oko.png" class="img-fluid" width="295px"></div>
  <div class="container">
  <div class="form-group">
    <?php echo $so; echo $fo; ?>
 <form method="post"> 
    <label for="exampleInputPassword1">Nom d'utilisateur: </label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Utilisateur" autocomplete="off"name="usertxt">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Mot de passe: </label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de Pass" autocomplete="off" name="passtxt">
  </div>
  <button class="btn btn-default" role="submit" type="submit" name="adlog">LOGIN</button> </div>
</form>
</div>
</body>
</html>
