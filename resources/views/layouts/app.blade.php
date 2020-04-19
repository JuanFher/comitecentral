<!doctype html>
<html lang="en" dir="ltr">
<head>
    @include('layouts.includes.head')

    </head>
    <body class="app sidebar-mini rtl">
        <div id="global-loader" ></div>
        <div class="page">
            <div class="page-main">
                @include('layouts.includes.header')

                <!-- Sidebar menu-->
                @include('layouts.includes.sidebar')

                <div class="app-content  my-3 my-md-5">
                    <div class="side-app">
                        @yield('bradcrumbs')

                        @yield('content')
                    </div>
                    <!--footer-->
                    @include('layouts.includes.footer')
                    <!-- End Footer-->
                </div>
            </div>
        </div>

        <!-- Back to top -->
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- Dashboard Core -->
        @include('layouts.includes.foot')

    </body>


</html>