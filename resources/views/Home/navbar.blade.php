<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container" style="background-color: #B53535; ">
        <a class="navbar-brand d-flex align-items-center text-white" href="/">
            <img src="{{ url('assets/img/logo.png') }}" alt="Boniaga Logo" style="height: 50px;" class="me-2">
            <span class="fw-bold d-none d-sm-inline">Boniaga</span>
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent">
    <div class="container" style="background-color: #B53535;">
        @if($informationStore)
        <a class="navbar-brand d-flex align-items-center text-white" href="/">
            <img src="{{asset('storage/' .$informationStore->logo) }}" alt="Boniaga Logo" style="height: 50px;" class="me-2">
            <span class="fw-bold d-none d-sm-inline">{{$informationStore->name}}</span>
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="products">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/about-us">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>