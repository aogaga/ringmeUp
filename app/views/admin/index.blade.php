<!DOCTYPE html>
<html>
<head>
    <title> </title>
    {{HTML::style('css/bootstrap.min.css')}}
    {{HTML::style('css/bootstrap-theme.min.css')}}
    {{HTML::style('css/screen.css')}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>





<div class="container">
    @include('layout.alerts')
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">

                <div id="my-tab-content" class="tab-content">
                    <div class="tab-pane active" id="login">
                        <img class="profile-img" src="{{asset("img/photo.png")}}" alt="">



                        {{Form::open(array('class'=>'form-signin', 'url'=>'/login'))}}

                        {{Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address', 'required'=>'', 'autofocus'=>'') )}}

                        {{Form::password('password',  array('class'=>'form-control', 'placeholder'=>'Password', 'required'=>'') )}}


                        <input type="submit" class="btn btn-lg btn-default btn-block" value="Sign In" />
                        {{Form::close()}}
                        <p class="text-center"><a href="#login" data-toggle="tab">Forgot Password</a></p>



                    </div>
                </div>




            </div>
        </div>
    </div>

</div>







<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
{{HTML::script('js/bootstrap.min.js')}}


</body>
</html>