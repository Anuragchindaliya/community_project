<?php
include "../includes/header.php";
include "../includes/sidebar.php";
include "../db/conn.php";
?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>

            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Child</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="../process/addChildDetail.php" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-row">
                            <?php
                  // include "../db/conn.php";
                  $ids = $_GET['id'];
                  $showquery = "select * from child_data where id = {$ids}";
                  $showdata = mysqli_query($conn, $showquery);
                  $arrdata = mysqli_fetch_assoc($showdata);
                  // echo $arrdata['gender'];
                  // echo "$arrdata[id]";
                  if(isset($_POST['childdata'])){
                    $child_Name =$_POST['name'];
                    // echo $firstName;
                    $child_email = $_POST['email'];
                    $gender = $_POST['gender'];
                    $isMarriageable = $_POST['marriage'];
                    $age = $_POST['age'];
                    $education = $_POST['education'];
                    $degree = $_POST['degree'];
                    $profession = $_POST['profession'];
                    $height = $_POST['height'];
                    $dateofbirth = $_POST['dateofbirth'];
                    $faceofcomplexion = $_POST['facecomplexion'];
                    $manglik = $_POST['manglik'];
                    $expectation = $_POST['expectation'];
                    $profile_pic = $_POST['InputFile'];
                    // $profilepic = $_POST['InputFile'];
                    $sql = "UPDATE ` child_data` SET firstName ='$firstName', lastname='$lastName', mobileNo= '$mobileNo' ,email = '$email', dob = '$dob', gender = '$gender', state = '$state', city = '$city', address = '$address', password ='$password', fatherName = '$fatherName', motherName ='$motherName', lifeMemberNo = '$lifeMemberNo' , recieptNo ='$recieptno', profilepic = '$profilepic' WHERE id = {$ids}";
                    if (mysqli_query($conn, $sql)) {
                      echo "New record created successfully";
                    } else {
                      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                  }
                  ?>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter name" value="<?php echo $arrdata['childName'] ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="number" class="form-control" name="phone" placeholder="Enter phone number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group radio col-md-3">
                                    <label for="exampleInputGender">Gender</label>

                                      <div>
                                        <input type="radio" id="html" name="gender" value="Male"> <label for="male">Male</label>
                                          <input type="radio" id="css" name="gender" value="female">
                                          <label for="female">Female</label>
                                          <input type="radio" checked name="gender" value="other">
                                          <label for="other">Other</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Is Marriageable</label>
                                    <div>
                                        <input type="checkbox" value="yes" name="marriage">
                                        yes

                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputAge">Age</label>
                                    <input type="type" placeholder="enter age" name="age" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Education</label>
                                    <input type="text" class="form-control" name="education" placeholder="Enter education">

                                </div>
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
                                    <label for="exampleInputEmail1">Profession</label>
                                    <div>
                                        <select name="profession" class="form-control">
                                            <option value="bcom">bcom</option>
                                            <option value="btech">btech</option>
                                            <option value="mca">mca</option>
                                            <option value="other">other </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Height</label>
                                    <input type="text" class="form-control" name="height" placeholder="Enter height">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Date of Birth/D.O.B.</label>
                                    <input type="date" class="form-control" name="dateofbirth" placeholder="Enter date of birth">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Face Complexion</label>
                                    <div>
                                        <select name="facecomplexion" class="form-control">
                                            <option value="bcom">bcom</option>
                                            <option value="btech">btech</option>
                                            <option value="mca">mca</option>
                                            <option value="other">other </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Manglik</label>
                                    <div>
                                        <select name="manglik" class="form-control">
                                            <option value="bcom">bcom</option>
                                            <option value="btech">btech</option>
                                            <option value="mca">mca</option>
                                            <option value="other">other </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Expectation</label>
                                    <div>
                                        <textarea cols="40" name="expectation" rows="1"></textarea>
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
                        </div>


                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="childdata" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <?php
                include "../includes/footer.php"
                ?>