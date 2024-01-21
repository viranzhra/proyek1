<?php
include("koneksi.php");

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM registrasi WHERE username = '$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Username sudah ada
        $digunakan = "Username sudah digunakan!";
    } else {
        // Username belum digunakan, lakukan registrasi
        $sql = "INSERT INTO registrasi (username,email,password) VALUES ('$username','$email','$password')";
        if ($conn->query($sql) === TRUE) {
            $berhasil = "Registrasi berhasil!";
        } else {
            $error = "Terjadi kesalahan saat registrasi: " . $conn->error;
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <link rel="shortcut icon" type="icon" href="../proyek1/user/images/logo klinik.png">
    <link rel="stylesheet" href="../proyek1/user/registrasi.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../proyek1/user/script.js"></script>
    <style>
        .swal2-popup {
            font-size: 12px;
        }
    </style>
</head>
    <body>
        <div class="form-container">
        <form method="POST" action="register.php">
            <div class="form-group">
            <h1>REGISTRASI</h1>
            <?php if (isset($berhasil)) {
                echo "<script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Registrasi Berhasil!',
                        text: 'Silahkan Login ke Akun Anda!',
                        timer: 3000,
                        showConfirmButton: false
                    });
                </script>";
            } ?>

            <?php if (isset($digunakan)) {
                echo "<script>
                    Swal.fire({
                        icon: 'warning',
                        title: 'Username sudah digunakan!',
                        text: 'Silahkan ganti username yang lain!',
                        timer: 3000,
                        showConfirmButton: false
                    });
                </script>";
            } ?>

            <?php if (isset($error)) {
                echo "<script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Mohon Maaf, Terjadi Kesalahan',
                        text: 'Ulangi registrasi anda!',
                        timer: 3000,
                        showConfirmButton: false
                    });
                </script>";
            } ?>
    
            <label for="username">Username: </label>
            <input type="text" id="username" placeholder="Masukkan username" name="username" required><br><br>
    
            <label for="email">Email : </label>
            <input type="text" id="email" placeholder="Masukkan email" name="email" required><br><br>
    
            <label for="password">Password : </label>
            <input type="password" id="password" placeholder="Masukkan Password" name="password" required><br>
            <div class="checkbox">
                <input type="checkbox" onclick="myFunction()">Tampilkan Password<br><br>
            </div>
            <br>
    
            <input type="submit" name="register" value="Register">
            <div class="login">
                <a name="kembali" href="../../proyek1/user/landingpage.php">Kembali</a>
            </div>
            <br><br>
            <div class="register">
                Sudah punya akun? <a href="../proyek1/dasboard klien/login.php">Login</a>
            </div>
            </div>
        </div>
        </form>
        </div>
    </body>
</html>
