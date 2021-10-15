<?php
ob_start();
session_start();
if (!isset($_SESSION['login']) && !isset($_SESSION['user'])) {
    if ($_SESSION['user'] == 'member') {
        header("Location: ../client/member_login.php");
    }
    header("Location: ../client/all_form.php");
} else if (!isset($_SESSION['login']) && !isset($_SESSION['user'])) {
    if ($_SESSION['user'] == "admin") {
        header("Location: ../client/admin_login.php");
    }
    header("Location: ../client/all_form.php");
}
include "../../data/db/conn.php";
include "../includes/header.php";
include "../includes/sidebar.php";
include "../process/imgFn.php";
?>
<!-- Button trigger modal -->
<div class="content-wrapper">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-dark mt-3">
                        <div class="card-header">
                            <h3 class="card-title"> All Children
                                <?php if (isset($_GET['delete']) && isset($_GET['msg'])) { ?>
                                    <span id="msg" class="alert alert-success" role="alert">
                                        <i class="fa fa-check-circle"></i>
                                        <?= $_GET['msg'] ?>
                                    </span>
                                <?php }
                                ?>

                            </h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-bordered table-responsive p-0" style="min-height: 510px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Profile Image</th>
                                        <th>User</th>
                                        <th>Age</th>
                                        <!-- <th>Active / InActive</th> -->
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_SESSION['id'])) {
                                        $memberId = $_SESSION['id'];
                                    } else {
                                        header("location: ./childTables.php?admin=false&msg=Admin can't have child");
                                    }

                                    if (isset($_GET['filter']) && $_GET['filter'] == 'marriageable') {
                                        //change it later
                                        $sql = "SELECT * FROM child WHERE gender='Male'";
                                    } else {
                                        $sql = "SELECT * FROM child WHERE pid = $memberId";
                                    }

                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row

                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <tr>

                                                <td><?= $row["id"] ?></td>
                                                <td><img src="<?=defaultImage('../../data/uploads/',$row['profile_pic'], "child")?>" style="width: 45px;" alt=""></td>
                                                <td><?= $row["child_Name"]; ?></td>
                                                <td>
                                                    <?= date_diff(date_create($row['dateofbirth']), date_create(date('d-m-Y')))->format("%y"); ?>
                                                </td>
                                                <!-- <td><button type="submit">Active</button></td> -->
                                                <td>

                                                    <button class="btn btn-primary ml-1" data-toggle="modal" data-target="#example" onclick="fetchData(<?= $row['id'] ?>,'child')"><i class="fas fa-eye"></i>
                                                    </button>
                                                    <a href="./childUpdate.php?id=<?= $row['id'] ?> "><button class="btn btn-primary ml-1"><i class="fas fa-edit"></i></button></a>
                                                    <a href="../process/deleteChild.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')"><button type="submit" class="btn btn-danger ml-1" id="delete"><i class="fas fa-trash-alt"></i></button></a>
                                                </td>
                                            </tr>

                                    <?php
                                        }
                                    } else {
                                        echo '<tr><td colspan="5" class="text-center"><h1>Add your children<br><a class="btn btn-primary" href="./child_new.php">Add new child</a></td></h1></tr>';
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>



<style>
    <?php include "../assets/style/modal.css" ?>
</style>
<div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Child Details
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalcontent">

            </div>
        </div>
    </div>
</div>
<?php
include "../includes/footer.php"
?>
<script src="../process/modal.js"></script>