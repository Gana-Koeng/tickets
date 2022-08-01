<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <title>tickets_home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <link rel="stylesheet" href=" {{ asset('/css/main.css') }} ">
</head>

<body style="background-color: #554238">
    <header>
        <div class="header-top">
            <div class="bar-top-left">
                <img src="../img/logo.png"alt="logo"style="cursor: pointer" onclick="window.location.href='/'">
            </div>

            <div class="bar-top-right">
                <a href="{{ route('login') }}"><button>Sign In/Out</button></a>
                <a href="{{ route('register') }}"><button class="register">Register</button></a>
            </div>

        </div>
        <div class="header-bottom">
                <a onclick="window.location.href='/'" style=cursor:pointer>Home</a>
                <a href="#">Showtime</a>
                <a href="#">Coming Soon</a>
                <a href="#">Contact Us</a>
        </div>

        {{-- bootstrap of logo --}}
    </header>
    <div class="wrapper-body">
        @yield('content')
    </div>
    

    <footer>
        <div class="top-footer">

            <div class="top-left-footer">
                <h3>Menu Link</h3>

                <a href="/">Home</a><br>
                <a href="/">Now Showing</a><br>
                <a href="/">Coming Soon</a><br>
                <a href="/">Contact Us</a>
            </div>

            <div class="top-middle-footer">
                <h3>About Phoenix Cinema</h3>
                <p>We provide showtime of movies and you can book for the seat.</p>
            </div>
            <div class="top-right-footer">
                <h3>Connect with Us</h3>
                <h4>011-575-065</h4>
                <div class="icon-social">
                    <img src="../img/facebook_icon.png" style="width:30px; height:30px; cursor: pointer"
                        onclick="window.location.href='https://www.facebook.com/kong.rotanak.7/'">
                    <img src="../img/telegram_icon.png" style="width:30px; height:30px; cursor: pointer"
                        onclick="window.location.href='https://web.telegram.org/z/#467814096'">
                    <img src="../img/gmail_icon.png" style="width:30px; height:30px; cursor: pointer"
                        onclick="window.location.href='https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSMVlCTvxqTrbzWjQtKtvKwCZVHlfMBhgPbbSmcsXDhrgxZsVgsPpxmCfldhpRQQjQNkkJNz'">
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <p>Copyright &copy; 2022. Alright reserved.</p>

            <a href="/policy">Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="/term">Terms of Conditions</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="/cookie">Cookie Preferences</a>
        </div>
    </footer>

</body>

</html>
