<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>SIACLOUD</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    @yield('styles')
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

    <style>
        /* body {
          font-size: 1.1rem
        }
        
        label {
          font-size: 1rem
        } */
        #DataTables_Table_0_filter label input {
          font-size: 1rem
        }
      </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
    <form id="logout" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper" style="position: relative; top: -50px">
            
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">

                    <a href="{{ route('home') }}">
                        <div style="position: relative; top: 20px; color: {{ (Route::currentRouteName() == 'home') ? ' #5e50ee' : '#000' }};font-size: 24px; letter-spacing: -3px">SIACLOUD</div>
                    </a>

                    <li style="margin-left: 30px" class=" nav-item {{ (Route::currentRouteName() == 'shopify') ? 'active' : '' }}" ><a class="nav-link" href="{{ route('shopify') }}" ><i class="feather icon-circle"></i><span data-i18n="UI Elements">Shopify</span></a>
                        
                    </li>
                    <li class=" nav-item" ><a class="nav-link" href="#" ><i class="feather icon-circle"></i><span data-i18n="UI Elements">WooCommerce</span></a>
                        
                    </li>
                    <li class=" nav-item" ><a class="nav-link" href="#" ><i class="feather icon-circle"></i><span data-i18n="UI Elements">OpenCart</span></a>
                        
                    </li>
                    <li class=" nav-item" ><a class="nav-link" href="#" ><i class="feather icon-circle"></i><span data-i18n="UI Elements">Wix</span></a>
                        
                    </li>
                    
                        
                            
                    <div class="mr-auto float-right bookmark-wrapper d-flex align-items-center">
                        
                    </div>
                    <ul class="nav navbar-nav float-right">
                        {{-- <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">Admin</span><span class="user-status"></span></div><span><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a>
                                <div class=""></div><a class="dropdown-item" href="#" onclick="logout()" ><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li> --}}
                        <button class="btn btn-outline-danger" onclick="logout()" style="width:130px;height: 45px;top: 10px; position:relative"><i class="feather icon-power"></i> &nbsp;Logout</button>
                    </ul>
                    
                            
                        
                    
                    
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->

    @yield('content')
  


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script> 
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
   
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    @yield('scripts')
    <!-- END: Page JS-->

    <script>
        function logout(){
            $('#logout').submit();
        }
        
    </script>

</body>
<!-- END: Body-->

</html>