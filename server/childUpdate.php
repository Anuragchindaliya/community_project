<?php
include "../includes/header.php";
include "../includes/sidebar.php";
include "../db/conn.php";
?>
<div class="content-wrapper">
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
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <?php
                  // include "../db/conn.php";
                  $ids = $_GET['id'];
                  $showquery = "select * from `child` where id = $ids";
                  $showdata = mysqli_query($conn, $showquery);
                  $arrdata = mysqli_fetch_assoc($showdata);
                //   echo $arrdata['child_Name'];
                  // echo "$arrdata[id]";
                  if(isset($_POST['childupdata'])){
                    echo "<meta http-equiv='refresh' content='0'>";
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
                    $sql = "UPDATE `child` SET `child_Name`='$child_Name',`child_email`='$child_email',`gender`='$gender',`isMarriageable`='$isMarriageable',`age`='$age',`education`='$education',`degree`='$degree',`profession`='$profession',`height`='$height',`dateofbirth`='$dateofbirth',`faceofcomplexion`='$faceofcomplexion',`manglik`='$manglik',`expectation`='$expectation',`profile_pic`='$profile_pic',`status`='$profile_pic' WHERE id {$id}";
                    if (mysqli_query($conn, $sql)) {
                      echo "New record created successfully";
                    } else {
                      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                  }
                  ?>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name" value="<?php echo $arrdata['child_Name'] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="number" class="form-control" name="phone" placeholder="Enter phone number" value="<?php echo $arrdata['child_Name'] ?>">
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
                        <input class="form-check-input" type="radio" name="Gender" id="inlineRadio1" value="Male" <?php if ($arrdata['gender'] === 'male') { ?> checked <?php
                           } ?>>
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Gender" id="inlineRadio2" value="Female" <?php if ($arrdata['gender'] === 'female') { ?> checked <?php
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
                <div class="form-group col-md-6">
                    <label for="exampleInputAge">Age</label>
                        <input type="type" placeholder="enter age" name="age" class="form-control" value="<?php echo $arrdata['child_Name'] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Education</label>
                    <input type="text" class="form-control" name="education" placeholder="Enter education" value="<?php echo $arrdata['child_Name'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Degree</label>
                        <div>
                            <select name="degree" class="form-control">
                                <option value="bcom" <?php if ($arrdata['degree'] === 'bcom') { ?> selected <?php
                                } ?> >bcom</option>
                                <option value="btech" <?php if ($arrdata['degree'] === 'btech') { ?> selected <?php
                                } ?> >btech</option>
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
                            } ?> >bcom</option>
                            <option value="btech" <?php if ($arrdata['profession'] === 'btech') { ?> selected <?php
                            } ?> >btech</option>
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
                    <input type="text" class="form-control" name="height" placeholder="Enter height">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Date of Birth/D.O.B.</label>
                    <input type="date" class="form-control" name="dateofbirth" placeholder="Enter date of birth">
                </div>
            </div>
            <div class="row">                    
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Face Complexion</label>
                    <div>
                        <select name="facecomplexion" class="form-control">
                            <option value="bcom" <?php if ($arrdata['facecomplexion'] === 'bcom') { ?> selected <?php
                            } ?> >bcom</option>
                            <option value="btech" <?php if ($arrdata['facecomplexion'] === 'btech') { ?> selected <?php
                            } ?> >btech</option>
                            <option value="mca" <?php if ($arrdata['facecomplexion'] === 'mca') { ?> selected <?php
                            } ?>>mca</option>
                            <option value="other" <?php if ($arrdata['facecomplexion'] === 'other') { ?> selected <?php
                            } ?>>other </option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Manglik</label>
                    <div>
                        <select name="manglik" class="form-control">
                            <option value="bcom" <?php if ($arrdata['manglik'] === 'bcom') { ?> selected <?php
                            } ?> >bcom</option>
                            <option value="btech" <?php if ($arrdata['manglik'] === 'btech') { ?> selected <?php
                            } ?> >btech</option>
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

<?php include "../includes/footer.php"?>