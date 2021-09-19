<?php
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
          <h1>General Form</h1>
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
        <div class="col-md-10">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="../process/addmember.php" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="row">
                  <div class="form-group col">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" name="firstName" id="inputName" placeholder="Name">
                  </div>
                  <div class="form-group col">
                    <label for="lastName">LastName</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="LastName">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col">
                  <label for="Mobile">Mobile No.</label>
                  <input type="tel" class="form-control" id="Mobile" placeholder="Mobile No." name="mobile">
                  </div>
                  <div class="form-group col">
                  <label for="Email1">Email address</label>
                  <input type="email" class="form-control" id="Email1" placeholder="Enter email" name="email">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col">
                  <label for="Dob">Date of Birth</label>
                  <input type="date" class="form-control" id="Dob" placeholder="Date of Birth" name="dob">
                  </div>
                  <div class="form-group col">
                  <div>
                    <label for="Gender">Gender</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Gender" id="inlineRadio1" value="Male">
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
                    <label for="state">State</label>
                    <input list="states" class="form-control" name="state" placeholder="State" id="state">
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
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="City">
                  </div>
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Address ">
                </div>
                <div class="form-group">
                  <label for="password1">Password</label>
                  <input type="password" class="form-control" id="password1" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                  <label for="confirmPasswords">Confirm Passwords</label>
                  <input type="password" class="form-control" id="confirmPasswords" placeholder="Confirm Passwords">
                </div>
                <div class="form-group">
                  <label for="fatherName">Father Name</label>
                  <input type="text" class="form-control" id="fatherName" name="fathername" placeholder="Father Name">
                </div>
                <div class="form-group">
                  <label for="motherName">Mother Name</label>
                  <input type="text" class="form-control" id="motherName" name="motherName" placeholder="Mother Name">
                </div>
                <div class="row">
                  <div class="form-group col">
                    <label for="recieptNo.">Reciept No.</label>
                    <input type="text" class="form-control" id="Reciept No" name="recieptNo" placeholder="Reciept No">
                  </div>
                  <div class="form-group col">
                    <label for="lifeMemberNo.">Life Member No.</label>
                    <input type="text" class="form-control" id="lifeMember" name="lifeMember" placeholder="Life Member">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="InputFile" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
                <!-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div> -->
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" name="addMember" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

        </div>
        <!--/.col left -->
        <!-- right column -->

        <!-- /.row -->
      </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<?php include "../includes/footer.php" ?>