<!doctype html>
<html lang="en">

<head>
    @include('layouts.style.css')
</head>

<body class="stretch-layout small-navigation">

    <!-- begin::preloader-->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- end::preloader -->

    <!-- BEGIN: Sidebar Group -->
    @include('layouts.headerSettings')
    <!-- END: Sidebar Group -->

    <!-- begin::main -->
    <div class="layout-wrapper">
        @include('layouts.header')
        <div class="content-wrapper">
            <!-- begin::navigation -->
            @include('layouts.sidebar')
            <!-- end::navigation -->

            <div class="content-body" style="overflow-y:auto ">
                <!-- Add this hidden input field to your HTML -->
                <input type="hidden" id="userName" value="{{ auth()->user()->name }}">

                @yield('content')
                @include('layouts.footer')
            </div>
        </div>
    </div>
    <!-- end::main -->
    @include('layouts.script.js')
</body>

</html>
