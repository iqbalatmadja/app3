<?php /*
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href ="{{ asset('bootstrap-5.3.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
<body>
*/?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $pagetitle }}</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset("fontawesome-free/css/all.min.css") }}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset("css/adminlte.min.css") }}">
</head>
@yield('content')
<?php /*
<script src="{{ asset('bootstrap-5.3.2/dist/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
*/?>

