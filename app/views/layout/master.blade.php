<!DOCTYPE html>
<html>
<head>
    <title> </title>
    {{HTML::style('css/bootstrap.min.css')}}
    {{HTML::style('css/bootstrap-theme.min.css')}}

    <link href='http://fonts.googleapis.com/css?family=Droid+Sans|Droid+Serif' rel='stylesheet' type='text/css'>

    {{HTML::style('css/style.css')}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body>
<div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <!-- <div class="absolute-wrapper"> </div> -->
    <!-- Menu -->
    <div class="side-menu">

        @include('layout.sidenav')

    </div>

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="side-body">

            @yield('content')
        </div>
    </div>
</div>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
{{HTML::script('js/bootstrap.min.js')}}
{{HTML::script('jst/script.js')}}
</body>
</html>