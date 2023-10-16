<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Virtual Tour
    </title>
    <!-- CSS files -->
    <link href="/assets/css/tabler.min.css?1684106062" rel="stylesheet" />
    <link href="/assets/css/tabler-flags.min.css?1684106062" rel="stylesheet" />
    <link href="/assets/css/tabler-payments.min.css?1684106062" rel="stylesheet" />
    <link href="/assets/css/tabler-vendors.min.css?1684106062" rel="stylesheet" />
    <link href="/assets/css/demo.min.css?1684106062" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <script src="/assets/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
        @include('sweetalert::alert')
        <!-- Navbar -->
        @include('public.layouts.header')

        <div class="page-wrapper">
            <!-- Page header -->
            @yield('content')
            @include('public.layouts.footer')
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="/assets/js/tabler.min.js?1684106062" defer></script>
    <script src="/assets/js/demo.min.js?1684106062" defer></script>
    @stack('js')
</body>

</html>
