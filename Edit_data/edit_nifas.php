<?php
$conn = mysqli_connect('localhost', 'root', '', 'manajemen');

// Edit data
if(isset($_GET['edit'])) {
    $edit_nama = $_GET['edit'];
    $data = mysqli_query($conn, "SELECT * FROM ibu_nifas WHERE nama = '$edit_nama'");
    if ($data) {
        $hasil = mysqli_fetch_assoc($data);
        $edit_nama = $hasil['nama'];
        $edit_tanggal_daftar = $hasil['tanggal_daftar'];
        $edit_tanggal_lahir = $hasil['tanggal_lahir'];
        $edit_BB = $hasil['BB'];
        $edit_TB = $hasil['TB'];
        $edit_umur = $hasil['Umur'];
        $edit_keluhan = $hasil['Keluhan'];
        $edit_kunjungan1 = $hasil['Kunjungan1'];
        $edit_kunjungan2 = $hasil['Kunjungan2'];
        $edit_kunjungan3 = $hasil['Kunjungan3'];
        $edit_alamat = $hasil['alamat'];
        $edit_telp = $hasil['no_hp'];
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Update data
if(isset($_POST['update'])) {
    $nama = $_POST['edit_nama'];
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

    $sql = "UPDATE ibu_nifas SET tanggal_daftar='$tanggal_daftar', nama='$nama_pasien', tanggal_lahir='$ttl', BB='$bb', TB='$tb', Umur='$umur', Keluhan='$keluhan', Kunjungan1='$kunjungan1', Kunjungan2='$kunjungan2', Kunjungan3='$kunjungan3', alamat='$alamat', no_hp='$telp' WHERE nama='$nama'";
    if ($conn->query($sql) === TRUE) {
        $berhasil = "Update data berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Data Pasien</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="shortcut icon" type="icon" href="../../proyek1/user/images/logo klinik.png">

</head>
<body>

   
<div class="update-profile">

   <form action="edit_nifas.php" method="post" enctype="multipart/form-data">
   <input type="hidden" name="edit_nama" value="<?php echo $edit_nama ?>">
    <h2 style="background-color: #79b0d8;
    width: 400px;
    margin-left: 150px;">Edit Data Ibu Nifas</h2>
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
            <input type="text" name="nama" class="box" placeholder="Masukkan nama" value="<?php echo isset($edit_nama) ? $edit_nama : '' ?>">
            <span>Tanggal Daftar :</span>
            <input type="date" name="tanggal_daftar" class="box" value="<?php echo isset($edit_tanggal_daftar) ? $edit_tanggal_daftar : '' ?>">
            <span>Tanggal Lahir :</span>
            <input type="date" name="tanggal_lahir" class="box" value="<?php echo isset($edit_tanggal_lahir) ? $edit_tanggal_lahir : '' ?>">
            <span>Berat Badan :</span>
            <input type="text" name="BB" placeholder="Masukkan berat badan (kg)" class="box" value="<?php echo isset($edit_BB) ? $edit_BB : '' ?>">
            <span>Tinggi Badan :</span>
            <input type="text" name="TB" placeholder="Masukkan tinggi badan (cm)" class="box" value="<?php echo isset($edit_TB) ? $edit_TB : '' ?>">
            <span>Keluhan :</span>
            <textarea name="keluhan" placeholder="Ketik Keluhan pasien" class="box"><?php echo isset($edit_keluhan) ? $edit_keluhan : '' ?></textarea>
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass">
            <span>Umur :</span>
            <input type="number" name="Umur" class="box" placeholder="Masukkan angka" value="<?php echo isset($edit_umur) ? $edit_umur : '' ?>">
            <span>Kunjungan 1 :</span>
            <input type="text" name="kunjungan1" placeholder="Ketik hasil pemeriksaan" class="box" value="<?php echo isset($edit_kunjungan1) ? $edit_kunjungan1 : '' ?>">
            <span>Kunjungan 2 :</span>
            <input type="text" name="kunjungan2" placeholder="Ketik hasil pemeriksaan" class="box" value="<?php echo isset($edit_kunjungan2) ? $edit_kunjungan2 : '' ?>">
            <span>Kunjungan 3 :</span>
            <input type="text" name="kunjungan3" placeholder="Ketik pengobatan" class="box" value="<?php echo isset($edit_kunjungan3) ? $edit_kunjungan3 : '' ?>">
            <span>Telepon :</span>
            <input type="number" name="telp" placeholder="Ketik nomor telepon" class="box" value="<?php echo isset($edit_telp) ? $edit_telp : '' ?>">
            <span>Alamat :</span>
            <textarea name="alamat" placeholder="Ketik alamat lengkap" class="box"><?php echo isset($edit_alamat) ? $edit_alamat : '' ?></textarea>
         </div>
      </div>
      
      <input type="submit" value="Simpan" name="update" class="btn">
      <a href="../../proyek1/data_nifas.php" class="delete-btn">Kembali</a>
   </form>

</div>

</body>
</html>
