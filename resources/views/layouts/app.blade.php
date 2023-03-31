<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('build/assets/app.css')}}">
    <link rel="stylesheet" href="{{asset('build/assets/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm"  style="background:#1c49c2;">
            <div class="container">
                <a class="" href="{{ url('/') }}">
                 <img class="Logo" src="{{asset('img/Logosure-1.png')}}" alt="">
                </a>
                <button class="navbar-toggler" style="border: 1px solid white;" type="button" data-bs-toggle="collapse"  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon " style="" ></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">About</a>
                        </li>

                        <li class="nav-item">
                            <div class="dropdown">
                                <a type="button" class="btn btn-primary" data-bs-toggle="dropdown"  href="#">
                                    <i class="fa-solid fa-cart-shopping"></i> Cart <span class="badge">{{count((array)session('cart'))}}</span>
                                </a>
                               
                             <div class="dropdown-menu">
                                <div class="row total-header-section">
                                        @php $total = 0 @endphp
                                        @foreach((array) session('cart') as $id => $details)
                                        @php $total += $details['product_price'] * $details['quantity'] @endphp
                                        @endforeach
                                <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                        <p class="">Total: <span class="text-info">${{$total}}</span></p>    
                                </div>  
                             
                               
                                </div>
                                <hr>
                                @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                <div class="row cart-detail">
                                        <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                            <img src="{{asset('img')}}/{{$details['product_img']}}" alt="">
                                        </div>
                                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                            <p>{{$details['product_name']}}</p>
                                            <span class="price text-info"> ${{$details['product_price']}}</span>    <span class="count"> Quantity:{{$details['quantity']}}</span>

                                        </div>
                                        
                                </div>
                                @endforeach

                                @endif
                                
                             
                                <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                    <hr>
                                    <a href="{{route('cart')}}" class="btn btn-primary btn-block">View All</a>
                                    </div>
                            </div>
                             </div>     
                            </div>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register')}}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color:black;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            
                          
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
            @yield('content')
   
        </div>
	

     
 
