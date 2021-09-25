<?php

session_start();
if (!isset($_SESSION['login'])) {
  header("Location: ../client/member_login.php");
}
if ($_SESSION['user'] == 'member') {
  header("Location: ./dashboard.php");
}
include "../includes/header.php";
include "../includes/sidebar.php";
include "../db/conn.php"
?>
<div class="content-wrapper ">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add New Member</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
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
              <h3 class="card-title">Fill Member Details</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="../process/addmember.php" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="form-group col">
                    <label for="inputName">Full Name<sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control" name="firstName" id="inputName" pattern="[a-zA-Z][a-zA-Z ]*" placeholder="Name" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col">
                    <label for="Mobile">Mobile No.<sup class="text-danger">*</sup></label>
                    <input type="tel" class="form-control" id="Mobile" pattern="^[789]\d{9}$" placeholder="Mobile No." name="mobile" required>
                  </div>
                  <div class="form-group col">
                    <label for="Email1">Email address<sup class="text-danger">*</sup></label>
                    <input type="email" class="form-control" id="Email1" placeholder="Enter email" name="email">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col">
                    <label for="Dob">Date of Birth<sup class="text-danger">*</sup></label>
                    <input type="date" class="form-control" id="Dob" placeholder="Date of Birth" name="dob" min='1899-01-01' max='2000-01-01' required>
                  </div>
                  <div class="form-group col">
                    <div>
                      <label for="Gender">Gender</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" checked name="Gender" id="inlineRadio1" value="Male">
                      <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="Gender" id="inlineRadio2" value="Female">
                      <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="Gender" id="inlineRadio3" value="Others">
                      <label class="form-check-label" for="inlineRadio3">Others</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col">
                    <label for="state">State<sup class="text-danger">*</sup></label>
                    <input list="states" class="form-control" name="state" placeholder="State" id="state" required>
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
                    <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col">
                    <label for="address">Address<sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
                  </div>
                  <div class="form-group col">
                    <label for="address">Pincode<sup class="text-danger">*</sup></label>
                    <input class="form-control" id="pincode" name="pincode" placeholder="Pincode" type="text" pattern="[0-9]{6}" title="Correct Format: 121005" required>
                  </div>
                </div>

                <div class="row">

                  <div class="form-group col">
                    <label for="password1">Password<sup class="text-danger">*</sup> </label>
                    <input type="password" class="form-control " id="password1" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" placeholder="Password" onblur='req()' name="password" required>
                    <span class="eye" onclick="eyeToggle()" style="position: absolute;top: 39px;right: 19px;"><i class="fas fa-eye-slash"></i></span>
                    <div id="req"></div>
                  </div>
                  <div class="form-group col">
                    <label for="confirmPasswords">Confirm Password<sup class="text-danger">*</sup> <span id='message' style="font-size: small;"></span></label>
                    <input type="password" class="form-control" id="confirmPasswords" placeholder="Confirm Passwords" onkeyup='check()' required>
                  </div>

                </div>
                <div class="row">
                  <div class="form-group col">
                    <label for="fatherName">Father Name</label>
                    <input type="text" class="form-control" pattern="[a-zA-Z][a-zA-Z ]*" id="fatherName" name="fathername" placeholder="Father Name">
                  </div>
                  <div class="form-group col">
                    <label for="motherName">Mother Name</label>
                    <input type="text" class="form-control" pattern="[a-zA-Z][a-zA-Z ]*" id="motherName" name="motherName" placeholder="Mother Name">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col">
                    <label for="lifeMemberNo.">Life Member No.</label>
                    <input type="text" class="form-control" id="lifeMember" name="lifeMember" placeholder="Life Member">
                  </div>
                </div>

                <div class="form-group col-md-6">
                  <label for="exampleInputFile">Choose your Profile Picture<sup class="text-danger">*</sup></label>
                  <div class="form-group">
                    <input name="InputFile" type="file" class="form-control-file" id="exampleFormControlFile1" required>
                  </div>

                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" id="addMember" name="addMember" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>


        </div>

      </div>
  </section>
  <!-- /.content -->
</div>
<script>
  var check = function() {

    if (document.getElementById('password1').value ==
      document.getElementById('confirmPasswords').value) {
      document.getElementById('message').style.color = 'green';
      document.getElementById('message').innerHTML = 'Confirm Posswordis Is Matching';
      // var addMember = document.getElementById('addMember')
      document.getElementById('addMember').removeAttribute('disabled');

    } else {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = ' Confirm Posswordis Is Not Matching';
      document.getElementById('addMember').setAttribute('disabled', 'true')
    }
  }

  function req() {

    // this.style.borderColor = "red";
    document.getElementById('req').innerHTML = `<div style="color:rgba(0,0,0,.5);
    font-weight:800"> <p>Must be between 8 and 12 characters. have at least:one lowercase, uppercase, a digit and a symbol</p></div>`
  }

  function eyeToggle(e) {

    const Eye = document.querySelector("#password1");
    console.log(Eye);
    if (Eye.type === "password") {
      Eye.type = "text";
      Eyeicon.innerHTML = '<i class="fas fa-eye" ></i>';
    } else {
      Eye.type = "password";
      Eyeicon.innerHTML = '<i class="fas fa-eye-slash"></i>';
    }

  }
</script>
<?php include "../includes/footer.php" ?>