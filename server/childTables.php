<?php
include "../includes/header.php";
include "../includes/sidebar.php";
?>
    <!-- Button trigger modal -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    <h3 class="card-title">Fixed Header Table</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-bordered table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Date</th>
                                <th>Active / InActive</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>183</td>
                                <td>John Doe</td>
                                <td>11-7-2014</td>
                                <td><button type="submit">Active</button></td>
                                <td><button type="button" class="btn btn-primary" ><i class="fas fa-eye"></i></button>
                                    <button class="btn btn-primary" data-toggle="modal"
                                    data-target="#example"><i class="fas fa-edit"></i>
                                        </button>
                                        <button type="submit" class="btn btn-danger" id="delete"><i class="fas fa-trash-alt "></i></button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="example" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="card-body">
                                                                <div class="form-row">
                                
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Name</label>
                                                                        <input type="text" class="form-control" 
                                                                            placeholder="Enter name">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Phone</label>
                                                                        <input type="number" class="form-control" id="exampleInputEmail1"
                                                                            placeholder="Enter phone number">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Email address</label>
                                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                                            placeholder="Enter email">
                                                                    </div>
                                                                    <div class="form-group radio col-md-3">
                                                                        <label for="exampleInputGender">Gender</label>
                                
                                                                          <div>
                                                                            <input type="radio" id="html" name="gender" value="Male"> <label
                                                                                for="male">Male</label>
                                                                              <input type="radio" id="css" name="gender" value="female">
                                                                              <label for="female">Female</label>
                                                                              <input type="radio" id="javascript" name="gender"
                                                                                value="other">
                                                                              <label for="other">Other</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-3">
                                                                        <label for="marriageable">Is Marriageable</label>
                                                                        <div>
                                                                        <input type="checkbox"  name="marriageable">
                                                                         yes
                                                                        </div>
                                                                    
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputAge">Age</label>
                                                                        <input type="type" placeholder="enter age" name="age" class="form-control"
                                                                            >
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Education</label>
                                                                        <div>
                                                                        <select  name="carlist" class="form-control">
                                                                            <option value="bcom">bcom</option>
                                                                            <option value="btech">btech</option>
                                                                            <option value="mca">mca</option>
                                                                            <option value="other">other </option>
                                                                          </select>
                                                                        </div>
                                                                       
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Degree</label>
                                                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                                                            placeholder="Enter email">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Profession</label>
                                                                        <div>
                                                                            <select  name="carlist" class="form-control">
                                                                                <option value="bcom">bcom</option>
                                                                                <option value="btech">btech</option>
                                                                                <option value="mca">mca</option>
                                                                                <option value="other">other </option>
                                                                              </select>
                                                                            </div>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Height</label>
                                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                                            placeholder="Enter height">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Date of Birth/D.O.B.</label>
                                                                        <input type="date" class="form-control" 
                                                                            placeholder="Enter date of birth">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="exampleInputEmail1">Face Complexion</label>
                                                                        <div>
                                                                            <select  name="carlist" class="form-control">
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
                                                                            <select  name="carlist" class="form-control">
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
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    



                                </td>
                                
                                </td>
                            </tr>
                           

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
 

    </div>
<?php
include"../includes//footer.php"
?>