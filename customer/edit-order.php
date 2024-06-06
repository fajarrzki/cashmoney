<?php

include 'customer-account.php';
$msg = $names = $email = $regno = $usercourse = $userid = $mobileno = $username = '';
$id = $_GET['id'];
$data = "SELECT * FROM `customer_order` WHERE `order_id` = '$id'";
$query = mysqli_query($conn, $data);
while ($fetch = mysqli_fetch_assoc($query)) {
    $orderref = $fetch['order_ref'];
    $town = $fetch['order_delivery_required'];
    $location = $fetch['order_delivery_location'];
    global $orderref;
    global $town;
    global $location;
}
$itemdata = "SELECT * FROM `customer_order_items` WHERE `item_order_id` = '$id'";
$queryitemdata = mysqli_query($conn, $itemdata);
while ($fetchitemdata = mysqli_fetch_assoc($queryitemdata)) {
    $totalcost = $fetchitemdata['item_total_cost'];
    $comments = $fetchitemdata['item_comments'];
    global $totalcost;
    global $comments;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laundry Customer - Order</title>

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
                                <a class="dropdown-item" href="account-settings.php">
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
                                <center><span>Pay via M-PESA for the Order-<?php echo $orderref; ?> of amount Rp.- <?php echo $totalcost; ?></span></center>
                                <hr>
                                <?php

                                echo $msg;

                                ?>

                                <div class="form-group row">

                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Day of Delivery</label>
                                    <div class="col-sm-10">
                                        <select name="week_day" id="" class="form-control">
                                            <option value="">Klik untuk Memilih</option>
                                            <option value="Senin" <?php if ($town == "Senin") {
                                                                        echo 'selected';
                                                                    } ?>>Senin</option>
                                            <option value="Selasa" <?php if ($town == "Selasa") {
                                                                        echo 'selected';
                                                                    } ?>>Selasa</option>
                                            <option value="Rabu" <?php if ($town == "Rabu") {
                                                                            echo 'selected';
                                                                        } ?>>Rabu</option>
                                            <option value="Kamis" <?php if ($town == "Kamis") {
                                                                            echo 'selected';
                                                                        } ?>>Kamis</option>
                                            <option value="Jumat" <?php if ($town == "Jumat") {
                                                                        echo 'selected';
                                                                    } ?>>Jumat</option>
                                            <option value="Sabtu" <?php if ($town == "Sabtu") {
                                                                            echo ' selected';
                                                                        } ?>>Sabtu</option>
                                            <option value="Minggu" <?php if ($town == "Minggu") {
                                                                        echo 'selected';
                                                                    } ?>>Minggu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nearest Town</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" name="nearest_town" value="<?php echo $location; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-block text-light" name="registeruser">Update Order</button>
                                    </div>
                                </div>
                                <?php

                                ini_set('display_errors', 1);
                                ini_set('display_startup_errors', 1);
                                error_reporting(E_ALL);
                                if (isset($_POST['registeruser'])) {
                                    include 'db-connection.php';
                                    $weekday  = mysqli_real_escape_string($conn, $_POST['week_day']);
                                    $town  = mysqli_real_escape_string($conn, $_POST['nearest_town']);
                                    $phonelength = strlen($mobileno);
                                    $usernamelength = strlen($username);
                                    if (empty($weekday) ||  empty($town)) {
                                        echo "<script>alert('Provide all the details');</script>";
                                    } else if (!preg_match("/^[a-zA-z ]*$/", $names)) {
                                        echo "<script>alert('provide  a valid name for the nearest town');</script>";
                                    } else {

                                        $ordercheck = $_GET['id'];
                                        $insertuser = "UPDATE `customer_order` SET `order_delivery_required`='$weekday', `order_delivery_location`='$town' WHERE `order_id`='$ordercheck'";
                                        $queryinsertuser = mysqli_query($conn, $insertuser);
                                        if ($queryinsertuser) {
                                            echo "<script>window.location.replace('index.php');</script";
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
                        <span>Copyright &copy; Cashmoneycleaning Website 2023</span>
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