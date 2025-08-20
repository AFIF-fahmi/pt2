<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="https://kit.fontawesome.com/941d44d639.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <style>
        [x-cloak] {
            display: none !important;
        }

        ::selection {
            background-color: #4C7C9C;
            color: #F8F8F8;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-primary-bckg">

    <div class="z-50">
        @include('components.navbar')
    </div>

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    @stack('scripts')
</body>

</html>