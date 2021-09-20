<?php 
session_start();
if($_SESSION['user']=='admin'){
    unset($_SESSION["login"]);
    unset($_SESSION["username"]);
    header("Location: ../client/admin_login.php");
}else{
    unset($_SESSION["login"]);
    unset($_SESSION["username"]);
    header("Location: ../client/member_login.php");
}

?>
