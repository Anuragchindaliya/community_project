<?php 
include "../db/conn.php";
$ID = $_GET['id']; 
$sql="DELETE FROM membersdetails WHERE id=$ID";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location: ../server/member_table.php");
}else{
    echo "error in deletion";
}

?> 