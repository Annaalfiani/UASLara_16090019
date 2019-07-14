
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>UKM RANA 9</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="{{ asset('public/landing/img/Logo-Rana.jpg')}}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{ asset('public/landing/img/apple-touch-icon.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('public/landing/img/apple-touch-icon-72x72.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('public/landing/img/apple-touch-icon-114x114.png')}}">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{ asset('public/landing/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/landing/fonts/font-awesome/css/font-awesome.css')}}">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="{{ asset('public/landing/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/landing/css/nivo-lightbox/nivo-lightbox.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/landing/css/nivo-lightbox/default.css')}}">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
@include('Dashboard.partials._navbar')
<!-- Header -->
@include('Dashboard.partials._header')
<!-- About Section -->
@include('Dashboard.about')
<!-- Restaurant Menu Section -->
<!-- @include('Dashboard.partials._event') -->
<!-- Portfolio Section -->
@yield('content')

@include('Dashboard.partials._team')

<!-- Contact Section -->
@include('Dashboard.partials._contact')
<script type="text/javascript" src="{{ asset('public/landing/js/jquery.1.11.1.js')}}"></script> 
<script type="text/javascript" src="{{ asset('public/landing/js/bootstrap.js')}}"></script> 
<script type="text/javascript" src="{{ asset('public/landing/js/SmoothScroll.js')}}"></script> 
<script type="text/javascript" src="{{ asset('public/landing/js/nivo-lightbox.js')}}"></script> 
<script type="text/javascript" src="{{ asset('public/landing/js/jquery.isotope.js')}}"></script> 
<script type="text/javascript" src="{{ asset('public/landing/js/jqBootstrapValidation.js')}}"></script> 
<script type="text/javascript" src="{{ asset('public/landing/js/contact_me.js')}}"></script> 
<script type="text/javascript" src="{{ asset('public/landing/js/main.js')}}"></script>
</body>
</html>
