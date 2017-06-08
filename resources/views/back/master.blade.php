<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('back.partials.nav')
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    @include('back.partials.sidebar')
                </div>
                <div class="col-md-10">
        @includeWhen(session()->has('success'), 'back.partials.success')
        @includeWhen(session()->has('errors'), 'back.partials.errors')
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- <script src="/js/simplemde.min.js"></script> -->
    @yield('js')
</body>
</html>
