<?php
include "../db/conn.php";
header('Access-Control-Allow-Origin: *');
function sendMail($mailAddress){
    //mail code start
            function sanitize_my_email($field) {
                $field = filter_var($field, FILTER_SANITIZE_EMAIL);
                if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
                    return true;
                } else {
                    return false;
                }
            }
            $to_email = $mailAddress;
            $subject = 'Varshney Samaj | Do not reply to this mail';
            $message = 'Thanks for registration on Varshney Samaj. We will approve your account soon. If it take long time you can contact Kapil Gupta 8010334416.
            This mail is sent from the varshney portal ';
            $headers = 'From: noreply @ Varshney ';
            //check if the email address is invalid $secure_check
            $secure_check = sanitize_my_email($to_email);
            if ($secure_check == false) {
                echo "Invalid input";
            } else { //send email 
                mail($to_email, $subject, $message,$headers);
                echo "We will approve your account soon".date('Y-m-s H:i:s')."!";
            }
            //mail code is end here
}
if (isset($_POST['registerMember'])) {
    $firstName = $_POST['firstName'];
    $mobileNo = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $pincode = $_POST['pincode'];
    $doj = $_POST['doj'];

    $sql="SELECT * FROM `members` WHERE `email` = '$email'";
    $res=mysqli_query($conn,$sql);
    echo mysqli_num_rows($res);
    if(mysqli_num_rows($res)>0){
        header("Location: ../client/all_form.php?already=you already have an account");
        die();
    }
    if (isset($_FILES['InputFile']) && $_FILES['InputFile']['name']) {
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
                $sql = "INSERT INTO  `members` (`firstName`, `mobileNo`, `email`,`address`, `password`,`profilepic`,`pincode`,`dob`) VALUES ('$firstName','$mobileNo','$email','$address','$password','$fileNameNew','$pincode','$doj')";
                if (mysqli_query($conn, $sql)) {
                    move_uploaded_file($fileTmpName, $fileDestination);
                    //mail code
                    sendMail($email);
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
}else{
    $sql = "INSERT INTO  `members` (`firstName`, `mobileNo`, `email`,`address`, `password`,`pincode`,`dob`) VALUES ('$firstName','$mobileNo','$email','$address','$password','$pincode','$doj')";
    if (mysqli_query($conn, $sql)) {
                    //send mail to client
                    sendMail($email);
                    header("Location: ../client/all_form.php?msgreg=success");
                } else {
                  echo "<br/>Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }

    mysqli_close($conn);
}



