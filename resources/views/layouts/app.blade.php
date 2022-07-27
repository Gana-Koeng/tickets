<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<header >

    
     <img class="logo"src="../img/Momo.jpg"alt="logo" href="/homepage" href="{{ url('/homepage') }}">

     <div class="cta">
        
        <a class="buttonsign" href="{{ route('login') }}"><button class="sign">Sign in/out</button></a>

        <a href="{{ route('register') }}"><button  class="register">Register</button></a>
   

     </div>

     
</header>
<body>
    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
