<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="flex p-4 border-b dc-header-broder-color items-center">
            <div class="min-w-max">
                <a href="{{route('home')}}" class="flex items-center">
                    <img class="mr-4" src="{{asset('assets/img')}}/logo-icon.svg" alt="">
                    <h1 class="font-bold logo-heading">{{ config('app.name') }}</h1>
                </a>
            </div>

            <div class="w-full flex justify-end dc-nav-links">
                <a href="">Contact</a>
                <a href="">Help</a>
                <a href="">Website</a>
                <a class="primary-color font-bold" href="">Login</a>
            </div>
        </div>



        <div class="login-page-bg bg-no-repeat bg-right-top flex items-center">
            <div class="flex-1">
                <img src="{{asset('assets/img')}}/login-icon.png" alt="">
            </div>

            <div class="flex-1 py-10 flex justify-center">
                <div class="dc-login-box px-16 py-20 bg-white shadow-xl shadow-gray-200">
                    <h3 class="mb-1">Welcome Back!</h3>
                    <p>Log in your account & Manage your system</p>
                    <form  method="POST" action="{{ route('login') }}" class="mt-12">
                        @csrf
                        <div class="border-b dc-header-broder-color flex items-center mb-4">
                            <div class="min-w-max mr-3">
                                <img src="{{'assets/img/Iconly/Light'}}/profile.svg" alt="">
                            </div>
                            <input placeholder="Email" name="email" class="w-full p-3 border-none focus:outline-none focus:border-none focus:ring-0" type="email">
                        </div>
                       @error('email')
                        <p class="text-red-600">{{$message}}</p>
                        @enderror

                        <div class="border-b dc-header-broder-color flex items-center mb-4">
                            <div class="min-w-max mr-3">
                                <img src="{{'assets/img/Iconly/Light'}}/lock.svg" alt="">
                            </div>
                            <input placeholder="Password" name="password" class="w-full p-3 border-none focus:outline-none focus:border-none focus:ring-0" type="password">
                        </div>
                        <a class="text-gray-600 text-sm italic" href="#">Forget Password?</a>
                        <div class="flex justify-between items-center mt-14 mb-4">
                            <span class="text-gray-600 text-sm">Save Password</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer" checked>
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            </label>
                        </div>
                        <button type="submit" class="dc-btn">Log In</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
