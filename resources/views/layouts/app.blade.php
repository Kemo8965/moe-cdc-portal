<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Digital Content Developer (CDC) </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/auth/images/favicon.ico">

        <!-- jquery.vectormap css -->
        <link href="assets/auth/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        
        <!-- twitter-bootstrap-wizard css -->
         <link rel="stylesheet" href="assets/libs/twitter-bootstrap-wizard/prettify.css">

        <!-- DataTables -->
        <link href="assets/auth/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/auth/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  

        <!-- Bootstrap Css -->
        <link href="assets/auth/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/auth/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/auth/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}} 
    </head>
    <body data-topbar="dark">


        <!-- Begin page -->
        <div id="layout-wrapper">
    
            <header id="page-topbar">
    
                <div id="navbar">
                    @include('components.navbars.g10-navbar')
                </div>
            </header>
    
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">
    
                <div data-simplebar class="h-100">
    
                    <div id="sidebar">
                        @include('components.sidebars.g10-sidebar')
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
    
    
    
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div id="app" class="main-content">
    
                <div class="page-content">
                    <div class="container-fluid">
    
                    @yield('content')
    
                    </div>
                    <!-- End Page-content -->
    
    
                    <div id="footer">
                        @include('components.includes.footer')
                    </div>
    
                </div>
                <!-- end main content-->
    
            </div>
            <!-- END layout-wrapper -->
    
    
    
    
    
    
    
            <!-- JAVASCRIPT -->
            <script src="assets/auth/libs/jquery/jquery.min.js"></script>
            <script src="assets/auth/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/auth/libs/metismenu/metisMenu.min.js"></script>
            <script src="assets/auth/libs/simplebar/simplebar.min.js"></script>
            <script src="assets/auth/libs/node-waves/waves.min.js"></script>

             <!-- Plugins css -->
            <link href="assets/auth/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

            <!-- twitter-bootstrap-wizard js -->
            <script src="assets/auth/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

            <script src="assets/auth/libs/twitter-bootstrap-wizard/prettify.js"></script>

            <!-- form wizard init -->
            <script src="assets/auth/js/pages/form-wizard.init.js"></script>

            <!-- apexcharts -->
            <script src="assets/auth/libs/apexcharts/apexcharts.min.js"></script>
    
            <!-- jquery.vectormap map -->
            <script src="assets/auth/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="assets/auth/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>
    
            <!-- Required datatable js -->
            <script src="assets/auth/libs/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="assets/auth/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    
            <!-- Responsive examples -->
            <script src="assets/auth/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="assets/auth/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    
            <script src="assets/auth/js/pages/dashboard.init.js"></script>
    
            <!-- App js -->
            <script src="assets/auth/js/app.js"></script>
    
            <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    
            
    </body>
</html>
