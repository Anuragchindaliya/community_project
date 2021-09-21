<?php 

session_start();
if(!isset($_SESSION['login'])){
    header("Location: ../client/member_login.php");
}
include "../db/conn.php";
include "../includes/header.php";
include "../includes/sidebar.php";

?>

<div class="container-fluid">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-10">
        <div class="card mt-3" style="width: 80vw;">
            <div class="card-header">

                <h3 class="card-title">Fixed Header Table</h3>

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
            <div class="card-body table-bordered table-responsive p-0"style="min-height: 570px;" >
                <table class="table table-head-fixed text-nowrap" style="min-height: 200px;">
                    <thead>
                        <tr>
                            <th>Profile Picture</th>
                            <th>ID</th>
                            <th>User</th>
                            <th>Date</th>
                            <th>Active / InActive</th>
                            <th>Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                         if(isset($_GET['filter']) && $_GET['filter']=='lifemember'){
                            $sql = "SELECT * FROM members WHERE isLifeMember='1'";
                        }else{
                            $sql = "SELECT * FROM members";
                        }
                        // $sql = "SELECT * FROM members";
                        $result = mysqli_query($conn,$sql);
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            
                            while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    
                                <tr>
                                    <td><img src="../process/uploads/<?=$row['profilepic']?>" style="width:45px;"></td>
                                    <td><?=$row["id"]?></td>
                                    <td><?=$row["firstName"]." ".$row["lastname"];?></td>
                                    <td><?=$row["dob"]?></td>
                                    <td><button type="submit">Active</button></td>
                                    <td>
                                        <button class="btn btn-primary ml-1" data-toggle="modal" data-target="#example"><i class="fas fa-eye"></i>
                                        </button>
                                        <?php if(isset($_SESSION['login']) && $_SESSION['user']=='admin'){ ?>
                                        <a href="../server/updateMember_form.php?id=<?=$row['id']?> "><button class="btn btn-primary ml-1" data-toggle="modal" data-target="#example"><i class="fas fa-edit"></i></button></a>
                                        <a href="../process/deleteMember.php?id=<?=$row['id']?>"><button type="submit" class="btn btn-danger ml-1" id="delete"><i class="fas fa-trash-alt"></i></button></a>
                                        <?php }?>
                                    </td>
                                </tr>
                                <div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="card-body">
                                                                <div class="form-row">

                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Name</label>
                                                                        <input type="text" class="form-control" placeholder="Enter name" disabled>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Phone</label>
                                                                        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter phone number" disabled>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Email address</label>
                                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" disabled>
                                                                    </div>
                                                                    <div class="form-group radio col-md-3">
                                                                        <label for="exampleInputGender">Gender</label>

                                                                          <div>
                                                                            <input type="radio" id="html" name="gender" value="Male" disabled> <label for="male">Male</label>
                                                                              <input type="radio" id="css" name="gender" value="female" disabled>
                                                                              <label for="female">Female</label>
                                                                              <input type="radio" id="javascript" name="gender" value="other" disabled>
                                                                              <label for="other">Other</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="marriageable">Is Marriageable</label>
                                                                        <div>
                                                                            <input type="checkbox" name="marriageable" disabled>
                                                                            yes
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputAge">Age</label>
                                                                        <input type="type" placeholder="enter age" name="age" class="form-control disabled">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Education</label>
                                                                        <div>
                                                                            <select name="carlist" class="form-control">
                                                                                <option value="bcom">bcom</option>
                                                                                <option value="btech">btech</option>
                                                                                <option value="mca">mca</option>
                                                                                <option value="other">other </option>
                                                                            </select>
                                                                        </div>

                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Degree</label>
                                                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Profession</label>
                                                                        <div>
                                                                            <select name="carlist" class="form-control">
                                                                                <option value="bcom">bcom</option>
                                                                                <option value="btech">btech</option>
                                                                                <option value="mca">mca</option>
                                                                                <option value="other">other </option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Height</label>
                                                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter height">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Date of Birth/D.O.B.</label>
                                                                        <input type="date" class="form-control" placeholder="Enter date of birth">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Face Complexion</label>
                                                                        <div>
                                                                            <select name="carlist" class="form-control">
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
                                                                            <select name="carlist" class="form-control">
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
                                                                            <textarea cols="10" class="form-control" name="comments" rows="2"></textarea>
                                                                        </div>
                                                                    </div>



                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputFile">Profile pic</label>
                                                                        <div class="input-group">
                                                                            <div class="custom-file">
                                                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                                                    file</label>
                                                                            </div>
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text">Upload</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                                <?php
                                    }
                                } else {
                                    echo "0 results";
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
<?php

include "../includes/footer.php";
?>
