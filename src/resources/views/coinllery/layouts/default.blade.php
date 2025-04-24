<!DOCTYPE html>
<html class="no-js" dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('coinllery/_inc/head')
    </head>
    <body>
        <main class="main-container">
            <header class="container-fluid">@include('coinllery/_inc/header')</header>
            @yield('content')
            <footer class="container-fluid text-center pt-5">@include('coinllery/_inc/footer')</footer>
		</main>
        @include('coinllery/_inc/libs')
        @include('coinllery/_inc/tracking')
    </body>
</html>
