<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: ../client/member_login.php");
}
if ($_SESSION['user'] == 'member') {
  header("Location: ./dashboard.php");
}
if (!isset($_GET['id'])) {
  header("Location: ./member_form.php");
}
include "../includes/header.php";
include "../includes/sidebar.php";
include "../../data/db/conn.php"
?>
<div class="content-wrapper ">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Update Member</h1>
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
            <li class="breadcrumb-item active">Update Member</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container">
      <div class="row">
        <!-- left column -->
        <div class="col">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Enter Correct Details</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="../process/updateMember.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
              <div class="card-body">

                <div class="row">
                  <?php
                  // include "../../data/db/conn.php";
                  $ids = $_GET['id'];
                  $showquery = "SELECT * FROM `members` WHERE id = {$ids}";
                  $showdata = mysqli_query($conn, $showquery);
                  $arrdata = mysqli_fetch_assoc($showdata);
                  ?>
                  <div class="form-group col">
                    <label for="inputName">FullName<sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control" name="firstName" pattern="[a-zA-Z][a-zA-Z ]*" value="<?php echo $arrdata['firstName'] ?>" id="inputName" placeholder="Name" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col">
                    <label for="Mobile">Mobile No.<sup class="text-danger">*</sup></label>
                    <input type="tel" class="form-control" id="Mobile" pattern="^[789]\d{9}$" placeholder="Mobile No." name="mobile" value="<?php echo $arrdata['mobileNo'] ?>" required>
                  </div>
                  <div class="form-group col">
                    <label for="Email1">Email address<sup class="text-danger">*</sup></label>
                    <input type="email" class="form-control" id="Email1" placeholder="Enter email" name="email" value="<?php echo $arrdata['email'] ?>" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col">
                    <label for="Dob">Date of Birth<sup class="text-danger">*</sup></label>
                    <input type="date" class="form-control" id="Dob" placeholder="Date of Birth" name="dob" value="<?php echo $arrdata['dob'] ?>">
                  </div>
                  <div class="form-group col">
                    <div>
                      <label for="Gender">Gender</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" <?php if ($arrdata['gender'] === 'Male') { ?> checked <?php
                                                                                                                                                                    } ?>>
                      <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" <?php if ($arrdata['gender'] === 'Female') { ?> checked <?php
                                                                                                                                                                        } ?>>
                      <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Others" <?php if ($arrdata['gender'] === 'Others') { ?> checked <?php
                                                                                                                                                                        } ?>>
                      <label class="form-check-label" for="inlineRadio3">Others</label>
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="form-group col">
                    <label for="state">State<sup class="text-danger">*</sup></label>
                    <input list="states" class="form-control" id="state" name="state" placeholder="State" value="<?php echo $arrdata['state'] ?>" required>
                    <datalist id="states">
                      <option value="Andhra Pradesh">Andhra Pradesh</option>
                      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                      <option value="Assam">Assam</option>
                      <option value="Bihar">Bihar</option>
                      <option value="Chandigarh">Chandigarh</option>
                      <option value="Chhattisgarh">Chhattisgarh</option>
                      <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                      <option value="Daman and Diu">Daman and Diu</option>
                      <option value="Delhi">Delhi</option>
                      <option value="Lakshadweep">Lakshadweep</option>
                      <option value="Puducherry">Puducherry</option>
                      <option value="Goa">Goa</option>
                      <option value="Gujarat">Gujarat</option>
                      <option value="Haryana">Haryana</option>
                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                      <option value="Jharkhand">Jharkhand</option>
                      <option value="Karnataka">Karnataka</option>
                      <option value="Kerala">Kerala</option>
                      <option value="Madhya Pradesh">Madhya Pradesh</option>
                      <option value="Maharashtra">Maharashtra</option>
                      <option value="Manipur">Manipur</option>
                      <option value="Meghalaya">Meghalaya</option>
                      <option value="Mizoram">Mizoram</option>
                      <option value="Nagaland">Nagaland</option>
                      <option value="Odisha">Odisha</option>
                      <option value="Punjab">Punjab</option>
                      <option value="Rajasthan">Rajasthan</option>
                      <option value="Sikkim">Sikkim</option>
                      <option value="Tamil Nadu">Tamil Nadu</option>
                      <option value="Telangana">Telangana</option>
                      <option value="Tripura">Tripura</option>
                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                      <option value="Uttarakhand">Uttarakhand</option>
                      <option value="West Bengal">West Bengal</option>
                    </datalist>
                  </div>
                  <div class="form-group col">
                    <label for="city">City<sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="City" value="<?php echo $arrdata['city'] ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col">
                    <label for="address">Address<sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address " value="<?php echo $arrdata['address'] ?>">
                  </div>
                  <div class="form-group col">
                    <label for="address">Pincode<sup class="text-danger">*</sup></label>
                    <input class="form-control" id="pincode" name="pincode" placeholder="Pincode" type="text" pattern="[0-9]{6}" title="Correct Format: 121005 " value="<?php echo $arrdata['pincode'] ?>">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col " style="display:inline;">
                    <label for="password1">Password<sup class="text-danger">*</sup></label>
                    <input type="password" class="form-control col-12" style="display: absolute
                ;" id="password1" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" placeholder="Password" onblur='req()' name="password" value="<?php echo $arrdata['password'] ?>">
                    <span class="eye" onclick="eyeToggle()" style="position: absolute;top: 39px;right: 19px;">
                      <i class="fas fa-eye-slash"></i>
                    </span>
                    <div id="req"></div>
                  </div>
                  <div class="form-group col">
                    <label for="confirmPasswords">Confirm Password<sup class="text-danger">*</sup><span id='message' style="font-size: small;"></span> </label>
                    <input type="password" class="form-control" id="confirmPasswords" placeholder="Confirm Passwords" value="<?php echo $arrdata['password'] ?>" onkeyup='check()' required>
                  </div>

                </div>
                <div class="row">
                  <div class="form-group col">
                    <label for="fatherName">Father Name</label>
                    <input type="text" pattern="[a-zA-Z][a-zA-Z ]*" class="form-control" id="fatherName" name="fathername" placeholder="Father Name" value="<?php echo $arrdata['fatherName'] ?>">
                  </div>
                  <div class="form-group col ">
                    <label for="motherName">Mother Name</label>
                    <input type="text" class="form-control" id="motherName" pattern="[a-zA-Z][a-zA-Z ]*" name="motherName" placeholder="Mother Name" value="<?php echo $arrdata['motherName'] ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col">
                    <label for="lifeMemberNo.">Life Member No.</label>
                    <input type="text" class="form-control" id="lifeMember" name="lifeMember" placeholder="Life Member" value="<?php echo $arrdata['lifeMemberNo'] ?>">
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputFile">Choose your Profile Picture<sup class="text-danger">*</sup> </label>
                  <h6><?= $arrdata['profilepic'] ?></h6>
                  <div class="form-group">
                    <input name="InputFile" type="file" class="form-control-file" onchange="loadFile(event)">

                  </div>

                  <div class="col-md-6">
                    <img id="imgput" src="../../data/uploads/member/<?= $arrdata['profilepic'] ?>" style="width:45px;">
                  </div>

                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="update" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
        </div>
  </section>
</div>
<script>
  //   var check = function() {
  //     if (document.getElementById('password1').value ==
  //       document.getElementById('confirmPasswords').value) {
  //       document.getElementById('message').style.color = 'green';
  //       document.getElementById('message').innerHTML = 'Confirm Posswordis Is Matching';
  //       // var addMember = document.getElementById('addMember')
  //       document.getElementById('addMember').removeAttribute('disabled');

  //     } else {
  //       document.getElementById('message').style.color = 'red';
  //       document.getElementById('message').innerHTML = ' Confirm Posswordis Is Not Matching';
  //       document.getElementById('addMember').setAttribute('disabled', 'true')
  //     }
  //   }
  //   function req() {

  // document.getElementById('req').innerHTML = `<div style="color:rgba(0,0,0,.5);
  // font-weight:800"><p>Must be between 8 and 12 characters. have at least:one lowercase, uppercase, a digit and a symbol</p></div>`
  // }
  // function eyeToggle(e){
  //     const Eyeicon = document.querySelector(".eye")
  //     const Eye = document.querySelector("#password1");
  //     console.log(Eye);
  //     if(Eye.type === "password"){
  //       Eye.type = "text";
  //       Eyeicon.innerHTML = '<i class="fas fa-eye" ></i>';
  //       console.log(Eyeicon);
  //     }
  //     else{
  //       Eye.type ="password";
  //       Eyeicon.innerHTML = '<i class="fas fa-eye-slash"></i>';
  //     }

  //   }
</script>
<?php include "../includes/footer.php" ?>
<script>
  if(!!$("#msg")){
    setTimeout(() => {
      // document.getElementById("msg").style.display="none";
      $("#msg").hide();
    }, 5000);
    
  }
  </script>
  <script src="../assets/previewImage.js"></script>