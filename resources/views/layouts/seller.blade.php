<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/seller/script.min.js') }}" defer></script>

    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "100%";
            }

            /* Set the width of the sidebar to 0 (hide it) */
            function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
            } 
            
    </script>
    
   
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/seller/administrator.min.css') }}" rel="stylesheet">
</head>
<body>
        
    <div id="app">
        @include('sweetalert::alert')
        <div class="ads-home row">
            <div class="ads-sidebar col-md-2 mobileHide">
    
                <div class="ads-header">
                    <div class="ads-logo">
                        <a href="https://facebook.com">
                            <h2>Tokomini</h2>
                        </a>
                    </div>
                </div>
                
                
                <div class="ads-menu">
                    <div class="ads-inner">
                        <nav>
                            <ul id="menu" class="menuads">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-home"></i>
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('barang/index') }}">
                                        <i class="fas fa-user-circle"></i>
                                        <span>Daftar Barang</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('transaksi/index') }}">
                                        <i class="fas fa-store-alt"></i>
                                        <span>Daftar Transaksi</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="tc dropdown-toggle" id="navbarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-store-alt"></i>
                                        <span>Rekap Transakasi</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                                        <a class="dropdown-item" href="{{ url('rekap/harian') }}">
                                            Rekap Harian
                                        </a>
        
                                        <a class="dropdown-item" href="{{ url('rekap/bulanan') }}">
                                            Rekap Bulanan
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="ads-header webHide ht100">
                <div class="ads-logo">
                    <a href="#" class="mt-10">
                        <h2>Tokomini</h2>
                    </a>
                    <button class="openbtn" onclick="openNav()">&#9776;</button>
                </div>
            </div>
            <div id="mySidepanel" class="sidepanel webHide">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <ul id="menu" class="menuads">
                            <li>
                                <a href="#" class="tc">
                                    <i class="fa fa-home"></i>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('barang/index') }}" class="tc">
                                    <i class="fas fa-user-circle"></i>
                                    <span>Daftar Barang</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('transaksi/index') }}" class="tc">
                                    <i class="fas fa-store-alt"></i>
                                    <span>Daftar Transaksi</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="tc dropdown-toggle" id="navbarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-store-alt"></i>
                                    <span>Rekap Transakasi</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                
                                    <a class="dropdown-item" href="{{ url('rekap/harian') }}">
                                        Rekap Harian
                                    </a>
    
                                    <a class="dropdown-item" href="{{ url('rekap/bulanan') }}">
                                        Rekap Bulanan
                                    </a>
                                </div>
                            </li>
                        </ul>
                  </div>
            
            <div class="adscontent col-md-10">
                <marquee behavior="scroll" direction="left">
                    <p class="direction">Hallo Selamat datang {{Auth::user()->username}}</p>
                </marquee>
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  
                      <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: #333;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="#" alt="" class="img-circle">
                                {{ Auth::user()->username }} <span class="caret"></span>
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
            
                      </ul>
                </nav>
                @yield('content')
            </div>
        </div>
    </div>
    
</body>
</html>