<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("Admin Panel")</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{asset('assets')}}/admin/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/css/style.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/css/main-style.css" rel="stylesheet" />

@yield("head")
</head>
<body>
@include("admin.header")
@section('sidebar')
    @include("admin.sidebar")
@endsection

@yield('content')

@include("admin.footer")
@yield('foot')
</div>
<!-- end wrapper -->
</body>
</html>
