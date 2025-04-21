<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boniaga - UMKM Produk Lokal Batak</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #8B4513;
            --accent-color: #D2691E;
            --light-accent: #F5DEB3;
            --dark-color: #5D4037;
            --text-light: #F9F9F9;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
        }
        
        /* Header & Navigation */
        .navbar {
            background-color: var(--dark-color);
            padding: 1rem 2rem;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--light-accent) !important;
            font-size: 1.8rem;
        }
        
        .nav-link {
            color: var(--text-light) !important;
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s;
        }
        
        .nav-link:hover {
            color: var(--light-accent) !important;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/api/placeholder/1200/600') center/cover no-repeat;
            min-height: 80vh;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            position: relative;
            padding: 2rem;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 12px 28px;
            font-weight: 600;
            border-radius: 50px;
        }
        
        .btn-primary:hover {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }
        
        /* Featured Products */
        .featured-products {
            padding: 5rem 0;
            background-color: #f8f9fa;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark-color);
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--accent-color);
        }
        
        .product-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 30px;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .product-img {
            height: 250px;
            object-fit: cover;
        }
        
        .product-title {
            font-weight: 600;
            font-size: 1.2rem;
            margin-top: 1rem;
        }
        
        .product-price {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        /* About Section */
        .about-section {
            padding: 5rem 0;
            background-color: white;
        }
        
        .about-img {
            max-height: 400px;
            object-fit: cover;
            border-radius: 15px;
        }
        
        /* Cultural Elements Section */
        .cultural-section {
            padding: 5rem 0;
            background-color: var(--light-accent);
            color: var(--dark-color);
        }
        
        .cultural-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }
        
        /* Testimonial Section */
        .testimonial-section {
            padding: 5rem 0;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/api/placeholder/1200/600') center/cover no-repeat;
            color: white;
        }
        
        .testimonial-card {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 2rem;
            margin: 1rem;
            backdrop-filter: blur(5px);
        }
        
        .testimonial-card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
        }
        
        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: var(--text-light);
            padding: 3rem 0 1rem;
        }
        
        .footer-heading {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: var(--light-accent);
        }
        
        footer ul {
            list-style: none;
            padding-left: 0;
        }
        
        footer ul li {
            margin-bottom: 10px;
        }
        
        footer a {
            color: var(--text-light);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        footer a:hover {
            color: var(--light-accent);
            text-decoration: none;
        }
        
        .social-link {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            transition: background-color 0.3s;
        }
        
        .social-link:hover {
            background-color: var(--accent-color);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 30px;
        }
        
        /* Ulos Pattern Elements */
        .ulos-pattern {
            height: 50px;
            background: repeating-linear-gradient(
                45deg,
                var(--primary-color),
                var(--primary-color) 10px,
                var(--accent-color) 10px,
                var(--accent-color) 20px
            );
            margin: 3rem 0;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Boniaga</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
                <div class="ms-3">
                    <a href="#" class="btn btn-sm btn-outline-light"><i class="fas fa-shopping-cart me-1"></i> Keranjang</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="beranda">
        <div class="container">
            <div class="hero-content">
                <h1>Warisan Budaya Batak dalam Sentuhan Modern</h1>
                <p class="lead">Temukan keindahan produk lokal Batak seperti Ulos, Jas, Tas dan berbagai kerajinan tangan asli yang menampilkan kekayaan budaya nusantara</p>
                <a href="#produk" class="btn btn-primary btn-lg">Lihat Koleksi</a>
            </div>
        </div>
    </section>

    <!-- Ulos Pattern Divider -->
    <div class="ulos-pattern"></div>

    <!-- Featured Products -->
    <section class="featured-products" id="produk">
        <div class="container">
            <div class="section-title">
                <h2>Produk Unggulan</h2>
            </div>
            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card product-card">
                        <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Ulos Batak">
                        <div class="card-body">
                            <h5 class="product-title">Ulos Batak Ragidup</h5>
                            <p class="card-text">Ulos tradisional berkualitas tinggi yang ditenun dengan teknik warisan turun-temurun.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">Rp 850.000</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card product-card">
                        <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Tas Anyaman">
                        <div class="card-body">
                            <h5 class="product-title">Tas Anyaman Batak</h5>
                            <p class="card-text">Tas tangan dengan motif khas Batak yang dibuat dengan teknik anyaman tradisional.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">Rp 450.000</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card product-card">
                        <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Jas Khas Batak">
                        <div class="card-body">
                            <h5 class="product-title">Jas Modern Motif Batak</h5>
                            <p class="card-text">Jas dengan sentuhan modern yang mengintegrasikan motif khas Batak yang elegan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">Rp 1.250.000</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card product-card">
                        <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Songket Batak">
                        <div class="card-body">
                            <h5 class="product-title">Songket Batak Premium</h5>
                            <p class="card-text">Songket mewah dengan benang emas yang menampilkan keanggunan motif tradisional Batak.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">Rp 1.750.000</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 5 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card product-card">
                        <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Dompet Ulos">
                        <div class="card-body">
                            <h5 class="product-title">Dompet Kombinasi Ulos</h5>
                            <p class="card-text">Dompet dengan desain modern yang dipadukan dengan motif ulos yang otentik.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">Rp 350.000</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product 6 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card product-card">
                        <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Aksesori Batak">
                        <div class="card-body">
                            <h5 class="product-title">Set Aksesori Batak</h5>
                            <p class="card-text">Kombinasi aksesori tradisional Batak dengan sentuhan modern untuk berbagai kesempatan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">Rp 275.000</span>
                                <a href="#" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="/products" class="btn btn-primary">Lihat Semua Produk</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="tentang">
        <div class="container">
            <div class="section-title">
                <h2>Tentang Boniaga</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="/api/placeholder/600/400" alt="Tentang Boniaga" class="img-fluid about-img">
                </div>
                <div class="col-lg-6">
                    <h3>Melestarikan Warisan Budaya Batak</h3>
                    <p>Boniaga didirikan dengan tekad untuk melestarikan dan memperkenalkan kekayaan budaya Batak melalui produk-produk berkualitas tinggi. Nama "Boniaga" berasal dari Bahasa Batak yang berarti "Berniaga" atau berdagang dengan kejujuran dan integritas.</p>
                    <p>Setiap produk kami dibuat oleh pengrajin lokal berbakat yang telah mewarisi keahlian turun-temurun dari generasi sebelumnya. Dengan fokus pada kualitas dan keaslian, kami berkomitmen untuk mendukung ekonomi lokal sambil membawa keindahan budaya Batak ke pasar yang lebih luas.</p>
                    <p>Kami percaya bahwa setiap produk memiliki cerita unik yang mencerminkan kekayaan budaya dan kreativitas masyarakat Batak. Melalui Boniaga, kami ingin menjembatani tradisi dan modernitas, melestarikan warisan sekaligus menciptakan peluang ekonomi bagi para pengrajin lokal.</p>
                    <a href="/about" class="btn btn-primary mt-3">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Cultural Elements Section -->
    <section class="cultural-section">
        <div class="container">
            <div class="section-title">
                <h2>Mengapa Memilih Produk Batak?</h2>
            </div>
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="cultural-icon">
                        <i class="fas fa-hands"></i>
                    </div>
                    <h4>Buatan Tangan</h4>
                    <p>Setiap produk dibuat dengan penuh ketelitian dan keterampilan tangan pengrajin lokal yang berpengalaman.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="cultural-icon">
                        <i class="fas fa-history"></i>
                    </div>
                    <h4>Kaya Sejarah</h4>
                    <p>Motif dan pola dalam produk kami mengandung makna filosofis dan narasi sejarah yang mendalam.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="cultural-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h4>Berkelanjutan</h4>
                    <p>Kami menggunakan bahan-bahan ramah lingkungan dan mendukung praktik produksi yang berkelanjutan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="section-title">
                <h2>Kata Pelanggan Kami</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <img src="/api/placeholder/80/80" alt="Testimonial" class="mx-auto d-block">
                        <h5 class="text-center">Maria Siahaan</h5>
                        <p class="text-center"><small>Jakarta</small></p>
                        <p>"Ulos yang saya beli dari Boniaga memiliki kualitas yang luar biasa. Motifnya otentik dan warnanya tidak luntur. Sangat memuaskan!"</p>
                        <div class="text-warning text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <img src="/api/placeholder/80/80" alt="Testimonial" class="mx-auto d-block">
                        <h5 class="text-center">Andi Sitorus</h5>
                        <p class="text-center"><small>Medan</small></p>
                        <p>"Saya sangat mengapresiasi dedikasi Boniaga dalam melestarikan budaya Batak. Jas dengan motif Batak yang saya beli selalu mendapat pujian saat saya kenakan."</p>
                        <div class="text-warning text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <img src="/api/placeholder/80/80" alt="Testimonial" class="mx-auto d-block">
                        <h5 class="text-center">Lisa Tambunan</h5>
                        <p class="text-center"><small>Bandung</small></p>
                        <p>"Tas dari Boniaga bukan hanya indah tapi juga sangat kokoh. Saya sudah menggunakannya selama 2 tahun dan masih terlihat seperti baru!"</p>
                        <div class="text-warning text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h4 class="footer-heading">Boniaga</h4>
                    <p>Melestarikan warisan budaya Batak melalui produk berkualitas yang menggabungkan tradisi dengan inovasi modern.</p>
                    <div class="mt-3">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <h4 class="footer-heading">Tautan Cepat</h4>
                    <ul>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Produk</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Cara Pemesanan</a></li>
                        <li><a href="#">Kebijakan Pengiriman</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h4 class="footer-heading">Hubungi Kami</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Jl. Sisingamangaraja No. 123, Medan, Sumatera Utara</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> +62 812 3456 7890</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> info@boniaga.id</li>
                    </ul>
                </div>
            </div>
            <div class="text-center copyright">
                <p>&copy; 2025 Boniaga. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === "#") return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Navbar color change on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(93, 64, 55, 0.95)';
                navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
            } else {
                navbar.style.backgroundColor = 'var(--dark-color)';
                navbar.style.boxShadow = 'none';
            }
        });
    </script>
</body>
</html>