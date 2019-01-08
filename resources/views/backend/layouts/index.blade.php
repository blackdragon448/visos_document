<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-euiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('theme/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/gentelella/vendors/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/gentelella/vendors/font-awesome/css/font-awesome.min.css')}}">
    @yield('custom-css')
</head>
<body class="hold-transtion skin-blue sidebar-mini">
<div class="wrapper">
@include('backend.layouts.partials.header')
@include('backend.layouts.partials.sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Page Header
        <small>Optional description</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>
<section class="content container-fluid">
    @yield('main-content')
</section>
@include('backend.layouts.partials.footer')
</div>
<script src="{{asset('theme/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('theme/gentelella/vendors/jquery/dist/jquery.min.js')}}"></script>
@yield('custom-scripts')
</body>
</html>