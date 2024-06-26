<?php

include 'admin-account.php';
$msg = $names = $email = $regno = $usercourse = $userid = $mobileno = $username = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laundry Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include 'sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Cari.." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-warning" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Cari.." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-warning" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                            <!-- Dropdown - Alerts -->

                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>

                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-xs-12 col-sm-12"></div>
                        <div class="col-lg-10 col-md-10 col-xs-12 col-sm-12" style="background-color: white;padding:20px;">

                            <form action="" method="POST">
                                <center><span>Add new Admin Data</span></center>
                                <hr>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Full Names</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="admin_name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email Address</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" name="admin_email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputEmail3" name="admin_phone_no" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="Login_username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputEmail3" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-block text-light" name="registerstudent">Add Admin</button>
                                    </div>
                                </div>
                                <?php
                                if (isset($_POST['registerstudent'])) {
                                    include 'db-connection.php';
                                    $names  = mysqli_real_escape_string($conn, $_POST['admin_name']);
                                    $email  = mysqli_real_escape_string($conn, $_POST['admin_email']);
                                    $mobileno  = mysqli_real_escape_string($conn, $_POST['admin_phone_no']);
                                    $password  = mysqli_real_escape_string($conn, $_POST['password']);
                                    $username  = mysqli_real_escape_string($conn, $_POST['Login_username']);
                                    $phonelength = strlen($mobileno);
                                    $usernamelength = strlen($username);
                                    $passwordlength = strlen($password);
                                    if (empty($names) || empty($email) ||  empty($mobileno) ||  empty($username) || empty($password)) {
                                        echo "<script>alert('Provide all the details');</script>";
                                    } else if (!preg_match("/^[a-zA-z ]*$/", $names) || !preg_match("/^[a-zA-z0-9]*$/", $username)) {
                                        echo "<script>alert('provide correct full names or username');</script>";
                                    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                        $msg = "Invalid email address";
                                    } else if ($phonelength !== 10) {
                                        echo "<script>alert('Mobile number should have only 10 digits');</script>";
                                    } else if ($passwordlength < 6) {
                                        echo "<script>alert('Password should have at least 6 characters');</script>";
                                    } else if ($usernamelength < 4) {
                                        echo "<script>alert('Username must have more than 4  digits or characters');</script>";
                                    } else {

                                        $checkadmin = "SELECT * FROM `Admin` WHERE `admin_name` = '$names' AND `admin_email` = '$email' AND `admin_phone_no`='$mobileno' ";
                                        $queryadmin = mysqli_query($conn, $checkadmin);
                                        $adminrows = mysqli_num_rows($queryadmin);
                                        if ($adminrows >= 1) {
                                            echo "<script>alert('Admin record Already exists');</script>";
                                        } else {
                                            $checkusername = "SELECT * FROM `login` WHERE `Login_username` = '$username'";
                                            $queryusername = mysqli_query($conn, $checkusername);
                                            $usernamerows = mysqli_num_rows($queryusername);
                                            if ($usernamerows >= 1) {
                                                echo "<script>alert('Username Already exists ');</script>";
                                            } else {
                                                $checkphonenumber = "SELECT * FROM `Admin` WHERE `admin_phone_no` = '$mobileno'";
                                                $queryphonenumber = mysqli_query($conn, $checkphonenumber);
                                                $phonenumberrows = mysqli_num_rows($queryphonenumber);
                                                if ($phonenumberrows >= 1) {
                                                    echo "<script>alert('Mobile Number Already exists');</script>";
                                                } else {

                                                    $insertadmin = "INSERT INTO `Admin`(`admin_name`, `admin_email`,`admin_phone_no`) VALUES ('$names', '$email', '$mobileno')";
                                                    $queryadmins = mysqli_query($conn, $insertadmin);
                                                    if ($queryadmins) {
                                                        $lastid = mysqli_insert_id($conn);
                                                        $password = md5($password);
                                                        echo   $insertlogin = "INSERT INTO `login`(`login_username`, `login_rank`, `login_password`, `login_admin_id`) VALUES ('$username', 'admin', '$password',  '$lastid')";
                                                        $querylogin = mysqli_query($conn, $insertlogin);
                                                        if ($querylogin) {
                                                            echo "<script>alert('Admin has successfully been registered');</script>";
                                                            echo "<script>window.location.href='all-admin.php';</script>";
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                ?>
                            </form>
                        </div>
                        <div class="col-lg-1 col-md-1 col-xs-12 col-sm-12"></div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>