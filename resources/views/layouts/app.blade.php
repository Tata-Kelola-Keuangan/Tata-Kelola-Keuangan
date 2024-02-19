<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> roupel
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{asset('asset/img/logo/logo2.png')}}" rel="icon">
  <title>Poliwangi - Tata Kelola Kuangan</title>
  <link href="{{asset('asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('asset/css/ruang-admin.min.css')}}" rel="stylesheet">
<<<<<<< HEAD
=======
=======
>>>>>>> ddf047441dcea412b9f0ba2fec302d970fb59be4
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('asset/img/logo/logo2.png') }}" rel="icon">
    <title>Poliwangi - Tata Kelola Kuangan</title>
    <link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('asset/css/ruang-admin.min.css') }}" rel="stylesheet">
    @stack('css')
<<<<<<< HEAD
>>>>>>> d63912179dcaeef4af0915801ec7a346229cffca
=======
>>>>>>> roupel
=======
>>>>>>> ddf047441dcea412b9f0ba2fec302d970fb59be4
</head>

<body id="page-top">
    <div id="wrapper">

        @include('layouts.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                @include('layouts.header')

                @if (\Session::has('success'))
                    <div class="text-green-600 pt-5 pl-5">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif

                @if (\Session::has('error'))
                    <div class="text-green-600 pt-5 pl-5">
                        <ul>
                            <li>{!! \Session::get('error') !!}</li>
                        </ul>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="text-red-600  pt-5 pl-5">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{ $slot }}

            </div>
            @include('layouts.footer')
        </div>
    </div>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> roupel
    <script src="{{asset('asset/vendor/jquery/jquery.min.j')}}s"></script>
  <script src="{{asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('asset/js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('asset/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('asset/js/demo/chart-area-demo.js')}}"></script>  
<<<<<<< HEAD
  <script src="{{asset('asset/vendor/select2/dist/js/select2.min.js')}}""></script>
  <script src="{{asset('asset/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}""></script>
  <script src="{{asset('asset/vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js')}}""></script>
  <script src="{{asset('asset/vendor/clock-picker/clockpicker.js')}}""></script>
=======
        <script src="{{ asset('asset/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('asset/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('asset/js/ruang-admin.min.js') }}"></script>
        @stack('js')
>>>>>>> d63912179dcaeef4af0915801ec7a346229cffca
=======
>>>>>>> roupel
=======
    <script src="{{ asset('asset/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('asset/js/ruang-admin.min.js') }}"></script>
    @stack('js')
>>>>>>> ddf047441dcea412b9f0ba2fec302d970fb59be4
</body>

</html>
