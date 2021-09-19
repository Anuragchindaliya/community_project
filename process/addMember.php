<?php
include "../db/conn.php";

if (isset($_POST['addMember'])) {
    $firstName = $_POST['firstName'];
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
                $sql = "INSERT INTO  `members` (`firstName`, `lastname`, `mobileNo`, `email`, `dob`, `gender`, `state`, `city`, `address`, `password`, `fatherName`, `motherName`, `lifeMemberNo`, `recieptNo`,`profilepic`) VALUES ('$firstName','$lastName','$mobileNo','$email','$dob','$gender','$state','$city','$address','$password','$fatherName','$motherName','$lifeMemberNo','$recieptno','$fileNameNew')";
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
