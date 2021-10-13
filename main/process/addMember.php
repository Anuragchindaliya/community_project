<?php
include "../../data/db/conn.php";

if (isset($_POST['addMember'])) {
    $firstName = $_POST['firstName'];
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
    $pincode = $_POST['pincode'];

    $uniqueRes =mysqli_query($conn,"SELECT email from `members` WHERE `email` = '$email'");
    if(mysqli_fetch_array($uniqueRes)>0){
        header("Location: ../server/member_form.php?already=This email is already register");
        die();
    }
    // image upload************************************
    $file = $_FILES['InputFile'];
    $fileName = $_FILES['InputFile']['name'];
    $fileTmpName = $_FILES['InputFile']['tmp_name'];
    $fileType = $_FILES['InputFile']['type'];
    $fileSize = $_FILES['InputFile']['size'];
    $fileError = $_FILES['InputFile']['error'];

    $fileExt = explode('.', $fileName);

    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 3000000) {
                $fileNameNew = "member_".uniqid() . "." . $fileActualExt;
                $fileDestination = '../../data/uploads/member/' . $fileNameNew;

                // uploadfiles
                $sql = "INSERT INTO  `members` (`firstName`, `mobileNo`, `email`, `dob`, `gender`, `state`, `city`, `address`, `password`, `fatherName`, `motherName`, `lifeMemberNo`, `profilepic`,`pincode`,`status`) VALUES ('$firstName','$mobileNo','$email','$dob','$gender','$state','$city','$address','$password','$fatherName','$motherName','$lifeMemberNo','$fileNameNew','$pincode','1')";
                if (mysqli_query($conn, $sql)) {
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: ../server/member_form.php?msg=Member register successfully");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            } else {
                echo "your file is too big!";
            }
        } else {
            echo "There was an error Uploading your
            file!";
        }
    } else {
        echo "You cannot upload files of this type!";
    }

    mysqli_close($conn);
}
