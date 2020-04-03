<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet/less" href="css/admin-style.less">
    <link rel="stylesheet/less" href="@yield('content-style')">
    <script src="../node_modules/less/dist/less.min.js"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-rtl/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="../node_modules/normalize.css/normalize.css">
    {{-- <script src="../node_modules/jquery-pjax/jquery.pjax.js"></script> --}}
    <script src="js/admin-panel/admin-script.js"></script>
    <script src="@yield("js-script")"></script>

    <title>@yield('title')</title>
</head>

<body>

    {{-- header section --}}
    @section('header')

        <div class="d-flex header">
            <div class="admin-site"><h6>ادمین سایت</h6></div>
            <div class="admin-panel"><h6>پنل مدیریت</h6></div>
            <div class="see-site"><h6>دیدن سایت</h6></div>
        </div>

        <div class="d-flex breadcrumb-container">

            <div id="admin-name">
                <p>{{time()}}یاشار فولادگر</p>
            </div>

            <div id="breadcrumb">
                some breadcrumb
            </div>
        </div>

    @show

    {{-- sidebar section --}}

    @section('sidebar')

        <div class="d-flex">

            <div class="sidebar">

                <div class="sidebar-container">

                    <div class="search-bar">
                        <input type="text" class="form-control search-bar">
                    </div>

                </div>

                <hr>

                <div class="sidebar-container">

                    <div class="menu">

                        <div class="d-flex">
                            <h6 class="ml-auto">برنامه</h6>
                            <a class="toggle" href="#">پنهان</a>
                        </div>


                        <div class="menu-body">
                            <ul>
                                <li><a href="{{route('write-program')}}">نوشتن برنامه</a></li>
                                <li><a href="#">ادیت برنامه</a></li>
                                <li><a href="{{route('body-info')}}">اطلاعات بدنی</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="menu">

                        <div class="d-flex">
                            <h6 class="ml-auto">برنامه</h6>
                            <a class="toggle" href="#">پنهان</a>
                        </div>


                        <div class="menu-body">
                            <ul>
                                <li><a href="#">نوشتن برنامه</a></li>
                                <li><a href="#">ادیت برنامه</a></li>
                                <li><a href="#">حذف برنامه</a></li>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

        @show

        {{-- content section --}}

        @section('content')

            <div class="content">

                <div class="content-container">



        @show

    </div>


</body>
