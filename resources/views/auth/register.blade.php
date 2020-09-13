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
                        <div class="row">
                            <div class="login-box">
                                <div class="login-snip">
                                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                        @csrf
                                        <h1 class="login-header">
                                            <a href="{{ url('/') }}">Tokomini</a>
                                        </h1>
                                        <div class="group">
                                            <label class="label">Username</label>
                                                <input id="name" type="text" placeholder="Enter your username" class="input  @error('name') is-invalid @enderror" name="username" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
            
                                        <div class="group">
                                            <label class="label">Password</label>
                        
                                                <input id="password" placeholder="Enter your password" type="password" class="input  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
            
                                        <div class="group">
                                            <label class="label">Repeat Password</label>
                                                
                                                <input id="password-confirm" placeholder="Repeat your password" type="password" class="input " name="password_confirmation" required autocomplete="new-password">
                                        </div>
            
                                        <div class="group">
                                            <label class="label">Email</label>
                                              
                                                <input id="email" type="email" placeholder="Masukan Email" class="input  @error('email') is-invalid @enderror" name="email" value="{{ old('alamat') }}" required autocomplete="alamat">
            
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="group">
                                            <label class="label">Hak Akses</label>
                                                <select name="hak_akses" class="input @error('hak_akses') is-invalid @enderror">
                                                    <option>---</option>
                                                    <option value="customer">Customer</option>
                                                    <option value="seller">Seller</option>
                                                </select>
                                        </div>
                                        <div class="group text-center">
                                            <button type="submit" class="button">
                                                Sign Up
                                            </button>
                                        </div>
                                        <div class="text-center mb-0">
                                            <span class="redirect">Sudah Punya Akun? Klik <a href="{{ route('login') }}">disini</a></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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

