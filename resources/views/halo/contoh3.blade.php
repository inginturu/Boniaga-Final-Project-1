<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boniaga - Produk Tradisional Batak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Custom styles to supplement Bootstrap */
        :root {
            --primary-color: #dc3545;
            --secondary-color: #343a40;
        }
        
        .bg-boniaga {
            background-color: #dc3545;
        }
        
        .btn-boniaga {
            background-color: #007bff;
            color: white;
            border: none;
        }
        
        .btn-outline-boniaga {
            color: #dc3545;
            border-color: #dc3545;
        }
        
        .btn-outline-boniaga:hover {
            background-color: #dc3545;
            color: white;
        }
        
        /* Hero section with parallax effect */
        .hero-section {
            position: relative;
            height: 500px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/api/placeholder/1200/800');
            background-size: cover;
            background-position: center;
            z-index: -1;
            will-change: transform; /* Optimize for animations */
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            padding: 0 15px;
        }
        
        /* Product hover effects */
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        /* Animation for CTA buttons */
        .btn-outline-boniaga {
            transition: all 0.3s ease;
        }
        
        .btn-animated:hover {
            transform: scale(1.05);
        }
        
        .footer {
            background-color: #000;
            color: white;
            padding: 30px 0;
        }
        
        .logo {
            width: 60px;
            height: auto;
        }
        
        /* Animation for section entrances */
        .fade-in-section {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        
        .fade-in-section.is-visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Product image zoom effect */
        .card-img-container {
            overflow: hidden;
        }
        
        .card-img-top {
            transition: transform 0.5s ease;
        }
        
        .card:hover .card-img-top {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <!-- Navbar (Image 4) -->
    <nav class="navbar navbar-expand-lg bg-boniaga navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/api/placeholder/60/60" alt="Boniaga Logo" class="logo">
                Boniaga
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Github</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Parallax (Image 4) -->
    <section class="hero-section">
        <div class="hero-background" id="parallax-bg"></div>
        <div class="hero-content container">
            <h1 class="display-4 mb-4">Toko Boniaga</h1>
            <p class="lead mb-5">Menyediakan pakaian dan perhiasan khas dengan sentuhan budaya Batak. Jelajahi koleksi etnik kami dan hubungi langsung via WhatsApp untuk pemesanan.</p>
            <a href="#" class="btn btn-light px-4 py-2 btn-animated">Selengkapnya</a>
        </div>
    </section>

    <!-- Featured Products (Image 4) -->
    <section class="py-5 fade-in-section">
        <div class="container">
            <h2 class="text-center mb-5">Produk Unggulan</h2>
            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img-container">
                            <img src="/api/placeholder/400/300" class="card-img-top" alt="Ulos Batak">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Ulos Batak Ragidup</h5>
                            <p class="card-text">Ulos tradisional berkualitas tinggi yang ditenun dengan teknik warisan turun-temurun.</p>
                            <p class="fw-bold">Rp 850.000</p>
                            <a href="#" class="btn btn-outline-boniaga btn-animated">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img-container">
                            <img src="/api/placeholder/400/300" class="card-img-top" alt="Tas Anyaman">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tas Anyaman Batak</h5>
                            <p class="card-text">Tas tangan dengan motif khas Batak yang dibuat dengan teknik anyaman tradisional.</p>
                            <p class="fw-bold">Rp 450.000</p>
                            <a href="#" class="btn btn-outline-boniaga btn-animated">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img-container">
                            <img src="/api/placeholder/400/300" class="card-img-top" alt="Jas Khas Batak">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Jas Modern Motif Batak</h5>
                            <p class="card-text">Jas dengan sentuhan modern yang mengintegrasikan motif khas Batak yang elegan.</p>
                            <p class="fw-bold">Rp 1.250.000</p>
                            <a href="#" class="btn btn-outline-boniaga btn-animated">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Listings with Details (Image 3) -->
    <section class="py-5 bg-light fade-in-section">
        <div class="container">
            <div class="row">
                <!-- Product Row 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img-container">
                            <img src="/api/placeholder/400/300" class="card-img-top" alt="Ulos Batak">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Ulos Batak Ragidup</h5>
                            <p class="card-text">Ulos tradisional berkualitas tinggi yang ditenun dengan teknik warisan turun-temurun.</p>
                            <p class="fw-bold">Rp 850.000</p>
                            <a href="#" class="btn btn-outline-boniaga btn-animated">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img-container">
                            <img src="/api/placeholder/400/300" class="card-img-top" alt="Tas Anyaman">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tas Anyaman Batak</h5>
                            <p class="card-text">Tas tangan dengan motif khas Batak yang dibuat dengan teknik anyaman tradisional.</p>
                            <p class="fw-bold">Rp 450.000</p>
                            <a href="#" class="btn btn-outline-boniaga btn-animated">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img-container">
                            <img src="/api/placeholder/400/300" class="card-img-top" alt="Jas Khas Batak">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Jas Modern Motif Batak</h5>
                            <p class="card-text">Jas dengan sentuhan modern yang mengintegrasikan motif khas Batak yang elegan.</p>
                            <p class="fw-bold">Rp 1.250.000</p>
                            <a href="#" class="btn btn-outline-boniaga btn-animated">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Product Row 2 -->
            <div class="row mt-4">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img-container">
                            <img src="/api/placeholder/400/300" class="card-img-top" alt="Songket Batak">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Songket Batak</h5>
                            <p class="card-text">Songket tradisional dengan motif khas Batak.</p>
                            <a href="#" class="btn btn-outline-boniaga btn-animated">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img-container">
                            <img src="/api/placeholder/400/300" class="card-img-top" alt="Dompet Ulos">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Dompet Ulos</h5>
                            <p class="card-text">Dompet dengan desain khas motif Ulos.</p>
                            <a href="#" class="btn btn-outline-boniaga btn-animated">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-img-container">
                            <img src="/api/placeholder/400/300" class="card-img-top" alt="Aksesori Batak">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Aksesori Batak</h5>
                            <p class="card-text">Berbagai aksesoris dengan motif khas Batak.</p>
                            <a href="#" class="btn btn-outline-boniaga btn-animated">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Categories (Image 2) -->
    <section class="py-5 fade-in-section">
        <div class="container">
            <h2 class="mb-4">Kategori Produk Boniaga</h2>
            <p class="mb-5">Temukan berbagai produk khas budaya Batak yang kami tawarkan.</p>
            
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Ulos</h3>
                            <p class="card-text">Ulos adalah kain tenun tradisional khas suku Batak yang menjadi pakaian adat masyarakat tersebut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Tas</h3>
                            <p class="card-text">Tas Batak adalah tas yang terbuat dari kain ulos, yaitu kain tenun khas Batak. Ulos memiliki nilai filosofis dan memiliki berbagai jenis motif.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products (Image 2) -->
    <section class="py-5 bg-light fade-in-section">
        <div class="container">
            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Songket Batak Premium</h5>
                            <p class="card-text">Songket mewah dengan benang emas yang menampilkan keanggunan motif tradisional Batak.</p>
                            <p class="fw-bold">Rp 1.750.000</p>
                            <a href="#" class="btn btn-outline-boniaga btn-animated">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Dompet Kombinasi Ulos</h5>
                            <p class="card-text">Dompet dengan desain modern yang dipadukan dengan motif ulos yang otentik.</p>
                            <p class="fw-bold">Rp 350.000</p>
                            <a href="#" class="btn btn-outline-boniaga btn-animated">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Set Aksesori Batak</h5>
                            <p class="card-text">Kombinasi aksesori tradisional Batak dengan sentuhan modern untuk berbagai kesempatan.</p>
                            <p class="fw-bold">Rp 275.000</p>
                            <a href="#" class="btn btn-outline-boniaga btn-animated">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-danger btn-animated">Lihat Semua Produk</a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section (Image 1) -->
    <section class="py-5 fade-in-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="mb-3">Be the first to see the news</h2>
                    <p class="text-muted">Your company may not be in the software business, but eventually, a software company will be in your business.</p>
                    <div class="d-flex mt-4">
                        <input type="email" class="form-control me-2" placeholder="Email Here...">
                        <button class="btn btn-boniaga btn-animated">Subscribe</button>
                    </div>
                </div>
                <div class="col-lg-6 text-center mt-4 mt-lg-0">
                    <img src="/api/placeholder/600/400" alt="Laptop Display" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Image 1) -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4 mb-md-0">
                    <img src="/api/placeholder/100/100" alt="Boniaga Logo" class="mb-3">
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5>Panel Navigasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Beranda</a></li>
                        <li><a href="#" class="text-white">Tentang Boniaga</a></li>
                        <li><a href="#" class="text-white">Jelajah Produk</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5>Alamat</h5>
                    <address class="mb-0">
                        Sigumpar Bar., Kec.<br>
                        Sigumpar, Toba,<br>
                        Sumatera Utara
                    </address>
                </div>
                <div class="col-md-3">
                    <h5>HP/WhatsApp</h5>
                    <p>+62 852-1391-5630</p>
                </div>
            </div>
            <hr class="mt-4 mb-4">
            <div class="text-center">
                <p>© 2025 BONIAGA - Semua Hak Dilindungi</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Parallax effect for hero background
        window.addEventListener('scroll', function() {
            const parallaxBg = document.getElementById('parallax-bg');
            // The scroll position divided by 2 creates a smoother parallax effect
            const offset = window.pageYOffset / 2;
            // The background moves slower than the scroll, creating the parallax effect
            parallaxBg.style.transform = 'translateY(' + offset + 'px)';
        });

        // Fade-in animation for sections when scrolling
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElems = document.querySelectorAll('.fade-in-section');
            
            const fadeInObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        // Once the animation is triggered, we can stop observing this element
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                root: null, // viewport
                threshold: 0.1, // trigger when 10% of the element is visible
                rootMargin: '-50px' // trigger 50px before the element enters the viewport
            });
            
            fadeElems.forEach(elem => {
                fadeInObserver.observe(elem);
            });
        });

        // Add smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70, // Offset for fixed navbar
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add active class to navbar items when scrolling
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            
            let currentSection = '';
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                
                if (pageYOffset >= (sectionTop - 100)) {
                    currentSection = section.getAttribute('id');
                }
            });
            
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + currentSection) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>