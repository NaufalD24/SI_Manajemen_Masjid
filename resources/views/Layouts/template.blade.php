<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Masjid</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('style/assets/img/nattiket.png') }}" rel="icon">
  <link href="{{ asset('style/assets/img/nattiket.png') }}" rel="natticket">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('style/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('style/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
  <link href="{{ asset('font/css/all.min.css') }}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('style/assets/css/style.css') }}" rel="stylesheet">
  <script src="{{ asset('style/assets/js/main.js') }}"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="" alt="">
        <span class="d-none d-lg-block">Masjid</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

      </li><!-- End Notification Nav -->
      
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{ asset('style/assets/img/admin1.jpeg') }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->
          
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="fa-solid fa-border-all"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('Jamaah') }}">
          <i class="fa fa-user-gear"></i>
          <span>Jamaah</span>
        </a>
      </li><!-- End Admin Page Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('Pernikahan') }}">
          <i class="fa-solid fa-user"></i>
          <span>Pernikahan</span>
        </a>
      </li><!-- End Pengguna Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('Donatur') }}">
          <i class="fa-brands fa-artstation"></i>
          <span>Donatur</span>
        </a>
      </li><!-- End Kompetisi Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="fa-solid fa-right-from-bracket"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Logout Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
              @yield('content')
          </section>
      </div>
  </main><!-- End #main -->

  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Masjid</span></strong> 2024
    </div>
    <div class="credits">
      Designed by <a href="">Naufal</a>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('style/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/quill/quill.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('style/assets/js/main.js') }}"></script>

</body>

</html>