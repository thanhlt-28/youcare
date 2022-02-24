<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="assets/img/logo-new.png" type="image/png"> -->
    <!-- Favicons -->
    <link href="assets/img/favicon.gif" rel="icon">
    <link href="assets/img/logo-landscape.png" rel="logo-Landscape">
    <title> @yield('title', 'BrainCare')</title>
    @include('layouts.style')
</head>

<body>

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

</body>

</html>