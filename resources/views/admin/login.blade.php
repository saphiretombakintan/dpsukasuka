<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="{{asset('front-end/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('front-end/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('front-end/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('front-end/css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">DP+</h1>

            </div>
            <h3>Welcome to DP+</h3>
            
            <form class="m-t" role="form" action="index.html">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
            <p class="m-t"> <small>Tanami -Legok Tangerang - &copy; 2021</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('front-end/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('front-end/js/popper.min.js')}}"></script>
    <script src="{{asset('front-end/js/bootstrap.js')}}"></script>

</body>

</html>
