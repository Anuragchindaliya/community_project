<?php
include "../../data/db/conn.php";
if (isset($_POST['update'])) {
  $ids = $_GET['id'];
  // echo "<meta http-equiv='refresh' content='0'>";
  // $idupdate = $_GET['id'];
  $firstName = $_POST['firstName'];
  $mobileNo = $_POST['mobile'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $gender = $_POST['gender'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $password = $_POST['password'];
  $fatherName = $_POST['fathername'];
  $motherName = $_POST['motherName'];
  $lifeMemberNo = $_POST['lifeMember'];
  $pincode = $_POST['pincode'];
  $oldImageName = $_POST['oldImageName'];


  // image upload************************************
  if (isset($_FILES['InputFile']) && $_FILES['InputFile']['name']) {
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
          $fileNameNew = "member_" . uniqid() . "." . $fileActualExt;
          $fileDestination = '../../data/uploads/member/' . $fileNameNew;

          // old image 
          $oldImagePath = '../../data/uploads/member/' . $oldImageName;
          $oldImageExtn = pathinfo($oldImagePath, PATHINFO_EXTENSION);
          $garbageDestination = '../../data/uploads/garbage/' . $ids . "_" . time() . "." . $oldImageExtn;

          // uploadfiles
          echo $sql = "UPDATE `members` SET firstName ='$firstName', mobileNo= '$mobileNo' ,email = '$email', dob = '$dob', gender = '$gender', state = '$state', city = '$city', address = '$address', password ='$password', fatherName = '$fatherName', motherName ='$motherName', lifeMemberNo = '$lifeMemberNo' ,  profilepic = '$fileNameNew',pincode = '$pincode' WHERE id = '{$ids}'";

          if (mysqli_query($conn, $sql)) {
            // copy and delete old image file
            if (file_exists($oldImagePath)) {
              if (copy($oldImagePath, $garbageDestination)) {
                unlink($oldImagePath);
                echo "image removed";
              } else {
                echo "can't copy";
                die();
              }
            }
            move_uploaded_file($fileTmpName, $fileDestination);
            header("Location: ../server/updateMember_form.php?id=$ids&msg=Member is update successfully");
          } else {
            echo "<br/>Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          // header("location: index.php?upladsuccess");
        } else {
          echo "your file is too big!";
        }
      } else {
        echo "There was an error Uploading your file!";
      }
    } else {
      echo "You cannot upload files of this type!";
    }
  } else {
    $sql = "UPDATE `members` SET firstName ='$firstName', mobileNo= '$mobileNo' ,email = '$email', dob = '$dob', gender = '$gender', state = '$state', city = '$city', address = '$address', password ='$password', fatherName = '$fatherName', motherName ='$motherName', lifeMemberNo = '$lifeMemberNo' , pincode = '$pincode' WHERE id = '{$ids}'";
    if (mysqli_query($conn, $sql)) {
      header("Location: ../server/updateMember_form.php?id=$ids&msg=Member is update successfully");
    } else {
      echo "<br/>Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  mysqli_close($conn);
}
