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

?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update child details</h1>
                </div>
                <div class="col-sm-6">
                    <?php if (isset($_GET['msg'])) { ?>
                        <span id="msg" class="alert alert-success" role="alert">
                            <i class="fa fa-check-circle"></i>
                            <?= $_GET['msg'] ?>
                        </span>
                    <?php }
                    ?>
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update child details</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Child</h3>
                        </div>
                        <form action="../process/updatechild.php?id=<?= $_GET['id']; ?>" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <?php
                                // include "../../data/db/conn.php";
                                $ids = $_GET['id'];

                                if ($_SESSION['user'] == 'member') {
                                    // member can only delete their child
                                    $memberId = $_SESSION['id'];
                                    $showquery = "SELECT * FROM `child` WHERE id = $ids AND pid = $memberId";
                                    $showdata = mysqli_query($conn, $showquery);
                                    if (mysqli_num_rows($showdata) == 0) {

                                        echo "<h1>You can't edit this child</h1>";
                                        header("Location: ./childTables.php?pid=true&msg=You can't edit this child");
                                        exit();
                                    } else {
                                        $arrdata = mysqli_fetch_assoc($showdata);
                                    }
                                } else if ($_SESSION['user'] == 'admin') {
                                    $showquery = "SELECT * FROM `child` WHERE id = $ids";
                                    $showdata = mysqli_query($conn, $showquery);
                                    $arrdata = mysqli_fetch_assoc($showdata);
                                }






                                ?>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" value="<?php echo $arrdata['child_Name'] ?>" pattern="[a-zA-Z][a-zA-Z ]*">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="number" class="form-control" name="phone" placeholder="Enter phone number" value="<?php echo $arrdata['mobileno'] ?>" pattern="^[6789]\d{9}$" maxlength="10" minlength="10">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo $arrdata['child_email'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label for="Gender">Gender</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Gender" id="inlineRadio1" value="Male" <?php if ($arrdata['gender'] === 'Male') { ?> checked <?php
                                                                                                                                                                                        } ?>>
                                            <label class="form-check-label" for="inlineRadio1">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Gender" id="inlineRadio2" value="Female" <?php if ($arrdata['gender'] === 'Female') { ?> checked <?php
                                                                                                                                                                                            } ?>>
                                            <label class="form-check-label" for="inlineRadio2">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Gender" id="inlineRadio3" value="Others" <?php if ($arrdata['gender'] === 'Others') { ?> checked <?php
                                                                                                                                                                                            } ?>>
                                            <label class="form-check-label" for="inlineRadio3">Others</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                </div>
                                <div class="row">
                                    <!-- <div class="form-group col-md-6">
                                        <label for="exampleInputAge">Age</label>
                                         <input type="type" placeholder="enter age" name="age" class="form-control" value="
                                        <?php
                                        // echo $arrdata['age'] 
                                        ?>"> -->
                                    <!-- </div> -->

                                    <?php if ($_SESSION['user'] == 'admin') { ?>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputAge">Parent ID</label>
                                            <input type="type" name="parentid" placeholder="Enter Parent ID " name="age" class="form-control" value="<?= $arrdata['pid'] ?>" required>
                                        </div><?php } ?>
                                    <?php if ($_SESSION['user'] == 'member') {
                                    ?>
                                        <input type="hidden" name="parentid" value="<?= $_SESSION['id'] ?>" required>
                                    <?php
                                    } ?>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Education</label>
                                        <input type="text" list="education" class="form-control" name="education" placeholder="Enter education" value="<?php echo $arrdata['education'] ?>">

                                        <datalist id="education" name="education" required>
                                            <option value="No formal education">
                                            <option value="Primary education">
                                            <option value="Secondary education">
                                            <option value="Vocational qualification">
                                            <option value="Bachelor's degree">
                                            <option value="Master's degree">
                                            <option value="Doctorate or higher">
                                        </datalist>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Degree</label>
                                        <div>
                                            <select name="degree" class="form-control">
                                                <option value="bcom" <?php if ($arrdata['degree'] === 'bcom') { ?> selected <?php
                                                                                                                        } ?>>bcom</option>
                                                <option value="btech" <?php if ($arrdata['degree'] === 'btech') { ?> selected <?php
                                                                                                                            } ?>>btech</option>
                                                <option value="mca" <?php if ($arrdata['degree'] === 'mca') { ?> selected <?php
                                                                                                                        } ?>>mca</option>
                                                <option value="other" <?php if ($arrdata['degree'] === 'other') { ?> selected <?php
                                                                                                                            } ?>>other </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Profession</label>
                                        <div>
                                            <select name="profession" class="form-control">
                                                <option value="bcom" <?php if ($arrdata['profession'] === 'bcom') { ?> selected <?php
                                                                                                                            } ?>>bcom</option>
                                                <option value="btech" <?php if ($arrdata['profession'] === 'btech') { ?> selected <?php
                                                                                                                                } ?>>btech</option>
                                                <option value="mca" <?php if ($arrdata['profession'] === 'mca') { ?> selected <?php
                                                                                                                            } ?>>mca</option>
                                                <option value="other" <?php if ($arrdata['profession'] === 'other') { ?> selected <?php
                                                                                                                                } ?>>other </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Height</label>
                                        <input type="text" class="form-control" name="height" value="<?php echo $arrdata['height'] ?>" placeholder="Enter height">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Date of Birth/D.O.B.</label>
                                        <input type="date" class="form-control" name="dateofbirth" value="<?php echo $arrdata['dateofbirth'] ?>" placeholder="Enter date of birth">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Face Complexion</label>
                                        <div>
                                            <select name="faceofcomplexion" class="form-control">
                                                <option value="bcom" <?php if ($arrdata['faceofcomplexion'] === 'bcom') { ?> selected <?php
                                                                                                                                    } ?>>bcom</option>
                                                <option value="btech" <?php if ($arrdata['faceofcomplexion'] === 'btech') { ?> selected <?php
                                                                                                                                    } ?>>btech</option>
                                                <option value="mca" <?php if ($arrdata['faceofcomplexion'] === 'mca') { ?> selected <?php
                                                                                                                                } ?>>mca</option>
                                                <option value="other" <?php if ($arrdata['faceofcomplexion'] === 'other') { ?> selected <?php
                                                                                                                                    } ?>>other </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Manglik</label>
                                        <div>
                                            <select name="manglik" class="form-control">
                                                <option value="bcom" <?php if ($arrdata['manglik'] === 'bcom') { ?> selected <?php
                                                                                                                            } ?>>bcom</option>
                                                <option value="btech" <?php if ($arrdata['manglik'] === 'btech') { ?> selected <?php
                                                                                                                            } ?>>btech</option>
                                                <option value="mca" <?php if ($arrdata['manglik'] === 'mca') { ?> selected <?php
                                                                                                                        } ?>>mca</option>
                                                <option value="other" <?php if ($arrdata['manglik'] === 'other') { ?> selected <?php
                                                                                                                            } ?>>other </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Expectation</label>
                                        <div>
                                            <textarea name="expectation" rows="4" style="width: 100%;"><?php echo $arrdata['expectation'] ?></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="exampleInputFile">File input</label><span><br></span>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="InputFile" id="exampleInputFile" onchange="loadFile(event)">
                                                <label class="custom-file-label" for="exampleInputFile">

                                                    <?php if (isset($arrdata['profile_pic'])) {
                                                        echo $arrdata['profile_pic'];
                                                    } else {
                                                        echo "Choose new file";
                                                    }   ?>
                                                </label>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <?php $imgPath = '../../data/uploads/';
                                            if ($arrdata['profile_pic'] == '') {
                                                $imgPath .= "user.png";
                                            } else if (file_exists("../../data/uploads/child/" . $arrdata['profile_pic'])) {
                                                $imgPath .= "child/" . $arrdata['profile_pic'];
                                            } else {
                                                $imgPath .= "na.png";
                                            } ?>
                                            <img id="imgput" src="<?= $imgPath ?>" style="width:75px;">
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name="childupdata" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>

<?php include "../includes/footer.php" ?>
<script src="../assets/previewImage.js"></script>
<script>
    if (!!$("#msg")) {
        setTimeout(() => {
            // document.getElementById("msg").style.display="none";
            $("#msg").hide();
        }, 5000);

    }
</script>