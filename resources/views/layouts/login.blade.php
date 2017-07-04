
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js">

<head>

    <meta charset="utf-8">
    <title>{{config('appname', 'Laravel')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
    <link rel="stylesheet" href="{{asset('app/css/login/reset.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/login/supersized.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/login/style.css')}}">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="page-container">

        @yield('form')
</div>

<!-- Javascript -->
<script src="{{asset('app/js/jquery-1.8.2.min.js')}}"></script>
<script src="{{asset('app/js/supersized.3.2.7.min.js')}}"></script>
<script src="{{asset('app/js/supersized-init.js')}}"></script>
<script src="{{asset('app/js/scripts.js')}}"></script>

</body>

</html>

