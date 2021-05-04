<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/favicon.png">
    <title><?= $fetch_basic_info['company_name'] ?></title>
    <!-- This page plugin CSS -->
    <link href="<?= base_url() ?>assets/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>dist/css/style.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/libs/select2/dist/css/select2.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/extra-libs/prism/prism.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/libs/summernote/dist/summernote-bs4.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/extra-libs/css-chart/css-chart.css">

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="javascript:void(0)">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?= base_url() ?>assets/images/download.png" style="width: 50px;height:30px " alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img style="width: 50px;height:30px " src="<?= base_url() ?>assets/images/download.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img style="width: 75px;height: auto " src="<?= base_url() ?>assets/images/download2.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img style="width: 135px;height: auto  " src="<?= base_url() ?>assets/images/download2.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url() ?>uploads/<?= $this->session->userdata('tasker_profile_pic') ?>" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white mb-2">
                                    <div class=""><img src="<?= base_url() ?>uploads/<?= $this->session->userdata('tasker_profile_pic') ?>" alt="user" class="img-circle" width="60"></div>
                                    <div class="ml-2">
                                        <h4 class="mb-0"><?= $this->session->userdata('tasker_name'); ?></h4>
                                        <p class=" mb-0"><?= $this->session->userdata('tasker_email'); ?></p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="<?= base_url() ?>tasker_profile"><i class="ti-user mr-1 ml-1"></i> My Profile</a>


                                <!-- <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings mr-1 ml-1"></i> Account Setting</a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url() ?>tasker_logout"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>

                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->


                        <!-- User Profile-->

                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Dashboard</span></li>

                        <li class="sidebar-item "><a href="<?= base_url() ?>tasker_dashboard" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard </span></a></li>



                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Projects Setting</span></li>


                        <li class="sidebar-item selected "> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-tune-vertical"></i><span class="hide-menu">Projects </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">

                                <li class="sidebar-item "><a href="<?= base_url() ?>index.php/add_advertisement" class="sidebar-link"><i class="mdi mdi-inbox-arrow-down"></i><span class="hide-menu">Add Project </span></a></li>

                                <li class="sidebar-item "><a href="<?= base_url() ?>index.php/view_tasker_advertisement" class="sidebar-link"><i class="mdi mdi-file-video"></i><span class="hide-menu">View Projects </span></a></li>


                            </ul>
                        </li>
                        <li class="sidebar-item selected "> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert-box"></i><span class="hide-menu">Bids </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">

                                <li class="sidebar-item "><a href="<?= base_url() ?>index.php/tasker_bids_stats" class="sidebar-link"><i class="mdi mdi-inbox-arrow-down"></i><span class="hide-menu">View Bids </span></a></li>

                                <li class="sidebar-item "><a href="<?= base_url() ?>index.php/payments_tasker" class="sidebar-link"><i class="mdi mdi-pencil-box-outline"></i><span class="hide-menu">Payments </span></a></li>

                            </ul>
                        </li>

                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Basic Info</span></li>

                        <li class="sidebar-item "><a href="<?= base_url() ?>tasker_profile" class="sidebar-link"><i class="mdi mdi-account-multiple"></i><span class="hide-menu"> Profile </span></a></li>


                        <!-- <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu">Manage Advertisements</span></li> -->





                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>