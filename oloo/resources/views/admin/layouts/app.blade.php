<html>
<head>
<title>Oloo Complaint Site @yield('title')</title>
@include('admin.admin.common.head')
</head>
<body>

<div class="container-scroller">

    @include('admin.admin.common.nav-bar')
    @include('admin.admin.common.sidebar')
    <div class="main-panel">
     <div class="content-wrapper">
       @yield('content')
     </div>
    @include('admin.admin.common.footer')
</body>
</html>