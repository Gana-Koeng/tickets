<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <title>tickets_home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width-device-width,initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/layout-homepage.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/comingsoon.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/moviedetail.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/showtime.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/seat.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/contact.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/frontcss/load.css') }} ">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    {{-- swiper css --}}

    {{-- navbar drop down --}}
    {{-- <link href="https://cdn.jsdelivr.net/npmwsss/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <!-- ARCHIVES CSS -->
    {{-- loading --}}


</head>

<body style="background-color: #393939">
    <div class="loading-body" style="display: none;">   
        <div class="loader">
        </div>
         </div>
    <header>
        <div class="header-top">
            <div class="bar-top-left">
                <img src="../img/logo.png"alt="logo"style="cursor: pointer" onclick="window.location.href='/'">
            </div>


            <div class="bar-top-right ">
                @guest
                    @if (Route::has('login'))
                        <a class="button-login" href="{{ route('login') }}">{{ 'Login' }}</a>
                    @endif
                    @if (Route::has('register'))
                        <a class="button-register" href="{{ route('register') }}">{{ 'Register' }}</a>
                    @endif
                @else
                    <ul>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" style="margin-top:10px;"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="/profiles/avatars/{{ Auth::user()->avatar }}" alt="author-image"
                                    class="img-xs rounded-circler" style="border-radius: 50%;width: 30px;height: 30px;">
                                <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ auth()->user()->name }}</p>
                                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="profileDropdown">
                                <a class="dropdown-item" href="/editprofile">
                                    {{ 'Edit account' }}
                                </a><br>
                                <a class="dropdown-item" href="/admin/home">
                                    {{ auth()->user()->name }}
                                </a><br>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ 'Logout' }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                @endguest
            </div>
        </div>
        <div class="header-bottom">
            <a href="/">Home</a>
            <a href="/showtime">Showtime</a>
            <a href="/comingsoon">Coming Soon</a>
            <a href="/contact">Contact Us</a>
        </div>

        {{-- bootstrap of logo --}}
    </header>
    <div class="wrapper-body">
        {{-- <main> --}}
        @yield('content')

        {{-- </main> --}}

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



    {{-- js popup video --}}
    <script>
        window.document.onkeydown = function(e) {
            if (!e) {
                e = event;
            }
            if (e.keyCode == 27) {
                lightbox_close();
            }
        }

        function lightbox_open() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            window.scrollTo(0, 0);
            document.getElementById('light').style.display = 'block';
            document.getElementById('fade').style.display = 'block';
            lightBoxVideo.play();
        }

        function lightbox_close() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            document.getElementById('light').style.display = 'none';
            document.getElementById('fade').style.display = 'none';
            lightBoxVideo.pause();
        }
    </script>

    {{-- alert Dismissed --}}
    {{-- <script>
        $(document).ready(function() {
            // show the alert
            $(".alert").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert").alert('close');
            });
        });
    </script> --}}

        {{-- ------page load------ --}}
        <script>
            $(window).on("load", function(e) {
                console.log('jhhhhhhhhh');
                $(".loading-body").fadeOut("slow");
            })
        </script>
</body>


</html>
