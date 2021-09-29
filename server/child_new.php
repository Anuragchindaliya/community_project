<?php
session_start();
if (!isset($_SESSION['login']) && $_SESSION['user'] == "member") {
    header("Location: ../client/member_login.php");
} else if (!isset($_SESSION['login']) && $_SESSION['user'] == "admin") {
    header("Location: ../client/admin_login.php");
}
include "../includes/header.php";
include "../includes/sidebar.php";

include "../db/conn.php";

?>
<div class="content-wrapper ">

    <section class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Child</h1>
                </div>
                <div class="col-sm-6">
                    <?php if (isset($_GET['msg'])) { ?>
                        <span id="msg" class="alert alert-success" role="alert">
                            <i class="fa fa-check-circle"></i>
                            <?= $_GET['msg'] ?>
                        </span>
                    <?php }
                    ?>

                    <?php if (isset($_GET['already'])) { ?>
                        <span id="msg" class="alert alert-danger" role="alert">
                            <i class="fa fa-check-circle"></i>
                            <?= $_GET['already'] ?>
                        </span>
                    <?php }
                    ?>

                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
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
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="../process/addChildDetail.php" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Name<sup class="text-danger">*</sup></label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter name" pattern="[a-zA-Z][a-zA-Z ]*" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Phone<sup class="text-danger">*</sup></label>
                                        <input type="tel" class="form-control" name="mobileno" placeholder="Enter phone number" pattern="^[6789]\d{9}$" maxlength="10" required>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Email address<sup class="text-danger">*</sup></label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div>
                                            <label>Gender<sup class="text-danger">*</sup></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="childGender" id="inlineRadio1" value="Male" checked>
                                            <label class="form-check-label" for="inlineRadio1">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="childGender" id="inlineRadio2" value="Female">
                                            <label class="form-check-label" for="inlineRadio2">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="childGender" id="inlineRadio3" value="Others">
                                            <label class="form-check-label" for="inlineRadio3">Others</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Education<sup class="text-danger">*</sup></label>
                                        <div>
                                            <select name="education" class="form-control" required>
                                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                <option value="No formal education">No formal education</option>
                                                <option value="Primary education">Primary education</option>
                                                <option value="Secondary education">Secondary education or high school</option>
                                                <option value="Vocational qualification">Vocational qualification</option>
                                                <option value="Bachelor's degree">Bachelor's degree</option>
                                                <option value="Master's degree">Master's degree</option>
                                                <option value="Doctorate or higher">Doctorate or higher</option>
                                            </select>
                                        </div>
                                        <!-- <input type="text" class="form-control" name="education" placeholder="Enter education"> -->

                                    </div>
                                    <!-- <div class="form-group col-md-6">
                                        <label for="exampleInputAge">Age</label>
                                        <input type="type" placeholder="enter age" name="age" class="form-control">
                                    </div> -->
                                    <?php if ($_SESSION['user'] == 'admin') { ?>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputAge">Parent ID</label>
                                            <input type="type" name="parentid" placeholder="Enter Parent ID " name="age" class="form-control" required>
                                        </div><?php } ?>
                                    <?php if ($_SESSION['user'] == 'member') {
                                    ?>
                                        <input type="hidden" name="parentid" value="<?= $_SESSION['id'] ?>" required>
                                    <?php
                                    } ?>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Degree</label>

                                        <div>
                                            <select name="degree" class="form-control">
                                                <option value="bcom">bcom</option>
                                                <option value="btech">btech</option>
                                                <option value="mca">mca</option>
                                                <option value="other">other </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="occupation">Profession</label>
                                        <div>
                                            <select class="form-control dropdown" id="occupation" name="occupation" required>
                                                <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                                <option value="Business">Business</option>
                                                <option value="Service">Service</option>
                                                <option value="others">others</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Height<sup class="text-danger">*</sup></label>
                                        <input type="text" class="form-control" name="height" placeholder="Enter height">
                                        <sup>In centimeter ex- 152.6cm</sup>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Date of Birth<sup class="text-danger">*</sup></label>
                                        <input type="date" class="form-control" name="dateofbirth" placeholder="Enter date of birth" min='1899-01-01' max='<?= (date('Y') - 18) . "-" . date('m-d') ?>'>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Face Complexion</label>
                                        <div>
                                            <select name="facecomplexion" class="form-control">
                                                <option>Extremely fair skin</option>
                                                <option>Fair skin</option>
                                                <option>Medium skin</option>
                                                <option>Olive skin</option>
                                                <option>Brown skin</option>
                                                <option>Black skin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Remark</label>
                                        <div>
                                            <input type="text" list="remark" class="form-control" name="manglik">
                                            <datalist id="remark">
                                                <option value="Sada Manglik">
                                                <option value="Manglik">
                                            </datalist>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Expectation</label>
                                        <div>
                                            <textarea name="expectation" rows="2" style="width: 100%;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="InputFile" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                <sup>upload upto 1mb pic size</sup>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <!-- /.card-body -->

                            <div class="card-footer">

                                <button type="submit" name="childdata" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include "../includes/footer.php" ?>
<script>
    if (!!$("#msg")) {
        setTimeout(() => {
            // document.getElementById("msg").style.display="none";
            $("#msg").hide();
        }, 5000);

    }
</script>