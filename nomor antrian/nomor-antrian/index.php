<!doctype html>
<html lang="en" class="h-100">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Aplikasi Antrian Berbasis Web">
  <meta name="author" content="Indra Styawantoro">

  <!-- Title -->
  <title>Nomor Antrian</title>

  <!-- Favicon icon -->
  <link rel="shortcut icon" type="icon" href="../../../proyek1/user/images/logo klinik.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">

  <!-- Custom Style -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

</head>

<body class="d-flex flex-column h-100" style="background-image: url(../assets/img/background_ant.jpg);
    background-size: cover;">
  <main class="flex-shrink-0">
  <div class="container pt-5">
      <!-- tampilkan pesan selamat datang -->
      <div class="alert alert-light d-flex align-items-center mb-5" role="alert">
        <i class="bi-info-circle text-success me-3 fs-3"></i>
        <div>
          Silahkan Langsung Cetak dan Simpan <strong>Kartu Antrian</strong>. Cetak Hanya Bisa dilakukan Sekali!
          <a href="../../../proyek1/dasboard klien/dasboard.php" style="    margin-left: 450px;
    text-decoration: none;
    background: #16b1a5;
    color: white;
    padding: 8px;
    border-radius: 5px;
    font-family: unset;
    font-weight: bold;">Dasboard</a>
        </div>
      </div>
    <div class="container pt-5">
      <div class="row justify-content-lg-center" style="position: relative;
    bottom: 50px;">
        <div class="col-lg-5 mb-4">
          <div class="px-4 py-3 mb-4 bg-white rounded-2 shadow-sm">
            <!-- judul halaman -->
            <div class="d-flex align-items-center me-md-auto">
              <i class="bi-people-fill text-success me-3 fs-3"></i>
              <h1 class="h5 pt-2">Nomor Antrian</h1>
            </div>
          </div>

          <div class="card border-0 shadow-sm">
            <div class="card-body text-center d-grid p-5">
              <div class="border border-success rounded-2 py-2 mb-5">
                <h3 class="pt-4">ANTRIAN</h3>
                <!-- menampilkan informasi jumlah antrian -->
                <h1 id="antrian" class="display-1 fw-bold text-success text-center lh-1 pb-2"></h1>
              </div>
              <!-- button pengambilan nomor antrian -->
              <a id="insert" href="javascript:void(0)" class="btn btn-success btn-block rounded-pill fs-5 px-5 py-4 mb-2">
                <i class="bi-person-plus fs-4 me-2"></i> Cetak
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer mt-auto py-4">
    <div class="container">
      <!-- copyright -->
      </div>
    </div>
  </footer>

  <!-- jQuery Core -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  <script type="text/javascript">
$(document).ready(function() {
  var isCetak = false; // Menandakan apakah sudah dicetak atau belum
  
  // Tampilkan jumlah antrian
  $('#antrian').load('get_antrian.php');

  // Proses insert data
  $('#insert').on('click', function() {
    if (!isCetak) { // Cek apakah belum dicetak
      $.ajax({
        type: 'POST',
        url: 'insert.php',
        success: function(result) {
          if (result === 'Sukses') {
            // Tampilkan jumlah antrian
            $('#antrian').load('get_antrian.php').fadeIn('slow');
            
            // Cetak halaman
            window.print();
            
            isCetak = true; // Setel isCetak menjadi true
          }
        },
      });
    }
  });
});

</script>

</body>

</html>