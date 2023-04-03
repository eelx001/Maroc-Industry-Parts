<?php 

if(isset($_POST['logout'])&&($_SESSION['id'])) {
    session_destroy();
    header('location: login.php');
}
?>