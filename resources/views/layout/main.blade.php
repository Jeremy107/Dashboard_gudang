<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- MyStyle --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Cashier App | {{ $title }}</title>

    <!-- Tambahkan skrip JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>
    <div class="d-flex">
        @include('partials.side_bar')
        <div class="bg-light" style="height: 100vh; padding-left: 280px; width: 100vw">
            <div class="p-4 bg-primary d-flex justify-content-between align-items-start" style="height: 10rem;">
                <div class="d-flex align-items-center gap-3">
                    <i class="bi {{ $icon }} flex-item" style="color: white; font-size: 24px;"></i>
                    <h4 class="text-light flex-item m-0">{{ $title }}</h4>
                </div>
                <h4 class="text-white m-0 text-center">Halo,
                    {{ auth()->user()->role === 'Admin' ? auth()->user()->role : '' }}
                    {{ explode(' ', auth()->user()->name)[0] }}
                </h4>
            </div>
            @yield('container')
        </div>
    </div>

    <script src="{{ asset('script/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
