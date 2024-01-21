<?php

    include ('koneksi.php');

    session_start();

    $username = $_SESSION['email'];

    $sql = "SELECT * from registrasi WHERE email = '$username'";
    $hasil = $conn->query($sql);
    if ($hasil->num_rows > 0) {
    $row = $hasil->fetch_assoc();
    $email = $row['email'];

if(!isset($_SESSION['id'])){
    header('Location: login.php');
}
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
    <link rel="shortcut icon" type="icon" href="../../proyek1/user/images/logo klinik.png">

    <title>KLINIK BIDAN SUSAN</title>

    <!-- Custom fonts for this template -->
    <link href="../../proyek1/dasboard admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../proyek1/dasboard admin/css/sb-admin-2.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this page -->
    <link href="../../proyek1/dasboard admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">

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
            <div class="sidebar-brand-text mx-3">Bidan Susan</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
                <a class="nav-link" href="../../proyek1/dasboard klien/dasboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Layanan Klien
        </div>

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
                <a class="collapse-item" href="../../proyek1/dasboard klien/pm_hamil.php">Pemeriksaan Ibu Hamil</a>
                    <a class="collapse-item" href="../../proyek1/dasboard klien/pm_nifas.php">Pemeriksaan Ibu Nifas</a>
                    <a class="collapse-item" href="../../proyek1/dasboard klien/pm_bayi.php">Pemeriksaan Bayi & Balita</a>
                    <a class="collapse-item" href="../../proyek1/dasboard klien/pm_imunisasi.php">Pemeriksaan imunisasi</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
        <a class="nav-link" href="../../proyek1/nomor antrian/panggilan-antrian/data_klien.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Data Nomor Antrian</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            User
        </div>

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
                    <a class="collapse-item" href="../../proyek1/password_klien.php">Ganti Password</a>
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

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 18px; font-family: math;">
                                <?php echo $email ?>
                            </span>
                                <img class="img-profile rounded-circle"
                                    src="../../proyek1/dasboard admin/img/profile.jpeg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="../../proyek1/password_klien.php">
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">DASHBOARD KLIEN</h1>
                    </div>

                    <div class="rectangle">
                    <time style="background-color: #87aec3; width: 180px; margin-top: 15px; margin-left: 20px; padding-left: 10px; padding-right: 10px; border-radius: 5px; color: white;" id="currentDate"></time>
                        <div class="content">
                        <h2>
                            <span style="color: #485b92; font-family: cursive;">"Klinik Bidan Susan" </span><br>SIAP MENERIMA PASIEN</h2>

                            <img clas="img" src="../../proyek1/images/bidan susan.png">
                        </div>
                    </div>
                    <script>
                        const currentDate = new Date();
                        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                        document.getElementById('currentDate').textContent = currentDate.toLocaleDateString('id-ID', options);
                    </script>
                    
                    <br><br>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Keseluruhan Pasien</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                                //koneksi ke basis data
                                                include ("koneksi.php");

                                                //query untuk mengambil total jumlah pengguna terdaftar
                                                $query = "SELECT SUM(total_data) as total FROM (
                                                    SELECT COUNT(*) as total_data FROM bayi_balita
                                                    UNION ALL
                                                    SELECT COUNT(*) as total_data FROM ibu_hamil
                                                    UNION ALL
                                                    SELECT COUNT(*) as total_data FROM ibu_nifas
                                                    UNION ALL
                                                    SELECT COUNT(*) as total_data FROM imunisasi
                                                ) as total";

                                                //eksekusi query dan simpan hasilnya di variabel $result
                                                $result = mysqli_query($conn, $query);

                                                //ambil nilai hasil query dan simpan ke variabel $total_pengguna
                                                $data = mysqli_fetch_assoc($result);
                                                $total_data = $data['total'];

                                                //tutup koneksi ke basis data
                                                mysqli_close($conn);

                                                echo $total_data; ?></h2>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jenis Layanan Pemeriksaan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">4
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Admin
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                    <?php
                                                //koneksi ke basis data
                                                include ("koneksi.php");

                                                //query untuk mengambil total jumlah pengguna terdaftar
                                                $query = "SELECT COUNT(*) AS total_admin FROM admin";

                                                //eksekusi query dan simpan hasilnya di variabel $result
                                                $result = mysqli_query($conn, $query);

                                                //ambil nilai hasil query dan simpan ke variabel $total_admin
                                                $data = mysqli_fetch_assoc($result);
                                                $total_data = $data['total_admin'];

                                                //tutup koneksi ke basis data
                                                mysqli_close($conn);

                                                echo $total_data; ?>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Data Nomor Antrian</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            // pengecekan ajax request untuk mencegah direct access file, agar file tidak bisa diakses secara langsung dari browser
                                            // jika ada ajax request
                                            // panggil file "database.php" untuk koneksi ke database
                                            $conn = mysqli_connect('localhost', 'root', '', 'manajemen');

                                            // ambil tanggal sekarang
                                            $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

                                            // sql statement untuk menampilkan jumlah data dari tabel "tbl_antrian" berdasarkan "tanggal"
                                            $query = "SELECT count(id) as jumlah FROM tbl_antrian 
                                                                            WHERE tanggal='$tanggal'";

                                            //eksekusi query dan simpan hasilnya di variabel $result
                                            $result = mysqli_query($conn, $query);
                                                                            
                                            // ambil data hasil query
                                            $data = mysqli_fetch_assoc($result);
                                            // buat variabel untuk menampilkan data
                                            $jumlah_antrian = $data['jumlah'];

                                            //tutup koneksi ke basis data
                                            mysqli_close($conn);

                                            // tampilkan data
                                            echo $jumlah_antrian;
                                            
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                    <!-- <a class="btn btn-primary" href="../../proyek1/user/landingpage.php">Logout</a> -->
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../proyek1/dasboard admin/vendor/jquery/jquery.min.js"></script>
    <script src="../../proyek1/dasboard admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../proyek1/dasboard admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../proyek1/dasboard admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../proyek1/dasboard admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../proyek1/dasboard admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../proyek1/dasboard admin/js/demo/datatables-demo.js"></script>


    
</body>
</html>