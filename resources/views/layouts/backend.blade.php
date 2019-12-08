<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
    LiBRA (Learning Bot Reminder Asistant)
  </title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/backend/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/modules/fontawesome/css/all.min.css') }}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets/backend/modules/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/modules/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css"  />

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/backend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap-datepicker.css') }}">
  @yield('css')
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA -->
  <style type="text/css">
    #dataTableBuilder{ height:130px; }
  </style>
</head>

<body class="sidebar-mini">
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('assets/backend/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <!-- <a href="{{ url('profile') }}" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Edit Profile
              </a>
              <div class="dropdown-divider"></div> -->
              <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
                  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </li>
        </ul>
      </nav>
      {{-- <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">DASHBOARD PANNEL</a>
          </div>
          @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 5)
              @if(!empty($domain))
                @include('layouts.menu.admin_operator_group_merchant_menu')
              @else
                @include('layouts.menu.superadmin_reseller_menu')
              @endif
          @elseif (Auth::user()->role_id == 2 || Auth::user()->role_id == 3 || Auth::user()->role_id == 4)
            @include('layouts.menu.admin_operator_group_merchant_menu')            
          @endif
        </aside>
      </div> --}}

      

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            @yield('content-header')
            <div class="row">
              <div class="col-lg-12">
                <div class="alert alert-info alert-has-icon p-4">
                  <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                  <div class="alert-body">
                  <div class="alert-title">Hi, {{ Auth::user()->name }} ! Your Bot Token <strong style="text-decoration: underline;">{{ Auth::user()->bot_token }}</strong></div>
                    <p>Welcome to Dashboard panel.</p>
                  </div>
                </div>
              </div>
            </div> 
            @include('components.alert')
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @yield('content')
        </section>

        <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="confirm-label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="confirm-label"></h5>
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                </div>
                <div class="modal-body">
                  <span class="message"></span>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary dismiss" data-dismiss="modal"></button>
                  <button type="button" class="btn btn-danger confirm"></button>
                </div>
              </div>
            </div>
          </div>
      </div>
      
    </div>

  </div>
  <footer class="main-footer">
    <div class="footer-left">
      Copyright &copy; {{ date('Y')}} <a target="_blank" href="https://digitalartisans.id">PT. Digital Artisans Indonesia</a>
    </div>
  </footer>

  


  <!-- General JS Scripts -->
  <script src="{{ asset('assets/backend/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/backend/modules/popper.js') }}"></script>
  {{-- <script src="{{ asset('assets/backend/modules/tooltip.js') }}"></script> --}}
  <script src="{{ asset('assets/backend/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/backend/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('assets/backend/modules/moment.min.js') }}"></script>
  <script src="{{ asset('assets/backend/js/stisla.js') }}"></script>
  
  <!-- JS Libraies -->
  <script src="{{ asset('assets/backend/modules/chart.min.js') }}"></script>
  <script src="{{ asset('assets/backend/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/backend/modules/jquery-ui/jquery-ui.min.js') }}"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
  
  <!-- Page Specific JS File -->
  {{-- <script src="{{ asset('assets/backend/js/page/index.js') }}"></script> --}}
  <script src="{{ asset('assets/backend/js/page/components-table.js') }}"></script> 
  <script src="{{ asset('assets/backend/js/bootstrap-datepicker.min.js') }}"></script>
  
  <!-- Template JS File -->
  <script src="{{ asset('assets/backend/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/backend/js/custom.js') }}"></script>
  @include('components/_script_modal-delete')
  @yield('js')
</body>
</html>