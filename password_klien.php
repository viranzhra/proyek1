<?php

    include ('koneksi.php');

    session_start();

    $username = $_SESSION['email'];

    $sql = "SELECT * from registrasi WHERE email = '$username'";
    $hasil = $conn->query($sql);
    if ($hasil->num_rows > 0) {
    $row = $hasil->fetch_assoc();
    $email = $row['email'];
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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        
        form {
            margin-top: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
        }
        
        input[type="email"],
        input[type="password"] {
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

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
                <a class="nav-link" href="../proyek1/dasboard klien/dasboard.php">
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
                    <a class="collapse-item" href="../proyek1/password_klien.php">Ganti Password</a>
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
                <?php

                // Memeriksa apakah formulir telah dikirim
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Mengambil data yang dikirimkan oleh pengguna
                    $email = $_POST["email"];
                    $newPassword = $_POST["new_password"];

                    // Menghubungkan ke basis data dan melakukan kueri untuk memeriksa keberadaan email
                    $koneksi = mysqli_connect('localhost', 'root', '', 'manajemen');

                    // Memeriksa koneksi database
                    if (mysqli_connect_errno()) {
                        die("Koneksi database gagal: " . mysqli_connect_error());
                    }

                    // Melakukan kueri untuk memeriksa keberadaan email dalam tabel pengguna
                    $query = "SELECT * FROM registrasi WHERE email = '$email'";
                    $result = mysqli_query($koneksi, $query);

                    // Memeriksa apakah email ditemukan dalam tabel pengguna
                    if (mysqli_num_rows($result) == 1) {
                        // Email ditemukan, lakukan langkah-langkah untuk mengganti password
                        // Melakukan kueri untuk mengupdate password dalam tabel pengguna
                        $updateQuery = "UPDATE registrasi SET password = '$newPassword' WHERE email = '$email'";
                        $updateResult = mysqli_query($koneksi, $updateQuery);

                        // Memeriksa apakah penggantian password berhasil
                        if ($updateResult) {
                            // Tampilkan pesan kepada pengguna bahwa password telah berhasil diganti
                            $berhasil = "Password berhasil diganti.";
                            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
                            echo '<script>
                                Swal.fire({
                                    icon: "success",
                                    title: "Sukses!",
                                    text: "'.$berhasil.'",
                                    showConfirmButton: false,
                                    timer: 2000
                                }).then(function() {
                                    window.location.href = "password_klien.php";
                                });
                            </script>';
                        } else {
                            // Jika terjadi kesalahan dalam mengupdate password
                            $error = "Terjadi kesalahan. Password gagal diganti.";
                            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
                            echo '<script>
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: "'.$error.'",
                                    showConfirmButton: false,
                                    timer: 2000
                                }).then(function() {
                                    window.location.href = "password_klien.php";
                                });
                            </script>';
                        }
                    } else {
                        // Email tidak ditemukan dalam tabel pengguna
                        $gagal = "Email tidak terdaftar dalam sistem kami.";
                        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
                        echo '<script>
                            Swal.fire({
                                icon: "warning",
                                title: "Oops...",
                                text: "'.$gagal.'",
                                showConfirmButton: false,
                                timer: 2000
                            }).then(function() {
                                window.location.href = "password_klien.php";
                            });
                        </script>';
                    }

                    // Menutup koneksi database
                    mysqli_close($koneksi);
                }
                ?>
                <!-- End of Topbar -->
                <div class="container" style=" width: 400px;
                            margin: 0 auto;
                            padding: 20px;
                            background-color: #d5ecfd;
                            border: 1px solid #ccc;
                            border-radius: 4px;
                            margin-top: 80px;">
                    <form style="margin-top: 20px;" method="POST" action="password_klien.php">
                        <h2 style="width: 700px;
                            margin-left: -75px;
                            font-weight: bold;
                            font-size: 28px;">Ganti Password</h2>
                        <hr>
                            <label for="email">Email:</label>
                            <input type="email" name="email" required placeholder="Masukkan email"><br><br>
                            
                            <label for="new_password">Password Baru:</label>
                            <input type="password" name="new_password" required placeholder="Masukkan password baru"><br><br>
                            
                            <input type="submit" value="Ganti Password">
                        </form>
                    </div>

                
            <!-- Footer -->
            <footer class="sticky-footer" style="margin-top: 150px;">
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