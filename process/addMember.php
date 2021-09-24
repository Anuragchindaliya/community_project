<?php
include "../db/conn.php";

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
                $fileNameNew = uniqid() . "." . $fileActualExt;
                $fileDestination = 'uploads/' . $fileNameNew;

                // uploadfiles
                $sql = "INSERT INTO  `members` (`firstName`, `mobileNo`, `email`, `dob`, `gender`, `state`, `city`, `address`, `password`, `fatherName`, `motherName`, `lifeMemberNo`, `profilepic`,`pincode`) VALUES ('$firstName','$mobileNo','$email','$dob','$gender','$state','$city','$address','$password','$fatherName','$motherName','$lifeMemberNo','$fileNameNew','$pincode')";
                if (mysqli_query($conn, $sql)) {
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: ../server/member_form.php");
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
