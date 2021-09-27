<?php
include "../db/conn.php";
if (isset($_POST['childupdata'])) {
  // echo "<meta http-equiv='refresh' content='0'>";
  echo $id = $_GET['id'];
  $child_Name = $_POST['name'];
  $child_email = $_POST['email'];
  $gender = $_POST['Gender'];
  $mobile = $_POST['phone'];
  $age = $_POST['age'];
  $education = $_POST['education'];
  $degree = $_POST['degree'];
  $profession = $_POST['profession'];
  $height = $_POST['height'];
  $dateofbirth = $_POST['dateofbirth'];
  $faceofcomplexion = $_POST['faceofcomplexion'];
  $manglik = $_POST['manglik'];
  $expectation = $_POST['expectation'];

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
          $fileNameNew = uniqid() . "." . $fileActualExt;
          $fileDestination = 'uploads/' . $fileNameNew;

          // uploadfiles
          $sql = "UPDATE `child` SET `child_Name`='$child_Name',`child_email`='$child_email',`gender`='$gender',`mobileno`='$mobile',`age`='$age',`education`='$education',`degree`='$degree',`profession`='$profession',`height`='$height',`dateofbirth`='$dateofbirth',`faceofcomplexion`='$faceofcomplexion',`manglik`='$manglik',`expectation`='$expectation',`profile_pic`='$fileNameNew' WHERE id = '{$id}'";

          if (mysqli_query($conn, $sql)) {
            move_uploaded_file($fileTmpName, $fileDestination);
            header("Location: ../server/childUpdate.php?id=$id&msg=Child details updated successfully");
          } else {
            echo "<br/>Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          // header("location: index.php?uploadsuccess");
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
    $sql = "UPDATE `child` SET `child_Name`='$child_Name',`child_email`='$child_email',`gender`='$gender',`mobileno`='$mobile',`age`='$age',`education`='$education',`degree`='$degree',`profession`='$profession',`height`='$height',`dateofbirth`='$dateofbirth',`faceofcomplexion`='$faceofcomplexion',`manglik`='$manglik',`expectation`='$expectation' WHERE id = '{$id}'";
    if (mysqli_query($conn, $sql)) {
      header("Location: ../server/childUpdate.php?id=$id&msg=Child details updated successfully");
    } else {
      echo "<br/>Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  mysqli_close($conn);

  // $sql="UPDATE `child` SET `child_Name`='$child_Name',`child_email`='$child_email',`gender`='$gender',`mobileno`='$mobile',`age`='$age',`education`='$education',`degree`='$degree',`profession`='$profession',`height`='$height',`dateofbirth`='$dateofbirth',`faceofcomplexion`='$faceofcomplexion',`manglik`='$manglik',`expectation`='$expectation',`profile_pic`='$profile_pic' WHERE id = '{$id}'";

  // if (mysqli_query($conn, $sql)) {
  //   header("Location: ../server/childUpdate.php?id=$ids");
  // } else {
  //   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  // }
  // mysqli_close($conn);
}
