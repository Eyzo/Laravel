<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{!! asset('theme/PurpleAdmin-Free-Admin-Template/vendors/iconfonts/mdi/css/materialdesignicons.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('theme/PurpleAdmin-Free-Admin-Template/vendors/css/vendor.bundle.base.css') !!}">
    <!-- endinject -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{!! asset('theme/PurpleAdmin-Free-Admin-Template/css/style.css') !!}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{!! asset('theme/PurpleAdmin-Free-Admin-Template/images/favicon.png') !!}" />
</head>
<body>
<div class="container-scroller">


    @include('theme/navbarAdmin')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        @include('theme/sidebarAdmin')


        <div class="content-wrapper">
            @yield('content')
        </div>


        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{!! asset('theme/PurpleAdmin-Free-Admin-Template/vendors/js/vendor.bundle.base.js') !!}"></script>
<script src="{!! asset('theme/PurpleAdmin-Free-Admin-Template/vendors/js/vendor.bundle.addons.js') !!}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{!! asset('theme/PurpleAdmin-Free-Admin-Template/js/off-canvas.js') !!}"></script>
<script src="{!! asset('theme/PurpleAdmin-Free-Admin-Template/js/misc.js') !!}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{!! asset('theme/PurpleAdmin-Free-Admin-Template/js/dashboard.js') !!}"></script>
<!-- End custom js for this page-->
</body>

</html>
