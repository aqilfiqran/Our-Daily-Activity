<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Our Daily Activity | @yield('title')</title>
    <!--     Fonts and icons      -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/paper-kit.css?v=2.2.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('css/calender.css')}}">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md fixed-top"
            style="background-color: rgba(128, 86, 169,0.8);">
            <div class="container">
                <div class="navbar-translate">
                    <a class="navbar-brand" href="{{ route('user') }}" rel="tooltip" title="Coded by Creative Tim"
                        data-placement="bottom" target="_blank">
                        Our Daily Activity
                    </a>
                    <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                        aria-label="Toggle navigation">
                        @for ($i = 1; $i <= 3; $i++) <span class="navbar-toggler-bar bar1"></span>
                            @endfor
                    </button>
                </div>

                <div class="collapse navbar-collapse justify-content-end bg-aqua" id="navigation">
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('article') }}">{{ __('Article') }}</a>
                        </li>
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('history.work') }}">{{ __('Note Work') }}</a>
                                <a class="dropdown-item" href="{{ route('history.fashion') }}">{{ __('Fashion') }}</a>
                                <a class="dropdown-item" href="{{ route('history.money') }}">{{ __('Money Box') }}</a>
                                <a class="dropdown-item" href="{{ route('history.health') }}">{{ __('Healthy Diet') }}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="page-header header-filter " style="background-image: url('{{asset('img/img5.jpg')}}'); background-size: cover; background-position: top center;">
            <div class="col-lg-12 pt-5 mt-5">
                    @yield('content')
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{asset('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{asset('assets/js/plugins/bootstrap-switch.js')}}"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('assets/js/paper-kit.js?v=2.2.0')}}" type="text/javascript"></script>
    <script>
        $('.custom-file-input').on('change',function(){
            let filename = $(this).val().split('\\').pop()
            $(this).next('.custom-file-label').addClass('selected').html(filename)
        })
    </script>
</body>


</html>
