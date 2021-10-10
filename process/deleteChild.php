<?php 
include "../db/conn.php";
session_start();
$ID = $_GET['id']; 
$memberId = $_SESSION['id']; 
$sql="DELETE FROM `child` WHERE id=$ID AND pid = $memberId";
$result=mysqli_query($conn,$sql);
if(mysqli_affected_rows($conn)>=1){
    header("Location: ../server/childTables.php?delete=true&msg=Your child is deleted successfully");
}else{
    header("Location: ../server/childTables.php?delete=false&msg=You can only delete your child");
}

?> 