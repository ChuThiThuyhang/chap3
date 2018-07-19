<html>
    <head>
        <title> @yield('title') </title>
        <!-- Material Design fonts -->
<<<<<<< c2331992b3e96c3d94020c65104bb2110690631f
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <!-- Bootstrap Material Design -->
        <link rel="stylesheet" type="text/css" href="/css/bootstrap-material-design.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
        <style type="text/css">
=======
        <link rel = "stylesheet" type = "text/css" href = "//fonts.googleapis.com/css?family = Roboto:300,400,500,700">
        <link rel = "stylesheet" type = "text/css" href = "//fonts.googleapis.com/icon?family = Material+Icons">
        <!-- Bootstrap -->
        <link rel = "stylesheet" href = "{{asset('css/bootstrap.min.css')}}">
        <!-- Bootstrap Material Design -->
        <link rel = "stylesheet" href = "{{asset('css/bootstrap-material-design.css')}}">
        <link rel = "stylesheet" href = "{{asset('css/bootstrap.css')}}">
        <style type = "text/css">
>>>>>>> commit in develop
            .navbar-default {
                background-color: #009d89;
                border-color: #e7e7e7;
            }
            .navbar-default .navbar-nav > li > a {
                color: #fcfcfc;
            }
            .navbar-default .navbar-brand {
                color: #fcfcfc;
            }
            .navbar-default .navbar-nav > .active > a,
            .navbar-default .navbar-nav > .active > a:hover,
            .navbar-default .navbar-nav > .active > a:focus {
                color: #fcfcfc;
                background-color: #00a796;
            }
             .btn.btn-primary:not(.btn-raised), .input-group-btn .btn.btn-primary:not(.btn-raised) {
                background-color: #009688;
                color:#fff;
            }
            legend {
                border-bottom: 0;
                font-weight: bold;
            }
            .form-horizontal label {
                text-align: left !important;
            }
            .form-group label.control-label{
                font-weight: bold;
                color: #000;
                font-size: 13px;
            }
        </style>
    </head>
    <body>
        @include('shared.navbar')
        @yield('content')
<<<<<<< c2331992b3e96c3d94020c65104bb2110690631f
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="/js/ripples.min.js"></script>
        <script src="/js/material.min.js"></script>
=======
        <script src = "https://code.jquery.com/jquery-2.2.4.js" integrity = "sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin = "anonymous"></script>
        <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src = "/js/ripples.min.js"></script>
        <script src = "/js/material.min.js"></script>
>>>>>>> commit in develop
        <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
            });
        </script>
    </body>
<<<<<<< c2331992b3e96c3d94020c65104bb2110690631f
=======
</html>
>>>>>>> commit in develop
