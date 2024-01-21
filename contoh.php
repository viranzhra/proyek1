<?php
include("koneksi.php");
$id = $_GET["id_pasien"];

if (isset($_POST['simpan'])) {
    // Mengambil nilai-nilai yang diperbarui dari form
    $tanggal_daftar = $_POST['tanggal_daftar'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $ortu = $_POST['ortu'];
    $bb = $_POST['BB'];
    $tb = $_POST['TB'];
    $umur = $_POST['Umur'];
    $pemeriksaan = $_POST['pemeriksaan'];
    $pengobatan = $_POST['pengobatan'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE bayi_balita SET 
            tanggal_daftar='$tanggal_daftar',
            nama='$nama',
            tanggal_lahir='$tanggal_lahir',
            ortu='$ortu',
            BB='$bb',
            TB='$tb',
            Umur='$umur',
            Hasil pemeriksaan='$pemeriksaan',
            Pengobatan='$pengobatan',
            alamat='$alamat'
            WHERE id_pasien = $id";

$sql = "SELECT * FROM `bayi_balita` WHERE id_pasien = $id LIMIT 1";
$data = mysqli_query($conn, $sql);
$hasil = mysqli_fetch_assoc($data);


  if ($hasil) {
    header("Location: data_bayi.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
  
}




if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if ($op == 'delete') {
    $id = $_GET['id_pelanggan'];
    $sql1 = "delete from data_pesanan where id_pelanggan = '$id'";
    $q1 = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses = "Berhasil hapus data";
    } else {
        $error = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id = $_GET['id'];
    $sqldef = "select * from data_pesanan where no = '$id'";
    $q1 = mysqli_query($koneksi, $sqldef);
    $r1 = mysqli_fetch_array($q1);
    $no_pesanan = $r1['no_pesanan'];
    $nama_layanan = $r1['nama_layanan'];
    $tanggal_pemesanan = $r1['tanggal_pemesanan'];
    $qty = $r1['qty'];
    $dp = $r1['dp'];
    $total = $r1['total'];

    if ($id == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $no_pesanan = $_POST['no_pesanan'];
    $nama_layanan = $_POST['nama_layanan'];
    $tanggal_pemesanan = $_POST['tanggal_pemesanan'];
    $qty = $_POST['qty'];
    $dp = $_POST['dp'];
    $total = $_POST['total'];

    if ($nama_layanan && $tanggal_pemesanan && $qty && $dp && $total) {
        if ($op == 'edit') { //untuk update
            $sql1 = "update data_pesanan set  no_pesanan = '$no_pesanan', nama_layanan = '$nama_layanan',tanggal_pemesanan='$tanggal_pemesanan',qty='$qty',dp = '$dp ',total='$total' where no ='$id'";
            $q1 = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1 = "insert into data_pesanan(no_pesanan, nama_layanan,tanggal_pemesanan,qty,dp,total) values ('$no_pesanan'$nama_layanan', '$tanggal_pemesanan', '$qty', '$dp', '$total')";
            $q1 = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Berhasil memasukkan data baru";
            } else {
                $error = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}

?>

