<?php

include ('koneksi.php');

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: admin");
  exit();
}

$username = $_SESSION['username'];

$sql = "SELECT * from admin WHERE username = '$username'";
$hasil = $conn->query($sql);
if ($hasil->num_rows > 0) {
  $row = $hasil->fetch_assoc();
  $email = $row['username'];
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
    <link rel="shortcut icon" type="icon" href="../proyek1/user/images/logo klinik.png">

    <title>KLINIK BIDAN SUSAN</title>

    <!-- Custom fonts for this template -->
    <link href="../proyek1/dasboard admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../proyek1/dasboard admin/css/sb-admin-2.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this page -->
    <link href="../proyek1/dasboard admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">

</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3" ><span style="margin-left: -5px;">Bidan Susan</span></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
                <a class="nav-link" href="../proyek1/dasboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Data Keseluruhan
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Rekam Medis</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="py-2 collapse-inner rounded">
                <a class="collapse-item" href="../proyek1/data_hamil.php">Data Ibu Hamil</a>
                        <a class="collapse-item" href="../proyek1/data_hamil.php">Data Ibu Nifas</a>
                        <a class="collapse-item" href="../proyek1/data_bayi.php">Data Bayi & Balita</a>
                        <a class="collapse-item" href="../proyek1/data_imunisasi.php">Data imunisasi</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Layanan Pemeriksaan</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="py-2 collapse-inner rounded">
                    <a class="collapse-item" href="../proyek1/pm_hamil.php">Pemeriksaan Ibu Hamil</a>
                    <a class="collapse-item" href="../proyek1/pm_nifas.php">Pemeriksaan Ibu Nifas</a>
                    <a class="collapse-item" href="../proyek1/pm_bayi.php">Pemeriksaan Bayi & Balita</a>
                    <a class="collapse-item" href="../proyek1/pm_imunisasi.php">Pemeriksaan imunisasi</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../proyek1/nomor antrian/panggilan-antrian/index.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Data Nomor Antrian</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            User
        </div>

        <li class="nav-item">
            <a class="nav-link" href="../proyek1/data_admin.php">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Data Admin</span></a>
        </li>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Setting</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Screen:</h6>
                    <a class="collapse-item" href="gnti_password.php">Ganti Password</a>
                    <div class="collapse-divider"></div>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

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
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 18px; font-family: math;">
                                    <?php echo $email ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../proyek1/dasboard admin/img/profile.jpeg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="gnti_password.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
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
                    <div class="layanan" style="background-color: #33b4ed; padding: 10px; width: 405px; border-radius: 8px; color: white; font-size: 25px; display: flex; align-items: center;">
                        <img src="../proyek1/images/icon hamil.png" class="img2">
                        <b>Pemeriksaan Ibu Hamil</b>
                    </div>
                    <br>

                    <div class="rectangle">
                    
                        <div class="content">
                            <p>
                            Pemeriksaan ibu hamil adalah serangkaian prosedur medis yang dilakukan untuk memantau kesehatan ibu hamil dan perkembangan janin selama masa kehamilan. 
                            Tujuan utama pemeriksaan ibu hamil adalah untuk memastikan bahwa kehamilan berjalan dengan baik, mendeteksi komplikasi potensial, dan memberikan perawatan 
                            yang tepat jika diperlukan.
                            </p>
                            <img clas="img3" src="../proyek1/images/ibu hamil.png">
                        </div>
                    </div>
                    <br><br>

                    <a name="kembali" href="dasboard.php">Kembali</a>

            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; Kelompok 7</span>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Ingin Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Silahkan klik tombol "Logout" jika anda ingin keluar dari akun anda.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../../proyek1/user/landingpage.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../proyek1/dasboard admin/vendor/jquery/jquery.min.js"></script>
    <script src="../proyek1/dasboard admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../proyek1/dasboard admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../proyek1/dasboard admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../proyek1/dasboard admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../proyek1/dasboard admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../proyek1/dasboard admin/js/demo/datatables-demo.js"></script>

</body>

</html>