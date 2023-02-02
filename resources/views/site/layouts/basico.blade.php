<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        
    </head>

    <body>
        @include('site.layouts.partials.top')

        @yield('conteudo')
    </body>
</html>