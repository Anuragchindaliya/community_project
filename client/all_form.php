<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Varshney Admin</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8  m-auto">
                <h1 class="m-auto text-center">Varshney Samaj Community</h1>
                <p class="text-center">Portal for admin</p>
            </div>

        </div>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Registration</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Member login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Admin login</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <form action="../process/registerMember.php" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="inputName"> Name<sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control" name="firstName" id="inputName" placeholder="Name" required>
                                            </div>
                                        </div>

                                        <div class="form-group col">
                                            <label for="Mobile">Mobile No.<sup class="text-danger">*</sup></label>
                                            <input type="tel" class="form-control" id="Mobile" placeholder="Mobile No." name="mobile" required>
                                        </div>
                                        <div class="form-group col">
                                            <label for="Email1">Email address<sup class="text-danger">*</sup></label>
                                            <input type="email" class="form-control" id="Email1" placeholder="Enter email" name="email">
                                        </div>
                                        <div class="row">

                                            <div class="form-group col">
                                                <label for="password1">Password<sup class="text-danger">*</sup> <span></span></label>
                                                <input type="password" class="form-control" id="password1" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" placeholder="Password" name="password" required>
                                            </div>
                                            <div class="form-group col">
                                                <label for="confirmPasswords">Confirm Password<sup class="text-danger">*</sup> <span id='message' style="font-size: small;"></span></label>
                                                <input type="password" class="form-control" id="confirmPasswords" placeholder="Confirm Passwords" onkeyup='check()' required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="address">Area<sup class="text-danger">*</sup></label>
                                                <textarea type="text" class="form-control" id="address" name="address" placeholder="Area" rows="3" required></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group col">
                                                    <label for="address">Pincode<sup class="text-danger">*</sup></label>
                                                    <input class="form-control" id="pincode" name="pincode" placeholder="Pincode" type="text" pattern="[0-9]{6}" title="Correct Format: 121005" required>
                                                </div>
                                                <div class="form-group col">
                                                    <label for="exampleInputFile">Choose Profile Picture<sup class="text-danger">*</sup></label>
                                                    <div class="form-group">
                                                        <input name="InputFile" type="file" class="form-control-file" id="exampleFormControlFile1" required>
                                                    </div>
                                                </div>
                                            </div>




                                        </div>




                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" id="registerMember" name="registerMember" class="btn btn-success">Create Account</button>
                                    </div>
                                    <?php
                                    if (isset($_GET['msgreg']) && $_GET['msg'] = "success") { ?>
                                        <div id="successMsg" class="alert alert-success alert-dismissible fade show" role="alert">

                                            <i class="fa fa-check-circle"></i>
                                           
                                                <strong>Successfully Created!</strong> We'll approve you through mail
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                           
                                        </div>
                                    <?php }
                                    ?>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="../process/loginMember.php" method="post">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter your email" aria-describedby="emailHelp" required>
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <?php if (isset($_GET['msg'])) {
                                    echo '<div class="alert alert-danger mt-2" role="alert">' . $_GET["msg"] . '</div>';
                                } ?>
                            </div>

                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <form action="../process/loginAdmin.php" method="post">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter your email" aria-describedby="emailHelp" required>
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        var msg = document.getElementById("successMsg")
        setTimeout(()=>{
            msg.style.display="none";
        },5000)
    </script>
</body>

</html>