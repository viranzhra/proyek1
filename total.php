<?php
//koneksi ke basis data
include ("koneksi.php");

//query untuk mengambil total jumlah pengguna terdaftar
$query = "SELECT SUM(total_data) as total FROM (
    SELECT COUNT(*) as total_data FROM bayi_balita
    UNION ALL
    SELECT COUNT(*) as total_data FROM ibu_hamil
    UNION ALL
    SELECT COUNT(*) as total_data FROM ibu_nifas
    UNION ALL
    SELECT COUNT(*) as total_data FROM imunisasi
) as total";

//eksekusi query dan simpan hasilnya di variabel $result
$result = mysqli_query($conn, $query);

//ambil nilai hasil query dan simpan ke variabel $total_pengguna
$data = mysqli_fetch_assoc($result);
$total_data = $data['total'];

//tutup koneksi ke basis data
mysqli_close($conn);

?>

<h2>Total pengguna terdaftar: <?php echo $total_data; ?></h2>


