<?php
include "../db/conn.php";
// echo $_POST['marriage'],$_POST['upload'];
if(isset($_POST['childdata'])){
    $child_Name =$_POST['name'];
    $child_email = $_POST['email'];
    echo $gender = $_POST['childGender'];
    $mobileno = $_POST['mobileno'];
    $age = $_POST['age'];
    $education = $_POST['education'];
    $degree = $_POST['degree'];
    $profession = $_POST['profession'];
    $height = $_POST['height'];
    $dateofbirth = $_POST['dateofbirth'];
    $faceofcomplexion = $_POST['facecomplexion'];
    $manglik = $_POST['manglik'];
    $expectation = $_POST['expectation'];
    
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
                $sql = "INSERT INTO `child`( `child_Name`, `child_email`, `gender`, `mobileno`, `age`, `education`, `degree`, `profession`, `height`, `dateofbirth`, `faceofcomplexion`, `manglik`, `expectation`,`profile_pic`) VALUES ('$child_Name', '$child_email', '$gender', '$mobileno', '$age', '$education', '$degree', '$profession', '$height', '$dateofbirth', '$faceofcomplexion', '$manglik','$expectation','$fileNameNew')";
                // $sql = "INSERT INTO  `members` (`firstName`, `mobileNo`, `email`, `dob`, `gender`, `state`, `city`, `address`, `password`, `fatherName`, `motherName`, `lifeMemberNo`,`profilepic`) VALUES ('$firstName','$mobileNo','$email','$dob','$gender','$state','$city','$address','$password','$fatherName','$motherName','$lifeMemberNo','$fileNameNew')";
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
?>