<?php 
include "../db/conn.php";
$ID = $_GET['id']; 
$sql="DELETE FROM `child` WHERE id=$ID";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location: ../server/childTables.php");
}else{
    echo "error in deletion";
}

?> 