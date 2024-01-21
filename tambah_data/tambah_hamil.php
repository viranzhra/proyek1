<?php
$conn = mysqli_connect('localhost', 'root', '', 'manajemen');

if(isset($_POST['tambah'])) {
    $tanggal_daftar = $_POST['tanggal_daftar'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $bb = $_POST['BB'];
    $tb = $_POST['TB'];
    $umur = $_POST['Umur'];
    $janin = $_POST['janin'];
    $uk = $_POST['uk'];
    $fundus = $_POST['fundus'];
    $keluhan = $_POST['keluhan'];
    $imunisasi = $_POST['imunisasi'];
    $analisa = $_POST['analisa'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];

    $sql = "INSERT INTO ibu_hamil VALUES('','$tanggal_daftar','$nama','$tanggal_lahir','$bb','$tb','$umur','$janin','$uk','$fundus','$keluhan','$imunisasi','$analisa','$alamat','$telp')";
    if ($conn->query($sql) === TRUE) {
        $berhasil = "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tambah Data Pasien</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="shortcut icon" type="icon" href="../../proyek1/user/images/logo klinik.png">

</head>
<body>
   
<div class="update-profile">



</div>

</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pasien</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="icon" href="../../proyek1/user/images/logo klinik.png">

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

</head>
<body>

<div class="update-profile">

<form action="tambah_hamil.php" method="post" enctype="multipart/form-data">
    <h2 style="background-color: #79b0d8;
    width: 400px;
    margin-left: 150px;">Tambah Data Ibu Hamil</h2>
      <div class="flex">
         <div class="inputBox">
            <span>Nama :</span>
            <input type="text" name="nama" class="box" placeholder="Masukkan nama">
            <span>Tanggal Datang :</span>
            <input type="date" name="tanggal_daftar" class="box">
            <span>Tanggal Lahir :</span>
            <input type="date" name="tanggal_lahir" class="box">
            <span>Berat Badan :</span>
            <input type="text" name="BB" placeholder="Masukkan berat badan (kg)" class="box">
            <span>Tinggi Badan :</span>
            <input type="text" name="TB" placeholder="Masukkan tinggi badan (cm)" class="box">
            <span>Umur :</span>
            <input type="number" name="Umur" class="box" placeholder="Masukkan angka">
            <span>Keluhan :</span>
            <textarea name="keluhan" placeholder="Ketik Keluhan pasien" class="box"></textarea>
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass">
            <span>U.K (mg) :</span>
            <input type="text" name="uk" placeholder="Isi sesuai pemeriksaan" class="box">
            <span>Tinggi Fundus :</span>
            <input type="text" name="fundus" placeholder="Isi sesuai pemeriksaan" class="box">
            <span>Letak Janin :</span>
            <input type="text" name="janin" placeholder="Isi sesuai pemeriksaan" class="box">
            <span>Imunisasi :</span>
            <input type="text" name="imunisasi" placeholder="Masukkan jenis imunisasi" class="box">
            <span>Analisa :</span>
            <input type="text" name="analisa" placeholder="Ketik analisa bidan" class="box">
            <span>Telepon :</span>
            <input type="number" name="telp" placeholder="Ketik nomor telepon" class="box">
            <span>Alamat :</span>
            <textarea name="alamat" placeholder="Ketik alamat lengkap" class="box"></textarea>
         </div>
      </div>
      <input type="submit" value="Simpan" name="tambah" class="btn">
      <a href="../../proyek1/data_hamil.php" class="delete-btn">Kembali</a>
   </form>

</div>

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var simpanButton = document.querySelector('[name="tambah"]');
        simpanButton.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent form submission

            Swal.fire({
                icon: "success",
                title: "Pendaftaran Berhasil!",
                text: "Terima kasih telah mendaftar.",
                showConfirmButton: false,
                timer: 3000, // Notifikasi akan hilang setelah 3 detik
                background: '#f6f6f6',
                iconColor: '#43a047',
                customClass: {
                    title: 'custom-title',
                    htmlContainer: 'custom-html-container',
                    confirmButton: 'custom-confirm-button',
                    popup: 'custom-popup'
                }
            }).then(function() {
                // Redirect to antrian.php after successful registration
                window.location.href = "../../proyek1/data_bayi.php";
            });
        });
    });
</script>

</body>
</html>
