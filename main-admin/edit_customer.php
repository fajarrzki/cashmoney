<?php

include 'admin-account.php';
$msg = $names = $email = $regno = $usercourse = $userid = $mobileno = $username = '';
$customerids = $_GET['id'];
include 'db-connection.php';
$data = "SELECT * FROM `customer` WHERE `customer_id` = '$customerids'";
$query = mysqli_query($conn, $data);
while ($fetch = mysqli_fetch_assoc($query)) {
    $id = $fetch['customer_id'];
    $customernames = $fetch['customer_name'];
    $customeremail = $fetch['customer_email'];
    $customermobile = $fetch['customer_phone_no'];

    global $customernames;
    global $customeremail;
    global $customermobile;
}
$data = "SELECT * FROM `login` WHERE `login_customer_id` = '$customerids'";
$query = mysqli_query($conn, $data);
while ($fetch = mysqli_fetch_assoc($query)) {
    $loginusername = $fetch['login_username'];
    global $loginusernme;
}

global $customerids;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laundry Admin - Edit Customer</title>

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
                                <center><span>Add new User Data</span></center>
                                <hr>
                                <?php

                                echo $msg;

                                ?>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">User Names</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="user_name" value="<?php echo $customernames; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email Address</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" name="user_email" value="<?php echo $customeremail; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile Number</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputEmail3" name="user_mobile_no" value="<?php echo $customermobile; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="Login_username" value="<?php echo $loginusername; ?>">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-warning btn-block text-light" name="registeruser">Update Customer Account</button>
                                    </div>
                                </div>
                                <?php

                                ini_set('display_errors', 1);
                                ini_set('display_startup_errors', 1);
                                error_reporting(E_ALL);
                                if (isset($_POST['registeruser'])) {
                                    include 'db-connection.php';
                                    $names  = mysqli_real_escape_string($conn, $_POST['user_name']);
                                    $email  = mysqli_real_escape_string($conn, $_POST['user_email']);
                                    $mobileno  = mysqli_real_escape_string($conn, $_POST['user_mobile_no']);
                                    $username  = mysqli_real_escape_string($conn, $_POST['Login_username']);
                                    $phonelength = strlen($mobileno);
                                    $usernamelength = strlen($username);
                                    if (empty($names) || empty($email) ||  empty($mobileno) ||  empty($username)) {
                                        echo "<script>alert('Provide all the details');</script>";
                                    } else if (!preg_match("/^[a-zA-z ]*$/", $names) || !preg_match("/^[a-zA-z0-9]*$/", $username)) {
                                        echo "<script>alert('provide correct full names or username');</script>";
                                    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                        $msg = "Invalid email address";
                                    } else if ($phonelength !== 10) {
                                        echo "<script>alert('Mobile number should have only 10 digits');</script>";
                                    } else if ($usernamelength < 4) {
                                        echo "<script>alert('Username must have more than 4  digits or characters');</script>";
                                    } else {


                                   
                                            $insertuser = "UPDATE  `customer` SET `customer_name`='$names', `customer_email`='$email', `customer_phone_no`='$mobileno' WHERE `customer_id`='$customerids'";
                                            $queryinsertuser = mysqli_query($conn, $insertuser);

                                            if ($queryinsertuser) {
                                                $lastid = mysqli_insert_id($conn);
                                                $password = $username;
                                                $insertlogin = "UPDATE `login` SET `login_username`='$username' WHERE `login_customer_id`='$customerids'";
                                                $querylogin = mysqli_query($conn, $insertlogin);
                                                // Simulate an HTTP redirect:
                                                echo "<script>window.location.replace('all-customers.php');</script";
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