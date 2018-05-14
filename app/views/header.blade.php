<!DOCTYPE html>
<html>

<head>
    <title>SCIU</title>
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Instruction Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//tags -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/portal.css') }}" type="text/css" media="all">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">

</head>

<body>
<!-- header -->
<div class="header">
    <div class="agileits_top_menu">
        <div class="w3l_header_left">
            <ul>
                <li><i class="fa fa-phone" aria-hidden="true"></i>+1 213 204 3907</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@sciuniversity.com">info@sciuniversity.com</a></li>
            </ul>
        </div>
        <div class="w3l_header_right">
            <div class="w3ls-social-icons text-left">
                <a class="comment" href="#"><i class="fa fa-comment"></i></a>
                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="content white agile-info">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a href="/"><img src="{{ asset('images/sciu/SCUI_Logo_Black_Large.png') }}" style="width: 200px;"/></a>
                </div>
                <!--/.navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">
                            <li @if($page == 'home') {{ 'class=active'}} @endif><a href="/" class="effect-3">Home </a></li>
                            <li class="dropdown @if($page == 'mission' || $page == 'message' || $page == 'tuition' || $page == 'payment' || $page == 'directors') {{ 'active'}} @endif">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">About SCIU <b class="caret"></b></a>
                                <ul class="dropdown-menu" style="text-align: left;">
                                    <li @if($page == 'mission') {{ 'class=active'}} @endif><a href="/mission-visions-goals">Vision, Mission, Goals</a></li>
                                    <li @if($page == 'message') {{ 'class=active'}} @endif><a href="/message">Message</a></li>
                                    <li @if($page == 'programs_offered') {{ 'class=active'}} @endif><a href="/programs-offered">Program Offered</a></li>
                                    <li @if($page == 'tuition') {{ 'class=active'}} @endif><a href="/tuition-fee">Tuition Fee</a></li>
                                    <li @if($page == 'payment') {{ 'class=active'}} @endif><a href="/payment-options">Payment Option</a></li>
                                    <li @if($page == 'directors') {{ 'class=active'}} @endif><a href="/directors">Directors</a></li>
                                </ul>
                            </li>
                            <li class="dropdown @if($page == 'mba' || $page == 'bba') {{ 'active'}} @endif">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Programs <b class="caret"></b></a>
                                <ul class="dropdown-menu" style="text-align: left;">
                                    <li @if($page == 'bba') {{ 'class=active'}} @endif><a href="/bba">BBA</a></li>
                                    <li @if($page == 'mba') {{ 'class=active'}} @endif><a href="/mba">MBA</a></li>
                                </ul>
                            </li>
                            <li @if($page == 'accreditation') {{ 'class=active'}} @endif><a href="/accreditation" class="effect-3">Accreditation</a></li>
                            <li class="dropdown @if($page == 'e_learning' || $page == 'e-library') {{ 'active'}} @endif">
                                <a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Learning <b class="caret"></b></a>
                                <ul class="dropdown-menu" style="text-align: left;">
                                    <li @if($page == 'e-learning') {{ 'active'}} @endif><a href="/e-learning">E-Learning</a></li>
                                    <li @if($page == 'e-library') {{ 'active'}} @endif><a href="/e-library">E-Library</a></li>
                                </ul>
                            </li>
                            <li @if($page == 'application') {{ 'active'}} @endif><a href="/application" class="effect-3">Application</a></li>
                            <li @if($page == 'scholarship') {{ 'active'}} @endif><a href="/scholarship" class="effect-3">Scholarship</a></li>
                            <li @if($page == 'contact') {{ 'active'}} @endif><a href="/contact" class="effect-3">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </nav>
    </div>
</div>
