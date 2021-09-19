<?php 
include "../db/conn.php";
include "../includes/header.php";
include "../includes/sidebar.php";

?>

<div class="container-fluid">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-10">
        <div class="card">
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
            <div class="card-body table-bordered table-responsive p-0" >
                <table class="table table-head-fixed text-nowrap">
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
                                    <button type="button" class="btn btn-primary" ><i class="fas fa-eye"></i></button>
                                    <a href="../process/updateMember_form.php?id=<?=$row['id']?> "><button class="btn btn-primary ml-1" data-toggle="modal" data-target="#example"><i class="fas fa-edit"></i></button></a>
                                    <a href="../process/deleteMember.php?id=<?=$row['id']?>"><button type="submit" class="btn btn-danger ml-1" id="delete"><i class="fas fa-trash-alt"></i></button></a>
                            </td>
                                </tr>
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
