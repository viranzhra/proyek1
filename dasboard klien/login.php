
<!DOCTYPE html>
<html>

<head>
    <title>Login Klien</title>
    <link rel="shortcut icon" type="icon" href="../../proyek1/user/images/logo klinik.png">
    <link rel="stylesheet" href="../../proyek1/user/login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../proyek1/user/script.js"></script>
    <style>
        .swal2-popup {
            font-size: 12px;
        }
    </style>
</head>

    <body>

    <?php
// untuk menyimpan informasi pengguna (user)
session_start();

// Koneksi ke database
include("koneksi.php");

// Cek apakah form login sudah disubmit
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mencari data pengguna dengan username dan password tertentu
    $query = "SELECT * FROM registrasi WHERE email='$email' AND password='$password'";
    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Cek apakah query berhasil dijalankan
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    // Cek apakah data ditemukan
    if(mysqli_num_rows($result) == 1) {
        // Data ditemukan, simpan informasi pengguna ke dalam session
        $data = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $data['id'];
        $_SESSION['email'] = $data['email'];

        // Redirect ke halaman dashboard atau halaman yang diinginkan
        header("Location: dasboard.php");
        exit(); // Hentikan eksekusi kode setelah melakukan redirect
    } else {
        // Login gagal, tampilkan pesan kesalahan
        $error = "Username atau password salah!";
    }
}
?>
        <div class="form-container">
            <form method="POST" action="login.php">
            <div class="form-group">
            <h1>Login Klien</h1>
            <?php if (isset($error)) {
                echo "<script>
                    Swal.fire({
                        icon: 'warning',
                        title: 'Username atau Password Salah!',
                        text: 'Silahkan Login Kembali!',
                        timer: 3000,
                        showConfirmButton: false
                    });
                </script>";
            } ?>
    
            <label for="email">Email : </label>
            <input type="text" id="email" placeholder="Masukkan email" name="email" required><br><br>
    
            <label for="password">Password : </label>
    
            <input type="password" id="password" placeholder="Masukkan Password" name="password" required><br>
            <div class="checkbox">
                <input type="checkbox" onclick="myFunction()">Tampilkan Password<br><br>
            </div>
            <br>
    
            <button type="submit" name="submit">Login</button>
            <a name="kembali" href="../../proyek1/user/landingpage.php">Kembali</a>

            <br><br>
            
            <div class="register">
                Belum punya akun? <a href="../../proyek1/register.php">Registrasi</a>
            </div>
            </div>
        </form>
        </div>
    </body>
</html>