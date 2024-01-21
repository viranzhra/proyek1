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
    <style>
        div.table-responsive > div.dataTables_wrapper > div.row {
    margin: 0;
    overflow: auto;
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
                <a class="collapse-item" href="../proyek1/data_nifas.php">Data Ibu Nifas</a>
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
                    <div class="content">
                        <h1 class="h3 mb-2 text-gray-800">Data Imunisasi</h1>
                        <a style="margin-left: auto;" href="../../proyek1/tambah_data/tambah_imunisasi.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                                <?php 
                                    include("koneksi.php");

                                    // Delete data
                                    if(isset($_GET['delete'])) {
                                        $delete_nama = $_GET['delete'];

                                        if(isset($_GET['confirm'])) {
                                            $confirm = $_GET['confirm'];
                                            if($confirm === 'yes') {
                                                $sql = "DELETE FROM imunisasi WHERE nama = '$delete_nama'";
                                                if ($conn->query($sql) === TRUE) {
                                                    $berhasil = "Data berhasil dihapus!";
                                                    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
                                                    echo '<script>
                                                        Swal.fire({
                                                            icon: "success",
                                                            title: "Sukses!",
                                                            text: "'.$berhasil.'",
                                                            showConfirmButton: false,
                                                            timer: 2000
                                                        }).then(function() {
                                                            window.location.href = "data_imunisasi.php";
                                                        });
                                                    </script>';
                                                } else {
                                                    echo "Error: " . $sql . "<br>" . $conn->error;
                                                }
                                            } else {
                                                header("Location: data_imunisasi.php");
                                                exit();
                                            }
                                        }
                                    }
                                    ?>  

                            <!-- Tambahkan kode JavaScript di bagian head atau di bawahnya -->
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                            <script>
                            function konfirmasiHapus(nama) {
                                Swal.fire({
                                    title: "Konfirmasi",
                                    text: "Apakah Anda yakin ingin menghapus data " + nama + "?",
                                    icon: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#3085d6",
                                    cancelButtonColor: "#d33",
                                    confirmButtonText: "Ya",
                                    cancelButtonText: "Batal"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "data_imunisasi.php?delete=" + nama + "&confirm=yes";
                                    } else {
                                        window.location.href = "data_imunisasi.php?delete=" + nama + "&confirm=no";
                                    }
                                });
                            }
                            </script>
                        <div class="card-header py-3">
                        <h6 style="width: 200px;
                                position: absolute;
                                top: 25px;" class="m-0 font-weight-bold text-primary">Data Keseluruhan</h6>

                            <!-- Tombol Unduh Excel -->
                            <button style="float: right; background-color: #2fab39; border: none; padding: 4px; color: white; border-radius: 4px;" type="button" onclick="downloadExcel()"><i class="fas fa-download fa-sm text-white-50"></i> Unduh Data</button>
                            <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>

                            <script>
                                function downloadExcel() {
                                    // Mendapatkan elemen tabel
                                    var table = document.getElementById("dataTable");

                                    // Membuat objek WorkBook baru
                                    var wb = XLSX.utils.table_to_book(table);

                                    // Mengkonversi objek WorkBook menjadi file Excel
                                    var wbout = XLSX.write(wb, { bookType: 'xlsx', type: 'array' });

                                    // Membuat objek Blob dari data Excel
                                    var blob = new Blob([wbout], { type: 'application/octet-stream' });

                                    // Mendapatkan URL dari objek Blob
                                    var url = URL.createObjectURL(blob);

                                    // Mendapatkan nama file Excel
                                    var fileName = 'data_tabel.xlsx';

                                    // Membuat elemen <a> untuk mendownload file
                                    var a = document.createElement("a");
                                    a.href = url;
                                    a.download = fileName;

                                    // Menambahkan elemen <a> ke dalam dokumen
                                    document.body.appendChild(a);

                                    // Mengklik elemen <a> untuk memulai pengunduhan
                                    a.click();

                                    // Menghapus elemen <a> dari dokumen
                                    document.body.removeChild(a);

                                    // Membersihkan URL objek Blob
                                    URL.revokeObjectURL(url);
                                }
                            </script>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" style="width: 1505px;" cellspacing="0">    
                                <style>
                                        .swal2-popup {
                                            font-size: 12px;
                                        }
                                    </style>
                                <thead>
                                        <tr>
                                            <th class="thead-header">No.</th>
                                            <th class="thead-header">Tanggal datang</th>
                                            <th class="thead-header">Nama</th>
                                            <th class="thead-header">Tanggal lahir</th>
                                            <th class="thead-header">Nama Orang Tua</th>
                                            <th class="thead-header">BB</th>
                                            <th class="thead-header">TB</th>
                                            <th class="thead-header">Umur</th>
                                            <th class="thead-header">Hasil Pemeriksaan</th>
                                            <th class="thead-header">Jenis Imunisasi</th>
                                            <th class="thead-header">Analisa</th>
                                            <th class="thead-header">Tanggal Kembali</th>
                                            <th class="thead-header">Alamat</th>
                                            <th class="thead-header">Telepon</th>
                                            <th style-="width: 120px;" class="thead-header">Aksi</th>
                                            </tr>
                                    </thead>
        
                                    <tbody>
                                    <?php 
                                    include("koneksi.php");

                                    // 2. query
                                    $data=mysqli_query($conn, "SELECT * FROM imunisasi");
                                    $no=1;
                                    while($hasil=mysqli_fetch_array($data)){
                                        echo "<tr>";
                                        echo "<td>".$no."</td>";
                                        echo "<td>".$hasil['tanggal_datang']."</td>";
                                        echo "<td>".$hasil['nama']."</td>";
                                        echo "<td>".$hasil['tanggal_lahir']."</td>";
                                        echo "<td>".$hasil['nama_ortu']."</td>";
                                        echo "<td>".$hasil['BB']."</td>";
                                        echo "<td>".$hasil['TB']."</td>";
                                        echo "<td>".$hasil['Umur']."</td>";
                                        echo "<td>".$hasil['Hasil_pemeriksaan']."</td>";
                                        echo "<td>".$hasil['jenis_imunisasi']."</td>";
                                        echo "<td>".$hasil['Analisa']."</td>";
                                        echo "<td>".$hasil['tanggal_kembali']."</td>";
                                        echo "<td>".$hasil['alamat']."</td>";
                                        echo "<td>".$hasil['no_hp']."</td>";
                                        echo "<td><a style='background-color: #58d258; color: white; padding: 5px; border-radius: 3px;' href='../../proyek1/Edit_data/edit_imunisasi.php?edit=".$hasil['nama']."'>Edit</a>
                                                    <a style='background-color: #d25858; color: white; padding: 5px; border-radius: 3px;' 
                                                    href='javascript:void(0);' onclick='konfirmasiHapus(\"".$hasil['nama']."\")'>Delete</a></td>"; 
                                            echo "</tr>";

                                            $no++;
                                        }
                                        mysqli_free_result($data);

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