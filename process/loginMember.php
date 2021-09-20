<?php
session_start();
include "../db/conn.php";
if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql= "SELECT * FROM `members` WHERE email='$email' AND password ='$password'";
     
    $result=mysqli_query($conn,$sql);

    $data=mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result)>0){
        $_SESSION['login']=true;
        $_SESSION['user']="member";
        $_SESSION['username']=$data['firstName'];
        header("location: ../server/dashboard.php");
    }else{
        $msg = "wrong credentials";
        header("location: ../client/member_login.php?msg=$msg");
    }
}else{
    exit("Please fill details");
}
