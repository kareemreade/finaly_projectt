<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.20/sweetalert2.min.js" integrity="sha512-2AOp8GEFv1X43dZpYqOp34WD+skmM18yOrCxS/S1Mh6VShz7uxlPhKmA98fsPrE7MMMtZgjshiMHKmzWtZR5uA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Vendor CSS Files -->
  <link href="{{ asset('sitasset/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('sitasset/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sitasset/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('sitasset/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sitasset/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sitasset/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('sitasset/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    @yield('style')
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
        <ul class="nav-menu navbar ">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                @if (app()->currentLocale() != $localeCode)

                <li>
                    <a class="nav-link btn btn-primary " rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
                @endif

            @endforeach
            <a href="{{ route('login') }}"class="nav-link btn btn-primary " target="_blank" rel="noopener noreferrer">Admin_login</a>
        </ul>

      <div class="profile">
        <img src="{{ asset('uplodesHomePage/'.$home->imge) }}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">{{ $home->title }}</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="{{ $home->twiter}}"  target="_blank"  class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="{{ $home->facebook }}"  target="_blank"  class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="{{ $home->instagram }}"  target="_blank"  class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="{{$home->skype }}"   target="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="{{ $home->linkedin }}"  target="_blank"  class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="{{ route('sit1.Home') }}"   class="nav-link scrollto active"><i class="bx bx-home"></i> <span>{{ __('sit.Home') }}</span></a></li>
          <li><a href="{{ route('sit1.About') }}"  class="nav-link scrollto"><i class="bx bx-user"></i> <span>{{ __('sit.About') }}</span></a></li>
          <li><a href="{{ route('sit1.Resume') }}"  class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>{{ __('sit.Resume') }}</span></a></li>
          <li><a href="{{ route('sit1.Portfolio') }}"  class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>{{ __('sit.Portfolio') }}</span></a></li>
          <li><a href="{{ route('sit1.Contact') }}"  class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>{{ __('sit.Contact') }}</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  @yield('Home')
  <main id="main">

    <!-- End About Section -->



    <!-- ======= Skills Section ======= -->


@yield('contian')


   <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->




   <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->




    <!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->

    <!-- ======= Contact Section ======= -->
    <!-- End Contact Section -->

  </main><!-- End #main -->

  {{-- <<footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iPortfolio</span></strong>
      </div>
      {{-- <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> --}}
    {{-- </div>
  </footer><!-- End  Footer --> --}}

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('sitasset/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('sitasset/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('sitasset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('sitasset/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('sitasset/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('sitasset/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('sitasset/assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('sitasset/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('sitasset/assets/vendor/php-email-form/validate.js') }}"></script>
  @yield('script')

  <!-- Template Main JS File -->
  <script src="{{ asset('sitasset/assets/js/main.js') }}"></script>
  @if (app()->currentLocale() == 'ar')


  @endif

</body>

</html>
