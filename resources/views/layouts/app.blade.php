<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">
        <meta name="currency" content="@yield('currency')" />
        <meta name="twitter:site" content="@yield('twitterSite')" />
        <meta name="twitter:author" content="@yield('twitterCreator')" />
        <meta name="google:condition" content="@yield('googleCondition')" />
        <meta name="google:age-category" content="@yield('googleAgeCategory')" />
        <meta name="google:gender-category" content="@yield('googleGenderCategory')" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Laravel')}} | @yield('title')</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="antialiased">
       <livewire:header /> 
       <livewire:banner /> 

        @yield('content')

       @livewireScripts
    </body>
</html>
