<?php
$conn = mysqli_connect('localhost', 'root', '', 'manajemen');

// Edit data
if(isset($_GET['edit'])) {
    $edit_nama = $_GET['edit'];
    $data = mysqli_query($conn, "SELECT * FROM ibu_hamil WHERE nama = '$edit_nama'");
    if ($data) {
        $hasil = mysqli_fetch_assoc($data);
        $edit_daftar = $hasil['tanggal_datang'];
        $edit_nama = $hasil['nama'];
        $edit_ttl = $hasil['tanggal_lahir'];
        $edit_bb = $hasil['BB'];
        $edit_tb = $hasil['TB'];
        $edit_umur = $hasil['Umur'];
        $edit_janin = $hasil['Letak_Janin'];
        $edit_uk = $hasil['UK'];
        $edit_fundus = $hasil['Tinggi_Fundus'];
        $edit_keluhan = $hasil['Keluhan'];
        $edit_imunisasi = $hasil['Imunisasi'];
        $edit_analisa = $hasil['Analisa'];
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

    $sql = "UPDATE ibu_hamil SET tanggal_datang='$tanggal_daftar', nama='$nama_pasien', tanggal_lahir='$tanggal_lahir', BB='$bb', TB='$tb', Umur='$umur', Letak_Janin='$janin', UK='$uk', Tinggi_Fundus='$fundus', Keluhan='$keluhan', Imunisasi='$imunisasi', Analisa='$analisa', alamat='$alamat', no_hp='$telp' WHERE nama='$nama'";
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

   <form action="edit_hamil.php" method="post" enctype="multipart/form-data">
   <input type="hidden" name="edit_nama" value="<?php echo $edit_nama ?>">
    <h2 style="background-color: #79b0d8;
    width: 400px;
    margin-left: 150px;">Edit Data Ibu Hamil</h2>
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
            <span>Tanggal Datang :</span>
            <input type="date" name="tanggal_daftar" class="box" value="<?php echo isset($edit_daftar) ? $edit_daftar : '' ?>">
            <span>Tanggal Lahir :</span>
            <input type="date" name="tanggal_lahir" class="box" value="<?php echo isset($edit_ttl) ? $edit_ttl : '' ?>">
            <span>Berat Badan :</span>
            <input type="text" name="BB" placeholder="Masukkan berat badan (kg)" class="box" value="<?php echo isset($edit_bb) ? $edit_bb : '' ?>">
            <span>Tinggi Badan :</span>
            <input type="text" name="TB" placeholder="Masukkan tinggi badan (cm)" class="box" value="<?php echo isset($edit_tb) ? $edit_tb : '' ?>">
            <span>Umur :</span>
            <input type="number" name="Umur" class="box" placeholder="Masukkan angka" value="<?php echo isset($edit_umur) ? $edit_umur : '' ?>">
            <span>Keluhan :</span>
            <textarea name="keluhan" placeholder="Ketik Keluhan pasien" class="box"><?php echo isset($edit_keluhan) ? $edit_keluhan : '' ?></textarea>
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass">
            <span>U.K (mg) :</span>
            <input type="text" name="uk" placeholder="Isi sesuai pemeriksaan" class="box" value="<?php echo isset($edit_uk) ? $edit_uk : '' ?>">
            <span>Tinggi Fundus :</span>
            <input type="text" name="fundus" placeholder="Isi sesuai pemeriksaan" class="box" value="<?php echo isset($edit_fundus) ? $edit_fundus : '' ?>"> 
            <span>Letak Janin :</span>
            <input type="text" name="janin" placeholder="Isi sesuai pemeriksaan" class="box" value="<?php echo isset($edit_janin) ? $edit_janin : '' ?>">
            <span>Imunisasi :</span>
            <input type="text" name="imunisasi" placeholder="Masukkan jenis imunisasi" class="box" value="<?php echo isset($edit_imunisasi) ? $edit_imunisasi : '' ?>">
            <span>Analisa :</span>
            <input type="text" name="analisa" placeholder="Ketik analisa bidan" class="box" value="<?php echo isset($edit_analisa) ? $edit_analisa : '' ?>">
            <span>Telepon :</span>
            <input type="number" name="telp" placeholder="Ketik nomor telepon" class="box" value="<?php echo isset($edit_telp) ? $edit_telp : '' ?>">
            <span>Alamat :</span>
            <textarea name="alamat" placeholder="Ketik alamat lengkap" class="box"><?php echo isset($edit_alamat) ? $edit_alamat : '' ?></textarea>
         </div>
      </div>
      <input type="submit" value="Simpan" name="update" class="btn">
      <a href="../../proyek1/data_hamil.php" class="delete-btn">Kembali</a>
   </form>

</div>

</body>
</html>
