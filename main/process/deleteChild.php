<?php
include "../../data/db/conn.php";
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../client/all_form.php");
}

$ID = $_GET['id'];
if (isset($_SESSION['login'])) {
    if ($_SESSION['user'] == 'admin') {
        $sql = "DELETE FROM `child` WHERE id=$ID";
    } else if ($_SESSION['user'] == 'member') {
        $memberId = $_SESSION['id'];
        $sql = "DELETE FROM `child` WHERE id=$ID AND pid = $memberId";
    }
}


$result = mysqli_query($conn, $sql);
if ($_SESSION['user'] == 'admin') {
    if (mysqli_affected_rows($conn) >= 1) {
        header("Location: ../server/childTables.php?delete=true&msg=Child deleted successfully");
    }
} else if ($_SESSION['user'] == 'member') {
    if (mysqli_affected_rows($conn) >= 1) {
        header("Location: ../server/yourChildren.php?delete=true&msg=Your child is deleted successfully");
    } else {
        header("Location: ../server/childTables.php?delete=false&msg=You can only delete your child, don't be over smart");
    }
}

// if (mysqli_affected_rows($conn) >= 1) {
//     header("Location: ../server/childTables.php?delete=true&msg=Your child is deleted successfully");
// } else {
//     header("Location: ../server/childTables.php?delete=false&msg=You can only delete your child");
// }
