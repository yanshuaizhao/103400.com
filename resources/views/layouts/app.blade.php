
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.min.css" media="screen">

    <link rel="stylesheet" href="/assets/css/style.css">
    <script>

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-23019901-1']);
        _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>
<body>

<div class="wrapper">
    <header id="header" class="header fixed-top">
        <div class="container">
            <h1 class="logo">
                <a href="/">
                    <span class="logo-title">103400.COM</span>
                </a>
            </h1>
            <nav class="main-nav navbar navbar-expand-md navbar-dark" role="navigation">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        {{--<li class="nav-item dropdown">
                            <a class="active nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">前端编程 <i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Vue</a>
                                <a class="dropdown-item" href="#">HTML5</a>
                                <a class="dropdown-item" href="#">CSS</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="active nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">后端编程 <i class="fa fa-angle-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">GoLang</a>
                                <a class="dropdown-item" href="#">Python</a>
                                <a class="dropdown-item" href="#">C++</a>
                                <a class="dropdown-item" href="#">Php</a>
                            </div>
                        </li>--}}
                        <li class="nav-item"><a class="nav-link" href="/ming.html">IT名言</a></li>
                        <!--<li class="nav-item"><a class="nav-link login-trigger" data-toggle="modal" data-target="#login-modal">Log in</a></li>-->
                        <!--<li class="nav-item nav-item-cta last"><a class="nav-link btn btn-cta btn-cta-primary" data-toggle="modal" data-target="#signup-modal">Get Started</a></li>-->
                    </ul>
                </div>
            </nav>
        </div>
    </header>
</div>

<div class="container">
    @section('content')

    @show
</div>

<footer class="footer">
    <div class="bottom-bar">
        <div class="container">
            <div class="row">
                <small class="copyright col-md-6 col-12">Copyright <a href="/">@103400.com</a> All Rights Reserved.</small>
                <div class="social-container col-md-6 col-12">
                    <ul class="social list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="last list-inline-item"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/js/custom.js"></script>
</body>
</html>
