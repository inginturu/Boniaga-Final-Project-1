<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Boniaga')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header -->
    <header class="bg-danger text-white p-3">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="m-0">BONIAGA</h1>
            <nav>
                <a href="#" class="text-white mx-3">BERANDA</a>
                <a href="#" class="text-white mx-3">TENTANG BONIAGA</a>
                <a href="#" class="text-white mx-3 fw-bold">PRODUK KAMI</a>
                <a href="#" class="text-white mx-3">PROFIL PEMILIK</a>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <main class="container my-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white p-3 mt-5">
        <div class="container text-center">
            <p class="m-0">&copy; 2025 BONIAGA - Semua Hak Dilindungi</p>
        </div>
    </footer>

</body>
</html>
