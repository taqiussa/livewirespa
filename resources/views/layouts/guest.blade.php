<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Logo -->
    <link rel="icon" href="{{ asset('img/logokendal.png') }}" type="image/png">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="w-full container mx-auto p-6">
        <div class="w-full flex items-center justify-between">
            <a class="flex items-center text-teal-500 no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                href="#">
                <svg style="width:50px;height:50px" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M13,7H15V15A2,2 0 0,1 13,17H11A2,2 0 0,1 9,15V14H11V15H13V7M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M5,5V19H19V5H5Z" />
                </svg> JBT | Nawangsari
            </a>
        </div>
    </div>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
</body>

</html>
