<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                    <h1>Dashboard</h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
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
                        <li class="nav-item">
                            <img src="{{asset('assets/img/default.jpg')}}" class="rounded-circle" width="60" height="60">
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->


            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                <h6>Fitur</h6>
            </div>

            @if (Auth::user()->status==0)
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('home') }}"><i class="fas fa-fw fa-cog"></i>
                <span>Home</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed disabled" href="{{ url('home/studio/'.Auth::user()->id) }}" ><i class="fas fa-fw fa-folder"></i>
                <span>Studio</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed disabled" href="{{ url('home/kasir/'.Auth::user()->id) }}" ><i class="fas fa-fw fa-folder"></i>
                <span>Kasir</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link disabled" href="{{ url('home/customer/') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Customer servis</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </li>

            </ul>
            @else

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('home') }}"><i class="fas fa-fw fa-cog"></i>
                <span>Home</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('home/studio/'.Auth::user()->id) }}" ><i class="fas fa-fw fa-folder"></i>
                <span>Studio</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('home/kasir/'.Auth::user()->id) }}" ><i class="fas fa-fw fa-folder"></i>
                <span>Kasir</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('home/customer/') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Customer servis</span></a>
            </li>
            <li class="nav-item">
                            <a class="nav-link" href="{{ url('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
            </li>

            </ul>
            <!-- End of Sidebar -->
            @endif
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content  ">
                    <div class="container mt-5">
                            <div class="row">
                                <div class="col col-sm-12">
                                    <div class="card">
                                            @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            </div>

    </div>
</body>
</html>
