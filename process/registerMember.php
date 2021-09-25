<?php
include "../db/conn.php";

if (isset($_POST['registerMember'])) {
    $firstName = $_POST['firstName'];
    $mobileNo = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $pincode = $_POST['pincode'];

    $sql="SELECT * FROM `members` WHERE `email` = '$email'";
    $res=mysqli_query($conn,$sql);
    echo mysqli_num_rows($res);
    if(mysqli_num_rows($res)>0){
        header("Location: ../client/all_form.php?already=you already have an account");
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
                $fileNameNew = uniqid() . "." . $fileActualExt;
                $fileDestination = 'uploads/' . $fileNameNew;

                // uploadfiles
                $sql = "INSERT INTO  `members` (`firstName`, `mobileNo`, `email`,`address`, `password`,`profilepic`,`pincode`) VALUES ('$firstName','$mobileNo','$email','$address','$password','$fileNameNew','$pincode')";
                if (mysqli_query($conn, $sql)) {
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: ../client/all_form.php?msgreg=success");
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
