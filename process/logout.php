<?php 
session_start();
unset($_SESSION["login"]);
unset($_SESSION["username"]);
header("Location: ../client/member_login.php");

?>
