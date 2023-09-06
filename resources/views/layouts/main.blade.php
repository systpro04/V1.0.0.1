<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SYSTEM1.0</title>

    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.1.0') }}" rel="stylesheet" />

</head>

<body class="body">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"id="sidenav-main">
        @include('layouts.partials.sidebar')
    </aside>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg mt-1">
        <main class="main-content border-radius-lg">
            @include('layouts.partials.navbar')
        </main>

        <div class="container-fluid">
            <div class="row min-vh-80 h-100">
              <div class="col-12">
                @yield('content')
              </div>
          </div>
            @include('layouts.partials.footer')
    </main>

    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf("Win") > -1;
        if (win && document.querySelector("#sidenav-scrollbar")) {
            var options = {
                damping: "0.5",
            };
            Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
        }
    </script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.1.0') }}"></script>

</body>
<style>
    .body {
        background-image: linear-gradient(rgba(245, 246, 252, 0.363), rgba(117, 19, 93, 0.555)), url('{{ asset('image/bg.jpg') }}');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
</style>
</html>
