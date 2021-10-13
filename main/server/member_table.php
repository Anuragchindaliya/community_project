<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../client/member_login.php");
}
include "../../data/db/conn.php";
include "../includes/header.php";
include "../includes/sidebar.php";

?>

<div class="content-wrapper">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-dark mt-3">
                        <div class="card-header">
                            <h3 class="card-title">All Members <?php if (isset($_GET['msg'])) { ?>
                                    <span id="msg" class="alert alert-success p-2" role="alert">
                                        <i class="fa fa-check-circle"></i>
                                        <?= $_GET['msg'] ?>
                                    </span>
                                <?php }
                                ?>
                            </h3>

                            <div class="card-tools">


                                <div class="input-group input-group-sm" style="width: 150px;">
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
                        <div class="card-body table-bordered table-responsive p-0" style="min-height: 570px;">
                            <table class="table table-head-fixed text-nowrap" style="min-height: 200px;">
                                <thead>
                                    <tr>
                                        <th>Profile Picture</th>
                                        <th>FullName</th>
                                        <th>D.O.B</th>
                                        <?php if (isset($_SESSION) && $_SESSION['user'] == "admin") { ?>
                                            <th>Active / InActive</th>
                                        <?php } ?>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_GET['filter']) && $_GET['filter'] == 'lifemember') {
                                        $sql = "SELECT * FROM members WHERE isLifeMember='1'";
                                    } else {
                                        $sql = "SELECT * FROM members";
                                    }

                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                            <?php
                                            $imgPath = '../../data/uploads/';
                                            if ($row['profilepic'] == '') {
                                                $imgPath .= "user.png";
                                            } else if (file_exists("../../data/uploads/member/" . $row['profilepic'])) {
                                                $imgPath .= "member/".$row['profilepic'];
                                            } else {
                                                $imgPath .= "na.png";
                                            }

                                            ?>
                                            <tr>
                                                <td><img src="<?=$imgPath?>" style="width:45px; height:45px;"></td>
                                                <td><?= $row["firstName"] ?></td>
                                                <td>
                                                    <?= $row["dob"] == "0000-00-00" ? "XXXX-XX-XX" : date('d-m-Y', strtotime($row["dob"])) ?>
                                                </td>
                                                <?php if (isset($_SESSION) && $_SESSION['user'] == "admin") { ?>
                                                    <td><button type="button" class="btn btn-<?= $row['status'] == '0' ? 'danger' : 'success' ?>" onclick="memberStatus(<?= $row['id'] ?>,<?= $row['status'] ?>)" status=""><?= $row['status'] == '0' ? "Deactive" : "Active" ?></button></td>
                                                <?php } ?>
                                                <td>
                                                    <!-- modal view icon -->
                                                    <button class="btn btn-primary ml-1" data-toggle="modal" data-target="#example" onclick="fetchData(<?= $row['id'] ?>,'member')">
                                                        <i class="fas fa-eye"></i>
                                                    </button>

                                                    <?php if (isset($_SESSION['login']) && $_SESSION['user'] == 'admin') { ?>
                                                        <a href="../server/updateMember_form.php?id=<?= $row['id'] ?> "><button class="btn btn-primary ml-1" data-toggle="modal" data-target="#example"><i class="fas fa-edit"></i></button></a>

                                                        <a href="../process/deleteMember.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')"><button type="submit" class="btn btn-danger ml-1" id="delete"><i class="fas fa-trash-alt"></i></button></a>
                                                    <?php } ?>
                                                </td>
                                            </tr>

                                    <?php
                                        }
                                    } else {
                                        echo '<tr><td colspan="6    " class="text-center"><h1>No Result Found</td></h1></tr>';
                                    } ?>
                                    <!-- <tr>
                            </td>
                            </td>
                        </tr> -->
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
                <h5 class="modal-title" id="exampleModalLongTitle">Member Details
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

include "../includes/footer.php";
?>
<script>
    if (!!$("#msg")) {
        setTimeout(() => {
            $("#msg").slideDown(50);
        }, 5000);

    }
</script>
<script src="../process/modal.js"></script>
<script src="../process/memberStatus.js"></script>