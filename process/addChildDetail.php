<?php
include "../db/conn.php";
<<<<<<< HEAD
include "../includes/sidebar.php";

=======
>>>>>>> 7c039b3137277333040c1821e97ab5e035d8dce6
// echo $_POST['marriage'],$_POST['upload'];
if(isset($_POST['childdata'])){
    $child_Name =$_POST['name'];
    // echo $firstName;
    $child_email = $_POST['email'];
    $gender = $_POST['gender'];
    $isMarriageable = $_POST['marriage'];
    $age = $_POST['age'];
    $education = $_POST['education'];
    $degree = $_POST['degree'];
    $profession = $_POST['profession'];
    $height = $_POST['height'];
    $dateofbirth = $_POST['dateofbirth'];
    $faceofcomplexion = $_POST['facecomplexion'];
    $manglik = $_POST['manglik'];
    $expectation = $_POST['expectation'];
    $profile_pic = $_POST['InputFile'];
    // $status = $_POST['InputFile'];
<<<<<<< HEAD
    $sql = "INSERT INTO `child_data`( `child_Name`, `child_email`, `gender`, `isMarriageable`, `age`, `education`, `degree`, `profession`, `height`, `dateofbirth`, `faceofcomplexion`, `manglik`, `expectation`,`profile_pic`) VALUES ('$child_Name', '$child_email', '$gender', '$isMarriageable', 'age', '$education', '$degree', '$profession', '$height', '$dateofbirth', '$faceofcomplexion', '$manglik','$expectation','$profile_pic')";
=======
    $sql = "INSERT INTO `child`( `child_Name`, `child_email`, `gender`, `isMarriageable`, `age`, `education`, `degree`, `profession`, `height`, `dateofbirth`, `faceofcomplexion`, `manglik`, `expectation`,`profile_pic`) VALUES ('$child_Name', '$child_email', '$gender', '$isMarriageable', 'age', '$education', '$degree', '$profession', '$height', '$dateofbirth', '$faceofcomplexion', '$manglik','$expectation','$profile_pic')";
>>>>>>> 7c039b3137277333040c1821e97ab5e035d8dce6
}


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("location: ../server/child_new.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

?>