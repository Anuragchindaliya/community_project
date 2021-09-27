<?php
include "../db/conn.php";
session_start();
if (isset($_SESSION['login']) && $_SESSION['user'] === "member") {
    echo $_SESSION['user'];
    header("Location: ../server/dashboard.php");
    die();
}
if (isset($_SESSION['login']) && $_SESSION['user'] === "admin") {
    $ID = $_GET['id'];
    $sql = "DELETE FROM `members` WHERE id=$ID";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../server/member_table.php?msg=Member deleted successfully");
    } else {
        echo "error in deletion";
    }
}
// header("Location: ../client/all_form.php");
?>