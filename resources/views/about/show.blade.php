<<<<<<< Updated upstream:resources/views/about/tentangkami.blade.php
=======
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="{{url('assets/img/BoniagaLogo.jpg')}}">
  <title>Toko Boniaga</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/material-kit.css?v=3.1.0') }}" rel="stylesheet" />
  <style>
    .fade-in {
      animation: fadeIn 1s ease-in-out;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .img-hover-zoom {
      transition: transform 0.4s ease;
    }
    .img-hover-zoom:hover {
      transform: scale(1.05);
    }
    .content-box {
      background-color: #f9f9f9;
      border-radius: 12px;
      padding: 25px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }
    .btn-custom {
      margin-top: 20px;
    }
  </style>
</head>

<body>
  @include('home.navbar')
  
  <div class="container py-5 fade-in" style="margin-top: 80px;">
    <h1 class="text-center fw-bold mb-5 text-gradient text-primary">TOKO BONIAGA</h1>

    <div class="row mb-4">
        <div class="col-md-7 text-justify">
            <div class="content-box">
              <p>
                  Berdiri dengan nama awal Hajutta yang berarti "tas" dalam bahasa Batak, toko Boniaga didirikan pada tahun 2019. Bermula dari keinginan untuk menghadirkan souvenir berbahan ulos yang khas dan belum banyak tersedia di Toba, pemilik toko ini berniat mencoba peruntungan dan membuka usahanya karena pada saat itu juga terdapat informasi bahwa Pemerintah Kabupaten kawasan se-Tobasa sedang mengembangkan daerah sekitar sebagai destinasi wisata nasional. Melihat peluang tersebut, sang pemilik akhirnya mulai mengembangkan produk berbahan ulos sebagai ciri khas daerah.
              </p>
              <p>
                  Namun, di tahun yang sama, pandemi COVID-19 melanda. Akibat pembatasan sosial, sektor pesta dan kegiatan adat pun terhenti, sehingga banyak penjahit kehilangan pekerjaan. Menanggapi situasi ini, alih-alih menutup bisnisnya, toko Boniaga langsung bergerak cepat dan beralih memproduksi masker kain dan Alat Pelindung Diri (APD). Tak disangka, usaha mereka berbuah manis: toko ini mendapatkan proyek pembuatan 380.000 masker dari Kementerian Kesehatan dan akhirnya berhasil memproduksi hingga 500.000 masker dengan melibatkan banyak penjahit dari Toba hingga Tarutung.
              </p>
            </div>
        </div>
        <div class="col-md-5 text-center">
            <img src="{{ url('assets/img/foto-baju.jpg') }}" alt="Produk Boniaga" class="img-fluid rounded img-hover-zoom shadow">
        </div>
    </div>

    <div class="content-box text-justify">
        <p>
            Seiring berjalannya waktu, Boniaga tidak hanya berkembang dalam bidang penjualan produk-produk souvenir berbahan ulos, tetapi juga melahirkan Boniaga Modelling School, yang sukses mencetak putra-putri daerah untuk berkompetisi dalam berbagai acara fashion show. Banyak dari mereka telah memenangkan kejuaraan dan membawa pulang sertifikat penghargaan atas nama Boniaga. Selain itu, toko Boniaga sendiri pernah meraih penghargaan atas tingkat penjualan tertinggi dalam sebuah pameran nasional.
        </p>
    </div>

    <div class="row mt-4">
        <div class="col-md-5">
            <img src="{{ url('assets/img/maps-boniaga.png') }}" alt="Peta Lokasi" class="img-fluid rounded shadow img-hover-zoom">
        </div>
        <div class="col-md-7 text-justify">
            <div class="content-box">
              <p>
                  Terletak di daerah sigumpar, khususnya wilayah Sigumpar Barat, Kecamatan Sigumpar, Toba, Sumatera Utara. Toko ini berdiri di pinggiran jalan yang masih kental akan adat Batak. Toko ini juga beroperasi dari pukul 8 pagi hingga pukul 6 malam setiap hari.
              </p>
            </div>
        </div>
    </div>
  </div>

  @include('home.footer')

  <!-- Core JS Files -->
  <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/material-kit.min.js?v=3.0.4') }}" type="text/javascript"></script>
</body>
</html>
>>>>>>> Stashed changes:resources/views/about/show.blade.php
