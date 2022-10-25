<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AlHazmia</title>
    <link href="{{ asset('img/logo.png') }}" rel="icon">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')


</head>

<body>
    <div id="preloader"></div>
    <a href="https://api.whatsapp.com/send?phone=966558483176" id="whatsup_icon"><i class="bi bi-whatsapp"></i></a>
    {{-- <button id="whatsup_icon"><i class="bi bi-chevron-up"></i></button> --}}
    @include('layouts.header')

    @yield('main')
    @include('layouts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>



    <script>
        const observerw = lozad(); // lazy loads elements with default selector as '.lozad'

        window.addEventListener('load', function() {
            setTimeout(function() {
                $("#part2").load('{{LaravelLocalization::getCurrentLocale()}}/part2');
                observerw.observe();
            }, 3000);


        })
    </script>
</body>

</html>