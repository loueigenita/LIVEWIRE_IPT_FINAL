<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', config('app.name'))</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  
    <link rel="stylesheet" href="sweetalert2.min.css">

    @livewireStyles()
    @yield('css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake img-circle elevation-2" src="{{asset('frontend/images/logo.png')}}" alt="Logo" height="200" width="200">
        </div> --}}
        @include('layouts.navbar')
        @include('layouts.sidebar')
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-5 text-right">
                            @yield('content-actions')
                        </div>
                    </div>
                </div>
            </section>


            <section class="content">
                {{-- @include('sweetalert::alert') --}}
                @yield('content')
            </section>

        </div>


        @include('layouts.footer')

    </div>

    <script src="{{asset('js/jquery.min.js')}}"></script>
     <script src="{{asset('js/popper.min.js')}}"></script>
     <script src="{{asset('js/bootstrap.min.js')}}"></script> 
     
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
   
    <script src="{{ asset('plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.23.0/slimselect.min.js"></script>
    @yield('js')
    @livewireScripts()
</body>
</html>






