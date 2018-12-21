<!--
        Author: W3layouts
        Author URL: http://w3layouts.com
        License: Creative Commons Attribution 3.0 Unported
        License URL: http://creativecommons.org/licenses/by/3.0/
    -->

    <!DOCTYPE html>
    <html>

    <!-- Head -->
    <head>

    <title>Existing Login Form a Flat Responsive Widget Template :: W3layouts</title>

    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //Meta-Tags -->

    <link href="{{ asset('user/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />

    <!-- Style --> <link rel="stylesheet" href="{{ asset('user/css/style.css') }}" type="text/css" media="all">

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <!-- //Fonts -->

    </head>
    <!-- //Head -->

    <!-- Body -->
    <body>

        <h1>DAILY FAST FOODS</h1>

        <div class="w3layoutscontaineragileits">
        <h2>Login here</h2>

        {{-- @if (count($errors) > 0)
             <ul>
                 @foreach($errors->all() as $error)
                     <li class="text-danger"> {{ $error }}</li>
                 @endforeach
             </ul>
         @endif --}}

         @if (session('status'))
             <ul>
                 <li class="text-danger"> {{ session('status') }}</li>
             </ul>
         @endif

            <form action="{{ route('login') }}" method="post">
                @csrf

                @if( $errors->has('email'))
                    <p>{{$errors->first('email')}}</p>
                @endif
                <input type="text" name="email" placeholder="EMAIL">

                @if( $errors->has('password'))
                    <p>{{$errors->first('password')}}</p>
                @endif
                <input type="password" name="password" placeholder="PASSWORD">
                
                <ul class="agileinfotickwthree">
                    <li>
                        <input type="checkbox" id="brand1" value="">
                        <label for="brand1"><span></span>Remember me</label>
                        <a href="#">Forgot password?</a>
                    </li>
                </ul>
                <div class="aitssendbuttonw3ls">
                    <input type="submit" value="LOGIN">
                    <p> To register new account <span>→</span> <a class="w3_play_icon1" href="{{ route('register') }}"> Register</a></p>
                    <div class="clear"></div>
                </div>
            </form>
        </div>
        
        <div class="w3footeragile">
            <p> &copy; 2018 Login Form</p>
        </div>

        
        <script type="text/javascript" src="{{ asset('user/js/jquery-2.1.4.js') }}"></script>

            <script src="{{ asset('user/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>

    </body>
    <!-- //Body -->

    </html>