<?php
include "../db/conn.php";

if(isset($_POST['addMember'])){
    $firstName =$_POST['firstName'];
    $lastName = $_POST['lastName'];
    $mobileNo = $_POST['mobile'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['Gender'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $fatherName = $_POST['fathername'];
    $motherName = $_POST['motherName'];
    $lifeMemberNo = $_POST['lifeMember'];
    $recieptno = $_POST['recieptNo'];
    $profilepic = $_POST['InputFile'];
    $sql = "INSERT INTO  membersdetails (`firstName`, `lastname`, `mobileNo`, `email`, `dob`, `gender`, `state`, `city`, `address`, `password`, `fatherName`, `motherName`, `lifeMemberNo`, `recieptNo`, `profilepic`) VALUES ('$firstName','$lastName','$mobileNo','$email','$dob','$gender','$state','$city','$address','$password','$fatherName','$motherName','$lifeMemberNo','$recieptno','$profilepic')";
    if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
    header("Location: ../server/member_form.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
}




?>