<?php 
session_start();
include "../../data/db/conn.php";
if(isset($_POST['role'])){
    $id = $_POST['id'];
    $status = $_POST['status'];
    if($_POST['status']=="0"){
         $sql="UPDATE `members` SET `status`='1' WHERE `id`='$id'";
        $res=mysqli_query($conn,$sql);
        if($res){
            echo "member is active";
        }else{
            echo "member is deactive";
        }
    }else{
        $sql="UPDATE `members` SET `status`='0' WHERE `id`='$id'";
        $res=mysqli_query($conn,$sql);
        if($res){
            echo "member is deactive";
        }else{
            echo "member is active";
        }
    }
    
    // echo $id,$status;
}
?>