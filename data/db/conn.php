<?php
// $servername = "localhost";
// $username = "root";
// $password = "";

// Create connection
// $conn = mysqli_connect($servername, $username, $password);
$conn = mysqli_connect("localhost", "root","","communityproject");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

function sansitizeString($string){
  global $conn;
  $value = mysqli_real_escape_string($conn,$string);
  $valueClean = filter_var($value,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH );
  return $valueClean;
}
//  echo "Connected successfully";
?>