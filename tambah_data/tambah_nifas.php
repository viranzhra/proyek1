<?php
$conn = mysqli_connect('localhost', 'root', '', 'manajemen');

if(isset($_POST['tambah'])) {
    $tanggal_daftar = $_POST['tanggal_daftar'];
    $nama_pasien = $_POST['nama'];
    $ttl = $_POST['tanggal_lahir'];
    $bb = $_POST['BB'];
    $tb = $_POST['TB'];
    $umur = $_POST['Umur'];
    $keluhan = $_POST['keluhan'];
    $kunjungan1 = $_POST['kunjungan1'];
    $kunjungan2 = $_POST['kunjungan2'];
    $kunjungan3 = $_POST['kunjungan3'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];

    $sql = "INSERT INTO ibu_nifas VALUES('','$tanggal_daftar','$nama_pasien','$ttl','$bb','$tb','$umur','$keluhan','$kunjungan1','$kunjungan2','$kunjungan3','$alamat','$telp')";
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

</head>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tambah Data Pasien</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../../proyek1/Login_Registrasi/css/style.css">
   <link rel="shortcut icon" type="icon" href="../../proyek1/user/images/logo klinik.png">

</head>
<body>

   
<div class="update-profile">

   <form action="tambah_nifas.php" method="post" enctype="multipart/form-data">
    <h2 style="background-color: #79b0d8;
    width: 400px;
    margin-left: 150px;">Tambah Data Ibu Nifas</h2>
     <br>
     <?php if (isset($berhasil)) {
                echo "<p id='alertSpan' style='color: white;
                background-color: #4ba64bd6;
                height: 25px;
                border-radius: 3px;
                text-align: center;
                width: 200px;
                margin-left: 250px;
                font-weight: bolder;
                font-family: monospace;
                font-size: 15px;
                padding: 3px;'>$berhasil</p>";
                echo "<script>
                                        setTimeout(function() {
                                            var alertSpan = document.getElementById('alertSpan');
                                            alertSpan.style.display = 'none';
                                        }, 2000); // Sembunyikan setelah 2 detik (2000 milidetik)
                                        </script>";
            } ?>
      <div class="flex">
         <div class="inputBox">
            <span>Nama :</span>
            <input type="text" name="nama" class="box" placeholder="Masukkan nama" >
            <span>Tanggal Daftar :</span>
            <input type="date" name="tanggal_daftar" class="box" >
            <span>Tanggal Lahir :</span>
            <input type="date" name="tanggal_lahir" class="box" >
            <span>Berat Badan :</span>
            <input type="text" name="BB" placeholder="Masukkan berat badan (kg)" class="box" >
            <span>Tinggi Badan :</span>
            <input type="text" name="TB" placeholder="Masukkan tinggi badan (cm)" class="box" >
            <span>Keluhan :</span>
            <textarea name="keluhan" placeholder="Ketik Keluhan pasien" class="box"></textarea>
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass">
            <span>Umur :</span>
            <input type="number" name="Umur" class="box" placeholder="Masukkan angka" >
            <span>Kunjungan 1 :</span>
            <input type="text" name="kunjungan1" placeholder="Ketik hasil pemeriksaan" class="box" >
            <span>Kunjungan 2 :</span>
            <input type="text" name="kunjungan2" placeholder="Ketik hasil pemeriksaan" class="box" >
            <span>Kunjungan 3 :</span>
            <input type="text" name="kunjungan3" placeholder="Ketik pengobatan" class="box" >
            <span>Telepon :</span>
            <input type="number" name="telp" placeholder="Ketik nomor telepon" class="box">
            <span>Alamat :</span>
            <textarea name="alamat" placeholder="Ketik alamat lengkap" class="box"></textarea>
         </div>
      </div>
      <input type="submit" value="Simpan" name="tambah" class="btn">
      <a href="../../proyek1/data_nifas.php" class="delete-btn">Kembali</a>
   </form>

</div>

</body>
</html>