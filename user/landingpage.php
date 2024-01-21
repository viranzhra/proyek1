<?php
$servername = "localhost";
$usernameDB = "root";
$passwordDB = "";
$dbname = "manajemen";
$conn = mysqli_connect($servername, $usernameDB, $passwordDB, $dbname);
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="landingpage.css">
    <link rel="shortcut icon" type="icon" href="../user/images/logo klinik.png">
    <title>Klinik Bidan Susan</title>

    <style>
        .overlap-group2 {
    align-items: flex-end;
    align-self: flex-end;
    background-color: #f2f2f2;
    border-radius: 19px;
    display: flex;
    gap: 28px;
    height: 60px;
    justify-content: flex-end;
    margin-right: 17px;
    margin-top: 26px;
    min-width: 335px;
    
}
    </style>

    <script>
        // Add your JavaScript code here
        // Example: Implement a slideshow for the images

        // Select the slideshow container
        const slideshow = document.querySelector('.overlap-group');
        // Select the slideshow images
        const images = slideshow.querySelectorAll('img');

        // Set the initial image index
        let currentImageIndex = 0;

        // Function to change the image
        function changeImage() {
            // Hide all images
            images.forEach(image => image.style.display = 'none');
            // Display the current image
            images[currentImageIndex].style.display = 'block';

            // Increment the image index
            currentImageIndex++;
            // Reset the index if it exceeds the number of images
            if (currentImageIndex >= images.length) {
                currentImageIndex = 0;
            }

            // Call the function again after a certain interval
            setTimeout(changeImage, 3000); // Change image every 3 seconds
        }

        // Start the slideshow
        changeImage();
    </script>
</head>
<body>
    <div class="desktop-8 screen">
        <div class="overlap-group2">
        <div class="login-pasien login poppins-bold-blue-violet-20px">
            <a href="../dasboard klien/login.php" style="position: absolute;
    background-color: #b1d4e5;
    padding: 15px;
    border-radius: 3px; left: 1060px;">LOGIN KLIEN</a>
        </div>
        <div class="login-admin login poppins-bold-blue-violet-20px">
            <a href="../admin.php" style="position: absolute;
    background-color: #b1d4e5;
    padding: 15px;
    border-radius: 3px; left: 1250px;">LOGIN ADMIN</a>
        </div>
        </div>
        <div class="overlap-group1">
        <div class="rectangle-55"></div>
        <div class="registrasi">
            <a name="register" href="../register.php">REGISTRASI</a>
        </div>
        </div>
        <div class="overlap-group">
        <div class="rectangle-69"></div>
        <div class="rectangle-70"></div>
            <img class="screenshot_2023-03-0" src="images/foto1.png" alt="Screenshot_2023-03-09_201423-removebg-preview 1"/>
        <div class="biodata-bidan-susan">
            BIODATA<br/>BIDAN SUSAN
        </div> 
        <p class="nama-susan-susilaw">

            Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Susan Susilawati, SH, S.ST, bdn<br>
            TTL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Subang, 02 Juni 1976<br>
            Pekerjaan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Bidan di Uptd Puskesmas Sindang<br>
            Pengalaman Pekerjaan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <br> 
            - Tahun 1996 - 1998 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: RSIA Sumber Kasih Cirebon <br>
            - Tahun 1998 - Desember 1998 : RS. Al-Ikhsan Bale Endah Bandung <br>
            - Tahun 1999 - 2002 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : RS. Pelabuhan Cirebon <br>
            - Tahun 2007 - 2018 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : RS. PMC Indramayu
        </p>

            <div class="rectangle-71"></div>
            <div class="klinik-bidan-susan-melayani">
                <b>KLINIK BIDAN SUSAN<br>MELAYANI</b>
            </div>
            
            <div class="ellipse-2"></div> 
            <div class="ellipse-3"></div> 
            <div class="ellipse-4"></div> 
            <div class="rectangle-72"></div> 
            <div class="rectangle-73"></div> 
            <div class="rectangle-74"></div> 
            <div class="rectangle-75"></div>
            <div class="rectangle-76"></div>
            <h1 class="title poppins-bold-black-50px">
                <span class="poppins-bold-black-50px">KLINIK </span>
                <span class="span1">BIDAN SUSAN</span>
            </h1>
            <div class="rectangle-77"></div>
            <div class="more-info poppins-bold-white-50px">MORE INFO :</div> 
            <div class="ellipse-5"></div>
                <img class="screenshot_2023-03-0-1" src="images/foto2.png" alt="Screenshot_2023-03-09_201423-removebg-preview 2"/>
            <p class="jl-pahlawan-04-sin" style="position: absolute; font-family: sans-serif;
    top: 1895px;">Jl.Pahlawan 4 no 20A rt 03 rw 09, desa Lemah Mekar kecamatan Indramayu</p>
            <div class="phone poppins-bold-white-50px" style="font-size: 30px;">0878 5766 1005 <p style="position: absolute;
    bottom: -250px;
    font-size: 15px;
    width: 800px;
    text-align: left;
    left: -100px;
    font-family: sans-serif;">Anda bisa klik pada icon, jika ingin melihat tentang lokasi dan bertanya-tanya. </p></div>
            <div class="pemeriksaan-ibu-hamil pemeriksaan-ibu poppins-bold-black- 20px"><b>Pemeriksaan Ibu Hamil</b></div>
            <p class="setiap-ibu-hamil-dis poppins-medium-black-20px">
            Setiap ibu hamil disarankan untuk melakukan kunjungan antenatal<br> yang komprehensif dan berkualitas minimal 4 kali,<br>
            yaitu 1 kali sebelum bulan ke 4 kehamilan, kemudian sekitar bulan ke 6 kehamilan<br>
            dan 2 kali kunjungan sekitar bulan ke 8 dan 9 kehamilan
            </p>
            <p class="pemeriksaan-fisik-ba poppins-medium-black-20px">
            Pemeriksaan fisik bayi baru lahir merupakan prosedur medis rutin yang penting dilakukan oleh setiap dokter atau bidan. Hal ini
            bertujuan untuk memastikan apakah bayi baru lahir dalam keadaan sehat atau memiliki kelainan tubuh maupun gangguan kesehatan.
            </p>
            <p class="imunisasi-anak-adala poppins-medium-black-20px">
            Imunisasi anak adalah pemberian vaksin kepada anak untuk mencegah penularan penyakit tertentu. Vaksin adalah zat yang berfungsi
            membantu membentuk kekebalan tubuh atau imunitas terhadap infeksi sejumlahpenyakit menular. Vaksin berasal dari kuman yang dilemahkan
            atau dimatikan.
            </p>
            <p class="pemeriksaan-yang-dil poppins-medium-black-20px">
            Pemeriksaan yang dilakukan dimulai dari wawancara kondisi ibu nifas secara umum, mengukur tekanan darah, suhu tubuh, pernapasan, dan
            nadi, memeriksa lokhia dan perdarahan, kondisi jalan lahir dan tanda
            infeksi, payudara, kontraksi rahim, memberikan Vitamin A,
            konseling, pelayanan kontrasepsi dan pemberian nasihat.
            </p>
            <div class="pemeriksaan-ibu-nifas pemeriksaan-ibu poppins-bold-black- 20px">
                <b>Pemeriksaan Ibu Nifas</b>
            </div>
            <div class="imunisasi poppins-bold-black-20px">
                Imunisasi
            </div>
            <div class="pemeriksaan-bayi-dan-ballita poppins-bold-black-20px">
                Pemeriksaan Bayi <br/>dan Balita
            </div>
            <div class="ellipse-6"></div>
            <div class="ellipse-7"></div> 
                <a href="https://maps.app.goo.gl/GgpGYf1SucgZFKGJ6"><img class="icon-destination" src="images/icon1.png" alt="icon maps"/></a> 
                <a href="https://wa.me/6287857661005"><img class="icon-whatsapp" src="images/icon2.png" alt="icon whatsapp"/></a>

            </div>
        </div>
    </body>
</html>