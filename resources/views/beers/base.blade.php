<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>Laravel Base Crud</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="{{ asset('js/app.js') }}" defer></script>
</head>
    <body>
        @yield('create-content')
        @yield('show-content')
        @yield('index-content')
        @yield('edit-content')
    </body>
</html>
