<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@extends('layout.head')
<body>
        <main>
            @yield('content')
        </main>
</body>
@extends('layout.javascript')
</html>
