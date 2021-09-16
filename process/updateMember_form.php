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
            <form action="updateMember_form.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data" >
              <div class="card-body">

                <div class="row">
                  <?php
                  // include "../db/conn.php";
                  $ids = $_GET['id'];
                  $showquery = "select * from membersdetails where id = {$ids}";
                  $showdata = mysqli_query($conn, $showquery);
                  $arrdata = mysqli_fetch_assoc($showdata);
                  // echo $arrdata['gender'];
                  // echo "$arrdata[id]";
                  if (isset($_POST['update'])) {
                    
                    echo "<meta http-equiv='refresh' content='0'>";
                    // $idupdate = $_GET['id'];
                    $firstName = $_POST['firstName'];
                    // echo $firstName;
                    $lastName = $_POST['lastName'];
                    $mobileNo = $_POST['mobile'];
                    $email = $_POST['email'];
                    $dob = $_POST['dob'];
                    $gender = $_POST['Gender'];
                    $state = $_POST['state'];
                    $city = $_POST['city'];
                    $address = $_POST['address'];
                    $password = $_POST['password'];
                    $fatherName = $_POST['fathername'];
                    $motherName = $_POST['motherName'];
                    $lifeMemberNo = $_POST['lifeMember'];
                    $recieptno = $_POST['recieptNo'];
                    // $profilepic = $_POST['InputFile'];
                    $sql = "UPDATE `membersdetails` SET firstName ='$firstName', lastname='$lastName', mobileNo= '$mobileNo' ,email = '$email', dob = '$dob', gender = '$gender', state = '$state', city = '$city', address = '$address', password ='$password', fatherName = '$fatherName', motherName ='$motherName', lifeMemberNo = '$lifeMemberNo' , recieptNo ='$recieptno', profilepic = '$profilepic' WHERE id = {$ids}";
                    if (mysqli_query($conn, $sql)) {
                      echo "New record created successfully";
                    } else {
                      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                  }




                  ?>
                  <div class="form-group col">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" name="firstName" value="<?php echo $arrdata['firstName'] ?>" id="inputName" placeholder="Name">
                  </div>
                  <div class="form-group col">
                    <label for="lastName">LastName</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $arrdata['lastname'] ?>" placeholder="LastName">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Mobile">Mobile No.</label>
                  <input type="tel" class="form-control" id="Mobile" placeholder="Mobile No." name="mobile" value="<?php echo $arrdata['mobileNo'] ?>">
                </div>
                <div class="form-group">
                  <label for="Email1">Email address</label>
                  <input type="email" class="form-control" id="Email1" placeholder="Enter email" name="email" value="<?php echo $arrdata['email'] ?>">
                </div>
                <div class="form-group">
                  <label for="Dob">Date of Birth</label>
                  <input type="date" class="form-control" id="Dob" placeholder="Date of Birth" name="dob" value="<?php echo $arrdata['dob'] ?>">
                </div>
                <div class="form-group">
                  <div>
                    <label for="Gender">Gender</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Gender" id="inlineRadio1" value="male" <?php if ($arrdata['gender'] === 'male') { ?> checked <?php
                                                                                                                                                              } ?>>
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Gender" id="inlineRadio2" value="female" <?php if ($arrdata['gender'] === 'female') { ?> checked <?php
                                                                                                                                                                  } ?>>
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Gender" id="inlineRadio3" value="Others" <?php if ($arrdata['gender'] === 'Others') { ?> checked <?php
                                                                                                                                                                  } ?>>
                    <label class="form-check-label" for="inlineRadio3">Others</label>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="State" value="<?php echo $arrdata['state'] ?>">
                  </div>
                  <div class="form-group col">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="City" value="<?php echo $arrdata['city'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="password" class="form-control" id="address" name="address" placeholder="Address " value="<?php echo $arrdata['address'] ?>">
                </div>
                <div class="form-group">
                  <label for="password1">Password</label>
                  <input type="password" class="form-control" id="password1" placeholder="Password" name="password" value="<?php echo $arrdata['password'] ?>">
                </div>
                <div class="form-group">
                  <label for="confirmPasswords">Confirm Passwords</label>
                  <input type="password" class="form-control" id="confirmPasswords" placeholder="Confirm Passwords" value="<?php echo $arrdata['password'] ?>">
                </div>
                <div class="form-group">
                  <label for="fatherName">Father Name</label>
                  <input type="text" class="form-control" id="fatherName" name="fathername" placeholder="Father Name" value="<?php echo $arrdata['fatherName'] ?>">
                </div>
                <div class="form-group">
                  <label for="motherName">Mother Name</label>
                  <input type="text" class="form-control" id="motherName" name="motherName" placeholder="Mother Name" value="<?php echo $arrdata['motherName'] ?>">
                </div>
                <div class="row">
                  <div class="form-group col">
                    <label for="recieptNo.">Reciept No.</label>
                    <input type="text" class="form-control" id="Reciept No" name="recieptNo" placeholder="Reciept No" value="<?php echo $arrdata['recieptNo'] ?>">
                  </div>
                  <div class="form-group col">
                    <label for="lifeMemberNo.">Life Member No.</label>
                    <input type="text" class="form-control" id="lifeMember" name="lifeMember" placeholder="Life Member" value="<?php echo $arrdata['lifeMemberNo'] ?>">
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
                <button type="submit" name="update" class="btn btn-primary">Update</button>
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