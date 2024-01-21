
<?php
include("koneksi.php");

// Jika parameter id tersedia
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Edit data
    if (isset($_POST['edit'])) {
        // Mengambil data dari form
        $tanggal_daftar = $_POST['tanggal_daftar'];
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $ortu = $_POST['ortu'];
        $BB = $_POST['BB'];
        $TB = $_POST['TB'];
        $umur = $_POST['umur'];
        $pemeriksaan = $_POST['pemeriksaan'];
        $pengobatan = $_POST['pengobatan'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];

        if ($op == 'edit') {
            $id             = $_GET['id'];
            $sql1           = "select * from profil where id = '$id'";
            $q1             = mysqli_query($koneksi, $sql1);
            $r1             = mysqli_fetch_array($q1);
            $tanggal_daftar = $r1['tanggal_daftar'];
            $nama           = $r1['nama'];
            $tanggal_lahir  = $r1['tanggal_lahir'];
            $ortu           = $r1['ortu'];
            $BB             = $r1['BB'];
            $TB             = $r1['TB'];
            $umur           = $r1['umur'];
            $pemeriksaan    = $r1['pemeriksaan'];
            $pengobatan     = $r1['pengobatan'];
            $alamat         = $r1['alamat'];
            $telepon        = $r1['telepon'];
        
            if ($nama == '') {
                $error = "Data tidak ditemukan";
            }

        // Update data
        $sql1 = "UPDATE bayi_balita SET tanggal_daftar='$tanggal_daftar', nama='$nama', tanggal_lahir='$tanggal_lahir', ortu='$ortu', BB='$BB', TB='$TB', umur='$umur', `Hasil Pemeriksaan`='$pemeriksaan', Pengobatan='$pengobatan', alamat='$alamat', no_hp='$telepon' WHERE nama='$id'";

        if (mysqli_query($conn, $sql)) {
            echo "Data berhasil diupdate.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

    // Mengambil data untuk form edit
    $result = mysqli_query($conn, "SELECT * FROM bayi_balita WHERE nama='$id'");
    $data = mysqli_fetch_assoc($result);
}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Bayi dan Balita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: rgb(213, 241, 241);">


    <center>
    <fieldset style="background-color: rgb(161, 227, 230); border-radius: 10px; margin: 20px; width: 1000px; height: 750px; text-align: left;">
    <h1 style="text-align: center; font-family: 'sans-serif'; color: rgb(20, 102, 94);">Lengkapi Data Pasien!</h1>
    <hr>

    <form  style="margin-left: 20px; margin-right: 20px;" action="data_bayi.php" method="POST">


        </div>
        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal datang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <div class="col-sm-10">
                <input class="form-control" type="date" placeholder="Masukkan Tanggal" nama="tanggal_daftar" value="<?php echo $tanggal_daftar ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Masukkan Nama" name="nama" value="<?php echo $nama ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <div class="col-sm-10">
                <input class="form-control" type="date" placeholder="Masukkan Tanggal" name="tanggal_lahir" value="<?php echo $tanggal_lahir ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama orang tua &nbsp;&nbsp;&nbsp;:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Masukkan Nama" name="ortu" value="<?php echo $ortu ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="bb" class="col-sm-2 col-form-label">BB &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Masukkan BB" name="BB" value="<?php echo $BB ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tb" class="col-sm-2 col-form-label">TB &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" placeholder="Masukkan TB" name="TB" value="<?php echo $TB ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="umur" class="col-sm-2 col-form-label">Umur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" placeholder="Masukkan Angka" name="Umur" value="<?php echo $umur ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="hasil pemeriksaan" class="col-sm-2 col-form-label">Hasil Pemeriksaan :</label>
            <div class="col-sm-10">
                <textarea name="pesan" placeholder="Ketik hasil pemeriksaan" style="width: 795px;" name="pemeriksaan" value="<?php echo $pemeriksaan ?>"></textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pengobatan" class="col-sm-2 col-form-label">Pengobatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <div class="col-sm-10">
                <textarea name="pesan" placeholder="Ketik hasil pengobatan" style="width: 795px;" name="pengobatan" value="<?php echo $Pengobatan ?>"></textarea>
                </div>
        </div>
        <div class="mb-3 row">
            <label for="pengobatan" class="col-sm-2 col-form-label">Alamat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
            <div class="col-sm-10">
                <textarea name="pesan" placeholder="Ketik hasil pengobatan" style="width: 795px;" name="alamat" value="<?php echo $alamat ?>"></textarea>
        </div>
        </div>
        
        <div class="col-12">
            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
            <input style="float: right;" type="submit" name="kembali" value="Kembali" class="btn btn-primary" />
        </div>
    </form>
</fieldset>
</center>

</body>

</html>