<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toko Boniaga</title>

  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <!-- AOS Library -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
    }
    .page-header {
      position: relative;
      overflow: hidden;
    }
    .page-header::after {
      content: "";
      background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
      position: absolute;
      bottom: 0;
      width: 100%;
      height: 20%;
      z-index: 1;
    }
    .mask {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    /* Slow zoom effect background */
    .page-header {
      background-attachment: fixed;
      animation: zoom 20s ease-in-out infinite alternate;
    }
    @keyframes zoom {
      0% {
        background-size: 100%;
      }
      100% {
        background-size: 110%;
      }
    }
  </style>
</head>
=======

>>>>>>> Stashed changes

<body>

<header class="bg-gradient-dark">
  <div class="page-header min-vh-75" style="background-image: url('assets/img/boniaga.jpg'); background-size: cover; background-position: center; position: relative;">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container position-relative" style="z-index: 2;">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center mx-auto my-auto" data-aos="fade-up">
          <h1 class="text-white fw-bold mb-3" data-aos="fade-up" data-aos-delay="100">Toko Boniaga</h1>
          <p class="lead mb-4 text-white opacity-9" data-aos="fade-up" data-aos-delay="300">
            Menyediakan pakaian dan perhiasan khas dengan sentuhan budaya Batak.  
            Jelajahi koleksi etnik kami dan hubungi langsung via WhatsApp untuk pemesanan.
          </p>
          <a href="#produk" class="btn btn-light text-dark fw-semibold px-4 py-2" data-aos="zoom-in" data-aos-delay="500">Selengkapnya</a>
          <div class="d-flex justify-content-center mt-4" data-aos="fade-up" data-aos-delay="700">
<<<<<<< Updated upstream
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter text-lg text-white me-4"></i></a>
            <a href="https://wa.me/628xxxxxxxxxx" target="_blank"><i class="fab fa-whatsapp text-lg text-white"></i></a>
=======
          
            <a href="https://www.facebook.com/share/1BWRhYSca9/" target="_blank"><i class="fab fa-facebook text-lg text-white me-4"></i></a>
            <a href="https://www.instagram.com/boniaga_anugrah?igsh=ZGN6cWhzMmVzZG9m" target="_blank"><i class="fab fa-instagram text-lg text-white me-4"></i></a>
            <a href="https://wa.me/+6285213915630" target="_blank"><i class="fab fa-whatsapp text-lg text-white"></i></a>
          
>>>>>>> Stashed changes
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    once: true,
    duration: 1000,
  });
</script>

</body>
</html>
