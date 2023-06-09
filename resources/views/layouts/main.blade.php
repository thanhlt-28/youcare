<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.gif')}}" rel="icon">
    <link href="{{asset('assets/img/logo-landscape.png')}}" rel="logo-Landscape">
    <title> @yield('title', 'YouCare')</title>
    @include('layouts.style')
</head>

<body>

    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "914334525567824");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v15.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <header id="header" class="fixed-top d-flex align-items-center">
        @include('layouts.nav')
    </header>

    <main id="main">
        @yield('content')
    </main>

    <footer id="footer">
        @include('layouts.footer')
    </footer>

    @include('layouts.script')

    @yield('page-script')

    <script>
        $(document).ready(function() {

            $(".item").click(function() {
                $(this).addClass("active").siblings().removeClass("active");
            });
        });
    </script>
</body>

</html>
