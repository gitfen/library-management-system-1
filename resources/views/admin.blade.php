<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title', "LMS")</title>
    <meta name="description" content="Library Management System">
    <meta name="author" content="Ariful Haque">

    @if(getenv('APP_ENV')=='local')
        <link rel="stylesheet" href="{{ URL::to('/') }}/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ URL::to('/') }}/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ URL::to('/') }}/assets/bootstrap-datepicker/bootstrap-datepicker3.min.css">

    @else
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
              integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw=="
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.css">
    @endif

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/theme/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/theme/dist/css/skins/skin-blue.min.css">
    {{--<link rel="stylesheet" href="{{ URL::to('/') }}/assets/app/custom.css">--}}

</head>
@if (Auth::guest())
<body class="login-page">
    @section('login-content')
    @show
@else
    <body class="skin-blue sidebar-mini">
    <div class="wrapper">
        @include('admin.templates.header')
        @include('admin.templates.left-sidebar')
        <div class="content-wrapper">
            @section('content')
            @show
        </div>
        @include('admin.templates.footer')
    </div>
@endif

<!-- JS SCRIPTS -->
@if(getenv('APP_ENV')=='local')

    <script src="{{ URL::to('/') }}/vendor/vendor.bundle.js?v0.11.0" type="application/javascript"></script>
    <script src="{{ URL::to('/') }}/vendor/bundle.js?v0.11.0" type="application/javascript"></script>

@elseif(getenv('APP_ENV')=='production')

    <script src="{{ URL::to('/') }}/vendor/vendor.bundle.min.js?v0.11.0" type="application/javascript"></script>
    <script src="{{ URL::to('/') }}/vendor/bundle.min.js?v0.11.0" type="application/javascript"></script>

@endif

</body>
</html>