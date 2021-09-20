<?php 
include "../db/conn.php";
session_start();
if($_SESSION['user']==="member"){
    header("Location: ../server/dashboard.php");
}
$ID = $_GET['id']; 
$sql="DELETE FROM `members` WHERE id=$ID";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location: ../server/member_table.php");
}else{
    echo "error in deletion";
}

?> 