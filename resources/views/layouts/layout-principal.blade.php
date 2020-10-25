<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('bibliotecas/font-awesome/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('bibliotecas/font-awesome/css/brands.css')}}">
    <link rel="stylesheet" href="{{asset('bibliotecas/font-awesome/css/solid.css')}}">
    <link rel="stylesheet" href="{{asset('bibliotecas/datatables/dataTables.bootstrap4.css')}}">
    <title>@yield('title')</title>
</head>
<body>

    <div class="container" style="margin-top: 20px">
        @include('layouts.flash-message')
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="{{asset('bibliotecas/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('bibliotecas/scripts/scripts.js')}}"></script>
    <script src="{{asset('bibliotecas/scripts/jquery.inputmask.bundle.js')}}"></script>

</body>
</html>
