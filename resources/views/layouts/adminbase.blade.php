<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>

    <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Blank Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/main.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/theme.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/MoneAdmin.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/layout2.css" rel="stylesheet" />
    <!-- END PAGE LEVEL  STYLES -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets')}}/admin https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="{{asset('assets')}}/admin https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
@yield('head')
</head>


<!-- BEGIN BODY-->
<body class="padTop53 " >
@include("admin.header")

@section('sidebar')
    @include("admin.sidebar")
@show

@yield('content')
@include('admin.footer')
@yield('foot')

</body>
</html>
