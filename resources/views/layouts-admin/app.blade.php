<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../../../admin-fix/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../../../admin-fix/assets/images/favicon.png" type="image/x-icon">
    <title>Admin Dashboard</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../admin-fix/assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../../../admin-fix/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../../../admin-fix/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../../../admin-fix/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../../../admin-fix/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../../../admin-fix/assets/css/vendors/scrollbar.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../../../admin-fix/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../../../admin-fix/assets/css/style.css">
    <link id="color" rel="stylesheet" href="../../../admin-fix/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../../../admin-fix/assets/css/responsive.css">
    @yield('y')
</head>



<body>

    <div class="tap-top"><i data-feather="chevrons-up"></i></div>

    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        @include('layouts-admin.header')
        <div class="page-body-wrapper">
            @include('layouts-admin.sidebar')
            <div class="page-body">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('layouts-admin.footer')
        </div>

    </div>








    <script src="../../../admin-fix/assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../../../admin-fix/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../../../admin-fix/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../../../admin-fix/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../../../admin-fix/assets/js/scrollbar/simplebar.js"></script>
    <script src="../../../admin-fix/assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../../../admin-fix/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../../../admin-fix/assets/js/sidebar-menu.js"></script>
    <script src="../../../admin-fix/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../../../admin-fix/assets/js/script.js"></script>

    <!-- login js-->
    <!-- Plugin used-->
    @yield('pagescript')
</body>

</html>