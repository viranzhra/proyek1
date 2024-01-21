<?php
$conn = mysqli_connect('localhost', 'root', '', 'manajemen');

// Edit data
if(isset($_GET['edit'])) {
    $edit_nama = $_GET['edit'];
    $data = mysqli_query($conn, "SELECT * FROM imunisasi WHERE nama = '$edit_nama'");
    if ($data) {
        $hasil = mysqli_fetch_assoc($data);
        $edit_nama = $hasil['nama'];
        $edit_tanggal_daftar = $hasil['tanggal_datang'];
        $edit_tanggal_lahir = $hasil['tanggal_lahir'];
        $edit_ortu = $hasil['nama_ortu'];
        $edit_BB = $hasil['BB'];
        $edit_TB = $hasil['TB'];
        $edit_umur = $hasil['Umur'];
        $edit_pemeriksaan = $hasil['Hasil_pemeriksaan'];
        $edit_imunisasi = $hasil['jenis_imunisasi'];
        $edit_analisa = $hasil['Analisa'];
        $edit_tgl_kembali = $hasil['tanggal_kembali'];
        $edit_alamat = $hasil['alamat'];
        $edit_telp = $hasil['no_hp'];
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Update data
if(isset($_POST['update'])) {
    $nama = $_POST['edit_nama'];
    $nama_pasien = $_POST['nama'];
    $tanggal_daftar = $_POST['tanggal_daftar'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $ortu = $_POST['ortu'];
    $bb = $_POST['BB'];
    $tb = $_POST['TB'];
    $umur = $_POST['Umur'];
    $pemeriksaan = $_POST['pemeriksaan'];
    $imunisasi = $_POST['imunisasi'];
    $analisa = $_POST['analisa'];
    $tgl_kembali = $_POST['tanggal_kembali'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];

    $sql = "UPDATE imunisasi SET tanggal_datang='$tanggal_daftar', nama='$nama_pasien', tanggal_lahir='$tanggal_lahir', nama_ortu='$ortu', BB='$bb', TB='$tb', Umur='$umur', Hasil_pemeriksaan='$pemeriksaan', jenis_imunisasi='$imunisasi', Analisa='$analisa', tanggal_kembali='$tgl_kembali', alamat='$alamat', no_hp='$telp' WHERE nama='$nama'";
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

   <form action="edit_imunisasi.php" method="post" enctype="multipart/form-data">
   <input type="hidden" name="edit_nama" value="<?php echo $edit_nama ?>">
    <h2 style="background-color: #79b0d8;
    width: 400px;
    margin-left: 150px;">Edit Data Imunisasi</h2>
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
            <span>Nama Orang Tua :</span>
            <input type="text" name="ortu" class="box" placeholder="Masukkan nama orang tua" value="<?php echo isset($edit_ortu) ? $edit_ortu : '' ?>">
            <span>Berat Badan :</span>
            <input type="text" name="BB" placeholder="Masukkan berat badan (kg)" class="box" value="<?php echo isset($edit_BB) ? $edit_BB : '' ?>">
            <span>Tinggi Badan :</span>
            <input type="text" name="TB" placeholder="Masukkan tinggi badan (cm)" class="box" value="<?php echo isset($edit_TB) ? $edit_TB : '' ?>">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass">
            <span>Umur :</span>
            <input type="number" name="Umur" class="box" placeholder="Masukkan angka" value="<?php echo isset($edit_umur) ? $edit_umur : '' ?>">
            <span>Hasil pemeriksaan :</span>
            <input type="text" name="pemeriksaan" placeholder="Ketik hasil pemeriksaan" class="box" value="<?php echo isset($edit_pemeriksaan) ? $edit_pemeriksaan : '' ?>">
            <span>Jenis Imunisasi :</span>
            <input type="text" name="imunisasi" placeholder="Ketik pengobatan" class="box" value="<?php echo isset($edit_imunisasi) ? $edit_imunisasi : '' ?>">
            <span>Tanggal Kembali :</span>
            <input type="date" name="tanggal_kembali" placeholder="Ketik pengobatan" class="box" value="<?php echo isset($edit_tgl_kembali) ? $edit_tgl_kembali : '' ?>">
            <span>Telepon :</span>
            <input type="number" name="telp" placeholder="Ketik nomor telepon" class="box" value="<?php echo isset($edit_telp) ? $edit_telp : '' ?>">
            <span>Analisa :</span>
            <textarea name="analisa" placeholder="Ketik pengobatan" class="box"><?php echo isset($edit_analisa) ? $edit_analisa : '' ?></textarea>
         </div>
      </div>
      <span style="float: left;
    margin-left: 10px;">Alamat :</span>
            <textarea style="width: 644px;
    height: 52px;
    background-color: #eeeeee;
    border-radius: 4px;
    padding: 15px;
    font-size: 15px;" name="alamat" placeholder="Ketik alamat lengkap" class="box"><?php echo isset($edit_alamat) ? $edit_alamat : '' ?></textarea>
      <input type="submit" value="Simpan" name="update" class="btn">
      <a href="../../proyek1/data_imunisasi.php" class="delete-btn">Kembali</a>
   </form>

</div>

</body>
</html>
