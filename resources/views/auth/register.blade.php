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
        <h2>Register here</h2>

        {{-- @if (count($errors) > 0)
             <ul>
                 @foreach($errors->all() as $error)
                     <li class="text-danger"> {{ $error }}</li>
                 @endforeach
             </ul>
         @endif --}}

         @if ( Session::has('success') )
            <div class="alert alert-success alert-dismissible" role="alert">
                <strong>{{ Session::get('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif
        <?php //Hiển thị thông báo lỗi?>
        @if ( Session::has('error') )
            <div class="alert alert-danger alert-dismissible" role="alert">
                <strong>{{ Session::get('error') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        @endif

            <form action="{{ route('register') }}" method="post">
                @csrf
                @if( $errors->has('first_name'))
                    <p>{{$errors->first('first_name')}}</p>
                @endif
                <input type="text" name="first_name" placeholder="FIRST NAME">

                @if( $errors->has('last_name'))
                    <p>{{$errors->first('last_name')}}</p>
                @endif
                <input type="text" name="last_name" placeholder="LAST NAME">

                @if( $errors->has('dob'))
                    <p>{{$errors->first('dob')}}</p>
                @endif
                <input type="text" name="dob" placeholder="DATE OF BIRTH (YYYY-mm-dd)">

                @if( $errors->has('gender'))
                    <p>{{$errors->first('gender')}}</p>
                @endif
                <ul class="gendercheck">
                    <li>
                        <input type="radio" id="male" value="1" name="gender" checked>
                        <label for=""><span></span>MALE</label>
                        <input type="radio" id="female" value="2" name="gender">
                        <label for=""><span></span>FEMALE</label>
                    </li>
                </ul>

                @if( $errors->has('email'))
                    <p>{{$errors->first('email')}}</p>
                @endif
                <input type="text" name="email" placeholder="EMAIL">

                @if( $errors->has('password'))
                    <p>{{$errors->first('password')}}</p>
                @endif
                <input type="password" name="password" placeholder="PASSWORD">

                 @if( $errors->has('password_confirmation'))
                    <p>{{$errors->first('password_confirmation')}}</p>
                @endif
                <input type="password" name="password_confirmation" placeholder="CONFIRM PASSWORD">

                @if( $errors->has('phone'))
                    <p>{{$errors->first('phone')}}</p>
                @endif
                <input type="text" name="phone" placeholder="PHONE">

                 @if( $errors->has('address'))
                    <p>{{$errors->first('address')}}</p>
                @endif
                <input type="text" name="address" placeholder="ADDRESS">

                <div class="aitssendbuttonw3ls">
                    <input type="submit" value="REGISTER">
                    <p> You have account <span>→</span> <a class="w3_play_icon1" href="{{ route('login') }}"> Login</a></p>
                    <div class="clear"></div>
                </div>
            </form>
        </div>
        
        <div class="w3footeragile">
            <p> &copy; 2018 Register Form</p>
        </div>

        
        <script type="text/javascript" src="{{ asset('user/js/jquery-2.1.4.js') }}"></script>

            <script src="{{ asset('user/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>

    </body>
    <!-- //Body -->

    </html>