<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="cache-control" content="public" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="{{ $sPageDescription ?? ($sPageDescription ?? '') }}">
        
        <title>{{ $sPageTitle ??( $sPageTitle ?? 'Bootstrap') }}</title>
        
        <!-- Bootstrap core CSS -->
        {!! Html::style($sPageStyle ?? '5/css/style.css') !!}
        @yield('CSS')
    </head>
    <body>
        
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check" viewBox="0 0 16 16">
              <title>Check</title>
              <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
            </symbol>
        </svg>

        @include('5.header')

        <main>
            @yield('content')
        </main>

        @include('5.footer')
        
        {!! Html::script($sPageScript ?? '5/js/script.js') !!}

        @yield('JS')
    </body>
</html>
