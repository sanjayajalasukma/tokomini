<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <title>Toko Mini</title>
        
        <!-- Font awesome -->
        <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">   
        <!-- SmartMenus jQuery Bootstrap Addon CSS -->
        <link href="{{ asset('css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet">
        <!-- Product view slider -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.simpleLens.css') }}">    
        <!-- slick slider -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
        <!-- price picker slider -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/nouislider.css') }}">
        <!-- Theme color -->
        <link id="switcher" href="{{ asset('css/theme-color/default-theme.css') }}" rel="stylesheet">

        <!-- Top Slider CSS -->
        <link href="{{ asset('css/sequence-theme.modern-slide-in.css') }}" rel="stylesheet" media="all">

        <!-- Main style sheet -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">    

        <!-- Google Font -->
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        


    

    </head>
    <body>
        <div class="mains">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="row">
                                <div class="login-box">
                                    <div class="login-snip"> 
                                        <h1 class="login-header">
                                            <a href="{{ url('/') }}">TokoMini</a>
                                        </h1>
                                        <div class="login group"> 
                                            <label for="username" class="label">Username</label> 
                                            <input id="username" name="username" type="text" class="input" placeholder="Enter your username"> 
                                        </div>
                                        <div class="login group"> 
                                            <label for="password" class="label">Password</label> 
                                            <input id="password" name="password" type="password" class="input" data-type="password" placeholder="Enter your password"> 
                                        </div>
                                        <div class="login group" style="margin-top: 20px;"> 
                                            <input id="check" type="checkbox" class="check"> 
                                            <label for="check">
                                                <span class="icon"></span> Keep me Signed in
                                            </label> 
                                        </div>
                                        <div class="login group text-center"> 
                                            <input type="submit" class="button" value="Sign In"> 
                                        </div>
                                        <div class="text-center mb-0">
                                            <span class="redirect">Belum Punya Akun? Daftar <a href="{{ route('register') }}">disini</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery library -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/script.min.js') }}"></script>
        <script src="{{ asset('js/all.min.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>  
        <!-- SmartMenus jQuery plugin -->
        <script type="text/javascript" src="{{ asset('js/jquery.smartmenus.js') }}"></script>
        <!-- SmartMenus jQuery Bootstrap Addon -->
        <script type="text/javascript" src="{{ asset('js/jquery.smartmenus.bootstrap.js') }}"></script>  
        <!-- To Slider JS -->
        <script src="{{ asset('js/sequence.js') }}"></script>
        <script src="{{ asset('js/sequence-theme.modern-slide-in.js') }}"></script>  
        <!-- Product view slider -->
        <script type="text/javascript" src="{{ asset('js/jquery.simpleGallery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.simpleLens.js') }}"></script>
        <!-- slick slider -->
        <script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
        <!-- Price picker slider -->
        <script type="text/javascript" src="{{ asset('js/nouislider.js') }}"></script>
        <!-- Custom js -->
        <script src="{{ asset('js/custom.js') }}"></script> 

    </body>
</html>

