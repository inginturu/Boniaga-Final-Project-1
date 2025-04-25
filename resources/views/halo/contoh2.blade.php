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
            --primary-color: #c00000;
            --secondary-color: #8B4513;
            --accent-color: #D2691E;
            --light-accent: #F5DEB3;
            --dark-color: #5D4037;
            --text-light: #F9F9F9;
            --background-light: #f8f5f5;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            background-color: var(--background-light);
        }
        
        /* Header & Navigation - Sesuai gambar */
        .navbar {
            background-color: var(--primary-color);
            padding: 0;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: white !important;
            font-size: 1.4rem;
            padding: 0.5rem 1rem;
            margin: 0;
        }
        
        .navbar-brand-container {
            background-color: var(--primary-color);
            padding: 0;
            display: flex;
            align-items: center;
        }
        
        .navbar-brand img, .navbar-brand span {
            display: inline-block;
            vertical-align: middle;
        }
        
        .navbar-brand-circle {
            width: 32px;
            height: 32px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 8px;
        }
        
        .navbar-brand-circle span {
            color: var(--primary-color);
            font-weight: bold;
            font-size: 16px;
        }
        
        .nav-link {
            color: white !important;
            font-weight: 500;
            padding: 1rem;
            text-transform: uppercase;
            font-size: 0.9rem;
        }
        
        .nav-link.active, .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        /* Hero Section - Sesuai gambar */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/api/placeholder/1200/600') center/cover no-repeat;
            min-height: 70vh;
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
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .hero p {
            font-size: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 8px 20px;
            font-weight: 600;
            border-radius: 2px;
        }
        
        .btn-primary:hover {
            background-color: rgba(192, 0, 0, 0.9);
            border-color: rgba(192, 0, 0, 0.9);
        }
        
        /* Products Section - Sesuai gambar */
        .featured-products {
            padding: 2rem 0;
            background-color: white;
            border-radius: 10px;
            margin: -50px 15px 0;
            position: relative;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        }
        
        .section-title {
            padding: 1rem 1.5rem;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            border-bottom: 1px solid #eee;
        }
        
        .product-card {
            border: none;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 30px;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .product-img {
            height: 200px;
            object-fit: cover;
        }
        
        .product-title {
            font-weight: 600;
            font-size: 1rem;
            margin-top: 0.5rem;
        }
        
        .product-description {
            font-size: 0.8rem;
            color: #666;
        }
        
        .product-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 5px 10px;
            font-size: 0.8rem;
            border-radius: 2px;
        }
        
        /* Category Section - Sesuai gambar */
        .category-section {
            padding: 2rem 0;
            background-color: #333;
            color: white;
            margin-top: 2rem;
        }
        
        .category-card {
            background-color: white;
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 1rem;
        }
        
        .category-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .category-content {
            padding: 1rem;
            color: #333;
        }
        
        .category-title {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .category-description {
            font-size: 0.9rem;
            color: #666;
        }
        
        /* Footer */
        footer {
            background-color: #333;
            color: white;
            padding: 2rem 0 1rem;
        }
        
        .footer-heading {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
        
        footer ul {
            list-style: none;
            padding-left: 0;
        }
        
        footer ul li {
            margin-bottom: 8px;
        }
        
        footer a {
            color: #ddd;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s;
        }
        
        footer a:hover {
            color: white;
            text-decoration: none;
        }
        
        .social-link {
            display: inline-block;
            width: 32px;
            height: 32px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 32px;
            margin-right: 8px;
            transition: background-color 0.3s;
        }
        
        .social-link:hover {
            background-color: var(--primary-color);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 15px;
            margin-top: 20px;
            font-size: 0.8rem;
        }
        
        /* Navigation Bottom (Mobile) */
        .nav-bottom {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: white;
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        
        .nav-bottom-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: #666;
            font-size: 0.7rem;
        }
        
        .nav-bottom-item i {
            font-size: 1.2rem;
            margin-bottom: 3px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero p {
                font-size: 0.9rem;
            }
            
            .featured-products {
                margin: -30px 10px 0;
            }
            
            .section-title {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-0">
            <div class="navbar-brand-container">
                <a class="navbar-brand" href="#">
                    <div class="navbar-brand-circle">
                        <span>B</span>
                    </div>
                    BONIAGA
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#beranda">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produk">PRODUK KAMI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">TENTANG BONIAGA</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="beranda">
        <div class="container">
            <div class="hero-content">
                <h1>Toko Boniaga</h1>
                <p>Boniaga adalah toko dengan koleksi website Bataku yang akan membantu dan pelangan untuk mendapatkan informasi dan membeli produk.</p>
                <a href="#produk" class="btn btn-primary">Pesan Lebih Lanjut</a>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products" id="produk">
        <div class="container">
            <h2 class="section-title">Produk Unggulan Kami</h2>
            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-3 col-6">
                    <div class="card product-card">
                        <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Pakaian Adat">
                        <div class="card-body p-2">
                            <h5 class="product-title">Pakaian Adat</h5>
                            <p class="product-description">Produk pilihan ahlinya, yang dibuat dengan kualitas terbaik.</p>
                            <a href="#" class="btn product-btn w-100">Lihat Produk</a>
                        </div>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="col-md-3 col-6">
                    <div class="card product-card">
                        <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Ulos">
                        <div class="card-body p-2">
                            <h5 class="product-title">Ulos</h5>
                            <p class="product-description">Produk pilihan ahlinya, yang dibuat dengan kualitas terbaik.</p>
                            <a href="#" class="btn product-btn w-100">Lihat Produk</a>
                        </div>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="col-md-3 col-6">
                    <div class="card product-card">
                        <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Vest">
                        <div class="card-body p-2">
                            <h5 class="product-title">Vest</h5>
                            <p class="product-description">Produk pilihan ahlinya, yang dibuat dengan kualitas terbaik.</p>
                            <a href="#" class="btn product-btn w-100">Lihat Produk</a>
                        </div>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="col-md-3 col-6">
                    <div class="card product-card">
                        <img src="/api/placeholder/400/300" class="card-img-top product-img" alt="Tas Tenun">
                        <div class="card-body p-2">
                            <h5 class="product-title">Tas Tenun</h5>
                            <p class="product-description">Produk pilihan ahlinya, yang dibuat dengan kualitas terbaik.</p>
                            <a href="#" class="btn product-btn w-100">Lihat Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Section -->
    <section class="category-section" id="kategori">
        <div class="container">
            <h2 class="section-title text-white border-0">Kategori Produk</h2>
            <p class="text-light mb-4">Temukan banyak jenis ulos dari berbagai karya yang kami sediakan</p>
            
            <div class="row">
                <div class="col-md-8">
                    <div class="category-card">
                        <div class="category-content">
                            <h3 class="category-title">Ulos</h3>
                            <p class="category-description">
                                Kain tenun khas yang berasal dari suku Batak. Ulos mempunyai fungsi dan arti yang sangat penting. Dalam upacara adat seperti pernikahan, kematian, dan ritual lainnya, tak pernah terlewatkan tanpa ulos. Setiap jenis warna, kain ulos selalu memiliki dan arti pelindung dalam warna yaitu merah, hitam dan putih.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-img-container">
                        <img src="/api/placeholder/400/400" class="category-img" alt="Koleksi Ulos">
                    </div>
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-sm btn-outline-light">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-light">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="tentang">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>Tentang Boniaga</h3>
                            <p>Boniaga adalah satu marketplace yang menyediakan berbagai produk berkualitas dalam siaran pesan pemerintah untuk melahirkan WhatsApp kami menghadirkan produk mulai tekstil hingga fashion dengan harga terbaik untuk kebutuhan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
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

    <!-- Navigation Bottom (Mobile) -->
    <div class="nav-bottom d-md-none">
        <a href="#" class="nav-bottom-item">
            <i class="fas fa-home"></i>
            <span>Beranda</span>
        </a>
        <a href="#" class="nav-bottom-item">
            <i class="fas fa-search"></i>
            <span>Cari</span>
        </a>
        <a href="#" class="nav-bottom-item">
            <i class="fas fa-shopping-cart"></i>
            <span>Keranjang</span>
        </a>
        <a href="#" class="nav-bottom-item">
            <i class="fas fa-user"></i>
            <span>Akun</span>
        </a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>