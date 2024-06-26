<?php
include 'customer-account.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laundry Customer - Deliver Progress</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $globalmembername; ?></span>
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
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="print.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Laporan</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">



                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="title-1 m-b-25">Pesanan Saya</h2>
                            <small><p>Hanya pesanan yang telah dikonfirmasi oleh admin yang akan ditampilkan di sini</p></small>
                            <div class="table-responsive table--no-card m-b-40" style="background-color: #fff;padding:1rem .4rem;">
                                <table class="table table-bordered" id="example">
                                    <thead>
                                        <tr>
                                            <th>Nama Pelanggan</th>
                                            <th>ID Pemesanan</th>
                                            <th>Tanggal Pemesanan</th>
                                            <th>Paket </th>
                                            <th>Harga </th>
                                            <th>Titik Pengambilan</th>
                                            <th>Kurir</th>
                                            <th>Status</th>
                                            <th>Kode Transaksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'db-connection.php';
                                        $deliverstatus="delivered";
                                        $transitstatus="on transit";
                                        $data = "SELECT * FROM `customer_order` WHERE  `order_customer_id`='$memberid' AND `order_status`='$transitstatus' OR  `order_customer_id`='$memberid'  AND `order_status`='$deliverstatus'  ";
                                        $query = mysqli_query($conn, $data);
                                        $totalorders = mysqli_num_rows($query);
                                        while ($fetch = mysqli_fetch_assoc($query)) {
                                            $customerid = $fetch['order_customer_id'];
                                            $orderid = $fetch['order_id'];
                                            $orderref = $fetch['order_ref'];
                                            $orderdate = $fetch['order_date'];
                                            $ordertown = $fetch['order_delivery_required'];
                                            $itemdata = "SELECT * FROM `customer_order_items` WHERE `item_order_id`='$orderid'";
                                            $queryitemdata = mysqli_query($conn, $itemdata);
                                            while ($queryfetch = mysqli_fetch_assoc($queryitemdata)) {
                                                $comments = $queryfetch['item_comments'];
                                            }
                                            $deliverydata = "SELECT * FROM `delivery` WHERE `delivery_order_id`='$orderid'";
                                            $querydeliverydata = mysqli_query($conn, $deliverydata);
                                            while ($querydeliverydatacheck = mysqli_fetch_assoc($querydeliverydata)) {
                                                $deliverycomments = $querydeliverydatacheck['delivery_comments'];
                                                $orderrider = $querydeliverydatacheck['delivery_employee_id'];
                                            }
                                            $customerdata = "SELECT * FROM `customer` WHERE `customer_id`='$customerid'";
                                            $querycustomerdata = mysqli_query($conn, $customerdata);
                                            while ($queryfcustomerdatafetch = mysqli_fetch_assoc($querycustomerdata)) {
                                                $customerprofile = $queryfcustomerdatafetch['customer_name'];
                                            }
                                            $riderdata = "SELECT * FROM `employee` WHERE `employee_id`='$orderrider'";
                                            $queryriderdata = mysqli_query($conn, $riderdata);
                                            while ($queryriderdatafetch = mysqli_fetch_assoc($queryriderdata)) {
                                                $employeename = $queryriderdatafetch['employee_name'];
                                                $employephone = $queryriderdatafetch['employee_phone_no'];
                                            }
                                            $paydata = "SELECT * FROM `payment` WHERE `payment_order_id`='$orderid'";
                                            $querypay = mysqli_query($conn, $paydata);
                                            while ($queryfetch = mysqli_fetch_assoc($querypay)) {
                                                $payment = $queryfetch['payment_amount'];
                                                $paycode = $queryfetch['payment_ref'];

                                                echo "
                                                <tr>
                                                <td>$customerprofile</td>
                                                <td>$orderref</td>
                                                <td>$orderdate</td>
                                                <td>$comments</td> 
                                                 <td>Rp. $payment</td> 
                                                 <td>$ordertown</td> 
                                                 <td>$employeename
                                                 - <span class='badge badge-success'>$employephone</span> </td>
                                                 <td>$deliverycomments</td>
                                                 <td class='text-uppercase'>$paycode</td> 
                                            </tr>
                                                ";
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

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
    <!-- End custom js for this page -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
</body>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'print'
            ]
        });
    });
</script>

</html>