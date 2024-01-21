<?php
$conn = mysqli_connect('localhost', 'root', '', 'manajemen');

if(isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $ttl = $_POST['ttl'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO admin VALUES('','$nama','$username','$ttl','$telp','$alamat')";
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
   <title>Tambah Data</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="update-profile">

   <form action="tambah_admin.php" method="post" enctype="multipart/form-data">
    <h2 style="background-color: #79b0d8;
    width: 400px;
    margin-left: 150px;">Tambah Data Admin</h2>
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
            <input type="text" name="nama" class="box" placeholder="Masukkan nama">
            <span>Tanggal Datang :</span>
            <input type="date" name="tanggal_daftar" class="box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass">
            <span>Telepon :</span>
            <input type="number" name="telp" placeholder="Ketik nomor telepon" class="box">
            <span>Alamat :</span>
            <textarea name="alamat" placeholder="Ketik alamat lengkap" class="box"></textarea>
         </div>
      </div>
      <input type="submit" value="Simpan" name="tambah" class="btn">
      <a href="../../proyek1/data_admin.php" class="delete-btn">Kembali</a>
   </form>

</div>

</body>
</html>