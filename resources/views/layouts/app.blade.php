<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body class="font-sans antialiased">
    <!--Header Section-->
    <div class="flex py-4 padding-x-26 border-b dc-header-broder-color items-center">
        <div class="flex-1">
            <div class="min-w-max">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img class="mr-4" src="{{ asset('assets/img') }}/logo-icon.svg" alt="">
                    <h1 class="font-bold text-2xl logo-heading">{{ config('app.name') }}</h1>
                </a>
            </div>
        </div>

        <div class="w-full flex-1 flex items-center justify-end">
            <form action="" class="w-full">
                <div class="flex">
                    <input type="search" placeholder="Search by anyThing"
                        class="w-full gray-bg border-none focus:outline-none focus:ring-0">
                    <button class="inline-block bg-blue-600 border-none px-3"><img
                            src="{{ asset('assets/img/Iconly/Light/search.svg') }}" alt=""></button>
                </div>
            </form>
            <span class="w-0.5 h-10 bg-gray-100 inline-block  mx-8"></span>
            <a href="#" class="pr-4">
                <img src="{{ asset('assets/img/Iconly/Light/notification.svg') }}" alt="">
            </a>
            <div class="profile-bg w-10 h-10 bg-center bg-contain bg-no-repeat rounded-full"></div>
        </div>
    </div>
    <!--End Header Section-->

    {{$slot}}

</body>

</html>
