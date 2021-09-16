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
                  <form action="../process/addmember.php" method="post">
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
                        <div class="form-group">
                            <label for="Mobile">Mobile No.</label>
                            <input type="tel" class="form-control" id="Mobile" placeholder="Mobile No." name="mobile">
                        </div>
                        <div class="form-group">
                        <label for="Email1">Email address</label>
                        <input type="email" class="form-control" id="Email1" placeholder="Enter email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="Dob">Date of Birth</label>
                        <input type="date" class="form-control" id="Dob" placeholder="Date of Birth" name="dob">
                      </div>
                      <div class="form-group">
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
                          <input class="form-check-input" type="radio" name="Gender" id="inlineRadio3" value="Others" >
                          <label class="form-check-label" for="inlineRadio3">Others</label>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="form-group col">
                            <label for="state">State</label>
                            <input type="text" class="form-control" id="state" name="state" placeholder="State">
                        </div>
                        <div class="form-group col">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="City">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="password" class="form-control" id="address" name="address" placeholder="Address ">
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
      <?php include "../includes/footer.php"?> 