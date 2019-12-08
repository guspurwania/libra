<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>LiBRA (Learning Bot Reminder Asistant)</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/backend/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets/backend/modules/bootstrap-social/bootstrap-social.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/backend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap-datepicker.css') }}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
            @yield('content')
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('assets/backend/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/backend/modules/popper.js') }}"></script>
  <script src="{{ asset('assets/backend/modules/tooltip.js') }}"></script>
  <script src="{{ asset('assets/backend/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/backend/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('assets/backend/modules/moment.min.js') }}"></script>
  <script src="{{ asset('assets/backend/js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="{{ asset('assets/backend/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/backend/js/custom.js') }}"></script>
  <script src="{{ asset('assets/backend/js/bootstrap-datepicker.min.js') }}"></script>
  @yield('js')
</body>
</html>