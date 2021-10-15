<?php
include "../../data/db/conn.php";
include "imgFn.php";
$id = $_POST['id'];
// $sql="SELECT * FROM `child` WHERE id='$id'";
$sql = "SELECT *,child.gender AS childGender FROM `child` LEFT JOIN `members` ON child.pid = members.id WHERE child.id = '$id'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_array($result);
    echo $modalContent = '<div class="container emp-profile">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="' . defaultImage('../../data/uploads/',$data['profile_pic'], "child") . '" alt="" />
                   
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>' .
        ucFirst($data['child_Name'])
        . '</h5>
                    <h6>
                        ' . $data['profession'] . '
                    </h6>
                    <!--<p class="proile-rating">RANKINGS : <span>8/10</span></p>-->
                </div>
            </div>
        </div>
        <div class="row">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Basic Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Other Details</a>
                        </li>
                    </ul>            
        </div>
        <div class="row>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                
                                <p>' . $data['child_Name'] . '</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>' . $data['child_email'] . '</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p>' . $data['mobileno'] . '</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Gender</label>
                            </div>
                            <div class="col-md-6">
                                <p>' . $data['childGender'] . '</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>D.O.B</label>
                            </div>
                            <div class="col-md-6">
                                <p>' . $data['dateofbirth'] . '</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Height</label>
                            </div>
                            <div class="col-md-6">
                                <p>' . $data['height'] . 'cm</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Father Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>' . $data['firstName'] . '</p>
                            </div>
                        </div>
                        <!--<div class="row">
                            <div class="col-md-6">
                                <label>Mother Name</label>
                            </div>
                            <div class="col-md-6">
                                <p>mother name</p>
                            </div>
                        </div>-->
                        
                        <!--<div class="row">
                            <div class="col-md-6">
                                <label>Availability</label>
                            </div>
                            <div class="col-md-6">
                                <p>6 months</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Your Bio</label><br />
                                <p>Your detail description</p>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    
</div>';
} else {
    echo "No data Found";
}
