<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent">
    <div class="container" style="background-color: #B53535;">
        @if($informationStore)
        <a class="navbar-brand d-flex align-items-center text-white" href="/">
            <img src="{{asset('storage/app/public/' .$informationStore->logo) }}" alt="Boniaga Logo" style="height: 50px;" class="me-2">
            <span class="fw-bold d-none d-sm-inline">{{$informationStore->name}}</span>
        </a>
        @endif
        <button class="navbar-toggler shadow-none ms-2" type="button" id="navbarToggler">
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
                    <a class="nav-link text-white" href="/products">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/tentangkami">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
/* Custom animation styles for collapse */
.navbar-collapse {
    transition: max-height 0.35s ease;
    overflow: hidden;
}

/* Only apply max-height: 0 on mobile */
@media (max-width: 991px) {
    .navbar-collapse {
        max-height: 0;
    }
    
    .navbar-collapse.show {
        max-height: 300px; /* Adjust this value as needed */
    }
}

/* Always show navbar on desktop */
@media (min-width: 992px) {
    .navbar-collapse {
        display: flex !important;
        max-height: none !important;
        height: auto !important;
    }
    
    /* Hide navbar toggler on desktop */
    .navbar-toggler {
        display: none;
    }
}

/* Hamburger button animation */
.navbar-toggler-bar {
    display: block;
    position: relative;
    width: 22px;
    height: 2px;
    border-radius: 1px;
    background: white;
    transition: .3s;
    margin: 5px 0;
}

.navbar-toggler.active .navbar-toggler-bar.bar1 {
    transform: rotate(45deg);
    transform-origin: 10% 10%;
}

.navbar-toggler.active .navbar-toggler-bar.bar2 {
    opacity: 0;
}

.navbar-toggler.active .navbar-toggler-bar.bar3 {
    transform: rotate(-45deg);
    transform-origin: 10% 90%;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get elements
    var navbarToggler = document.getElementById('navbarToggler');
    var navLinks = document.querySelectorAll('.navbar-collapse .nav-link');
    var navbarCollapse = document.getElementById('navigation');
    var isOpen = false;
    
    // Function to check if we're on mobile view
    function isMobileView() {
        return window.innerWidth < 992; // Bootstrap's lg breakpoint
    }
    
    // Initialize navbar based on screen size
    function initNavbar() {
        if (!isMobileView()) {
            // On desktop, always show navbar
            navbarCollapse.classList.remove('show');
            navbarCollapse.style.display = 'flex';
            // Keep links white on desktop
            navLinks.forEach(function(link) {
                link.classList.add('text-white');
                link.classList.remove('text-dark');
            });
        } else {
            // On mobile, navbar starts collapsed
            navbarCollapse.classList.remove('show');
            if (window.getComputedStyle(navbarCollapse).display === 'flex') {
                navbarCollapse.style.display = '';
            }
        }
    }
    
    // Call once on page load
    initNavbar();
    
    // Also call on window resize
    window.addEventListener('resize', initNavbar);
    
    // Simple toggle function with animation (only used on mobile)
    navbarToggler.addEventListener('click', function() {
        // Only toggle if we're in mobile view
        if (isMobileView()) {
            isOpen = !isOpen;
            
            // Toggle active class for hamburger animation
            if (isOpen) {
                navbarToggler.classList.add('active');
            } else {
                navbarToggler.classList.remove('active');
            }
            
            if (isOpen) {
                // Show the navigation with animation
                navbarCollapse.classList.add('show');
                
                // Change text to black
                navLinks.forEach(function(link) {
                    link.classList.remove('text-white');
                    link.classList.add('text-dark');
                });
            } else {
                // Hide the navigation with animation
                navbarCollapse.classList.remove('show');
                
                // Change text back to white
                navLinks.forEach(function(link) {
                    link.classList.remove('text-dark');
                    link.classList.add('text-white');
                });
            }
        }
    });
});
</script>