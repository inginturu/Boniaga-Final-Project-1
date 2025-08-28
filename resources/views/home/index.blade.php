<!--
=========================================================
* Material Kit 3 - v3.1.0
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}" class="logo" style="width: 20px; height: 20px;" />

  <title>Boniaga</title>

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />

  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />

  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('assets/css/material-kit.css?v=3.1.0') }}" rel="stylesheet" />
  <!-- <link rel="stylesheet" href="{{ asset('assets/css/products.css') }}"> -->
</head>

<body class="about-us bg-gray-100">

  <!-- Navbar Transparent -->
  @include('home.navbar')
  <!-- End Navbar -->

  <!-- -------- START HEADER 7 w/ text and video ------- -->
  @include('home.header')
  <!-- -------- END HEADER 7 w/ text and video ------- -->

  @include('home.hero-1')
  @include('home.hero-2')
  @include('home.hero-3')

  <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
  @include('home.footer')

  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <!--  Plugin for CountUp.js -->
  <script src="{{ asset('assets/js/plugins/countup.min.js') }}"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="{{ asset('assets/js/material-kit.min.js?v=3.1.0') }}" type="text/javascript"></script>

  <script>
    // get the element to animate
    var element = document.getElementById('count-stats');
    var elementHeight = element ? element.clientHeight : 0;

    // listen for scroll event and call animate function
    document.addEventListener('scroll', animate);

    // check if element is in view
    function inView() {
      if (!element) return false;
      var windowHeight = window.innerHeight;
      var scrollY = window.scrollY || window.pageYOffset;
      var scrollPosition = scrollY + windowHeight;
      var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;
      return scrollPosition > elementPosition;
    }

    var animateComplete = true;

    function animate() {
      if (inView() && animateComplete) {
        if (document.getElementById('state1')) {
          const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
          if (!countUp.error) countUp.start();
        }
        if (document.getElementById('state2')) {
          const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
          if (!countUp1.error) countUp1.start();
        }
        if (document.getElementById('state3')) {
          const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
          if (!countUp2.error) countUp2.start();
        }
        animateComplete = false;
      }
    }

    if (document.getElementById('typed')) {
      var typed = new Typed("#typed", {
        stringsElement: '#typed-strings',
        typeSpeed: 90,
        backSpeed: 90,
        backDelay: 200,
        startDelay: 500,
        loop: true
      });
    }
  </script>

  <script>
    if (document.getElementsByClassName('page-header')) {
      window.onscroll = debounce(function () {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var oVal = (window.scrollY / 3);
        bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
      }, 6);
    }
  </script>
</body>
</html>
