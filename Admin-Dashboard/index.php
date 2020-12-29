<!DOCTYPE html>
<?php 
include("conn.php");
include("session.php"); 
?>
<html lang="en">

<head>
    <title>NU-Expense Approval & Reimbursement System</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
    <meta name="author" content="Potenza Global Solutions" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- app favicon -->
    <link rel="shortcut icon" href="assets/img/nirma_logo.ico">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- plugin stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
    <!-- app style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <!-- begin app -->
    <div class="app">
        <!-- begin app-wrap -->
        <div class="app-wrap">
            <!-- begin pre-loader -->
            <div class="loader">
                <div class="h-100 d-flex justify-content-center">
                    <div class="align-self-center">
                        <img src="assets/img/loader/loader.svg" alt="loader">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
            <header class="app-header top-bar">
                <!-- begin navbar -->
                <nav class="navbar navbar-expand-md">

                    <!-- begin navbar-header -->
                    <div class="navbar-header d-flex align-items-center">
                        <a href="javascript:void:(0)" class="mobile-toggle"><i class="ti ti-align-right"></i></a>
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/img/nimlogo.png" class="img-fluid logo-desktop" alt="logo" />
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-align-left"></i>
                    </button>
                    <!-- end navbar-header -->
                    <!-- begin navigation -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="navigation d-flex">
                            <ul class="navbar-nav nav-left">
                                <li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link sidebar-toggle">
                                        <i class="ti ti-align-right"></i>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="javascript:void(0)" class="nav-link " id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop Down
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item nav-link" href="index.php">Back To Index</a>
                                    </div>
                                </li>
                                <li class="nav-item full-screen d-none d-lg-block" id="btnFullscreen">
                                    <a href="javascript:void(0)" class="nav-link expand">
                                        <i class="icon-size-fullscreen"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav nav-right ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fe fe-bell"></i>
                                        <span class="notify">
                                                    <span class="blink"></span>
                                        <span class="dot"></span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu extended animated fadeIn" aria-labelledby="navbarDropdown">
                                        <ul>
                                            <li class="dropdown-header bg-gradient p-4 text-white text-left">Notifications
                                                <a href="#" class="float-right btn btn-square btn-inverse-light btn-xs m-0">
                                                    <span class="font-13"> Clear all</span></a>
                                            </li>
                                            <li class="dropdown-body min-h-240 nicescroll">
                                                <ul class="scrollbar scroll_dark max-h-240">
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <div class="bg-type bg-type-md">
                                                                        <span>HY</span>
                                                                    </div>
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">New registered user</p>
                                                                    <small>Just now</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <div class="bg-type bg-type-md bg-success">
                                                                        <span>GM</span>
                                                                    </div>
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">New invoice received</p>
                                                                    <small>22 min</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <div class="bg-type bg-type-md bg-danger">
                                                                        <span>FR</span>
                                                                    </div>
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Server error report</p>
                                                                    <small>7 min</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <div class="bg-type bg-type-md bg-info">
                                                                        <span>HT</span>
                                                                    </div>
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Database report</p>
                                                                    <small>1 day</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="notification d-flex flex-row align-items-center">
                                                                <div class="notify-icon bg-img align-self-center">
                                                                    <div class="bg-type bg-type-md">
                                                                        <span>DE</span>
                                                                    </div>
                                                                </div>
                                                                <div class="notify-message">
                                                                    <p class="font-weight-bold">Order confirmation</p>
                                                                    <small>2 day</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-footer">
                                                <a class="font-13" href="javascript:void(0)"> View All Notifications
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item dropdown user-profile">
                                    <a href="javascript:void(0)" class="nav-link dropdown-toggle " id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="assets/img/avtar/02.jpg" alt="avtar-img">
                                        <span class="bg-success user-status"></span>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
                                        <div class="bg-gradient px-4 py-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="mr-1">
                                                    <h4 class="text-white mb-0"><?php echo $login_session; ?></h4>
                                                    <small class="text-white"><?php echo $loginsession; ?></small>
                                                </div>
                                                <a href="signout.php" class="text-white font-20 tooltip-wrapper" data-toggle="tooltip" data-placement="top" title="" data-original-title="Signout"> <i
                                                                class="zmdi zmdi-power"></i></a>
                                            </div>
                                        </div>
                                        <div class="p-4">
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-user pr-2 text-success"></i> Profile</a>
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-envelope pr-2 text-primary"></i> Inbox
                                                <span class="badge badge-primary ml-auto">6</span>
                                            </a>
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class=" ti ti-settings pr-2 text-info"></i> Settings
                                            </a>
                                            <a class="dropdown-item d-flex nav-link" href="javascript:void(0)">
                                                <i class="fa fa-compass pr-2 text-warning"></i> Need help?</a>
                                            <div class="row mt-2">
                                                <div class="col">
                                                    <a class="bg-light p-3 text-center d-block" href="#">
                                                        <i class="fe fe-mail font-20 text-primary"></i>
                                                        <span class="d-block font-13 mt-2">My messages</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="bg-light p-3 text-center d-block" href="#">
                                                        <i class="fe fe-plus font-20 text-primary"></i>
                                                        <span class="d-block font-13 mt-2">Compose new</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end navigation -->
                </nav>
                <!-- end navbar -->
            </header>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class="app-container">
                <!-- begin app-nabar -->
                <aside class="app-navbar">
                    <!-- begin sidebar-nav -->
                    <div class="sidebar-nav scrollbar scroll_light">
                        <ul class="metismenu " id="sidebarNav">
                            <li class="nav-static-title">Personal</li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <i class="nav-icon ti ti-rocket"></i>
                                    <span class="nav-title">Register</span>
                                    <span class="nav-label label label-danger">9</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li> <a href='reg-manage.php?Department=CSE'>Computer Science</a> </li>
                                    <li> <a href='reg-manage.php?Department=EE'>Electrical</a> </li>
                                    <li> <a href='reg-manage.php?Department=ME'>Mechanical</a> </li>
                                    <li> <a href='reg-manage.php?Department=EC'>Electronics & Comm.</a> </li>
                                    <li> <a href='reg-manage.php?Department=CH'>Chemical</a> </li>
                                    <li> <a href='reg-manage.php?Department=CL'>Civil</a> </li>
                                    <li> <a href='reg-manage.php?Department=IC'>Inst. & Cont.</a> </li>
									<li> <a href='reg-manage.php?Department=HM'>Humanities & Math.</a> </li>
									<li> <a href='reg-manage.php?Department=Accounts'>Accounts</a> </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
							<i class="nav-icon ti ti-calendar"></i>
							<span class="nav-title">Forms</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='sttp-form.php?Event=Conference'>Conference</a> </li>
									<li> <a href='sttp-form.php?Event=Seminar'>Seminar</a> </li>
									<li> <a href='sttp-form.php?Event=STTP'>Short Term Training Program</a> </li>
									<li> <a href='sttp-form.php?Event=Convention'>Convention</a> </li>
									<li> <a href='sttp-form.php?Event=Symposium'>Symposium</a> </li>
									<li> <a href='sttp-form.php?Event=Workshop'>Workshop</a> </li>
								</ul>
                            </li>
                            <li><a href="mail-inbox.html" aria-expanded="false"><i class="nav-icon ti ti-email"></i><span class="nav-title">Mail</span></a> </li>
                        </ul>
                    </div>
                    <!-- end sidebar-nav -->
                </aside>
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-md-12 m-b-30">
                                <!-- begin page title -->
                                <div class="d-block d-lg-flex flex-nowrap align-items-center">
                                    <div class="page-title mr-4 pr-4 border-right">
                                        <h1>Admin Dashboard</h1>
                                    </div>
                                    <div class="breadcrumb-bar align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.php"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Dashboard
                                                </li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- begin row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card card-statistics">
                                    <div class="row no-gutters">
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-lg-right border-bottom border-xxl-bottom-0">
                                                <div class="d-flex m-b-10">
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Total Visits</p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics7"></div>
                                                    </div>
                                                    <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle"></i> 15,640</h3>
                                                        <p>Monthly visitor</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-xxl-right border-bottom border-xxl-bottom-0">
                                                <div class="d-flex m-b-10">
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Total Cost</p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics8"></div>
                                                    </div>
                                                    <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle"></i> 16,656</h3>
                                                        <p>This month</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20 border-lg-right border-bottom border-lg-bottom-0">
                                                <div class="d-flex m-b-10">
                                                    <p class="mb-0 font-regular text-muted font-weight-bold">Total Sales</p>
                                                    <a class="mb-0 ml-auto font-weight-bold" href="#"><i class="ti ti-more-alt"></i> </a>
                                                </div>
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics9"></div>
                                                    </div>
                                                    <div class="statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right">
                                                        <h3 class="mb-0"><i class="icon-arrow-up-circle"></i>569</h3>
                                                        <p>Avg. Sales per day</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6">
                                            <div class="p-20">
                                                <div class="d-block d-sm-flex h-100 align-items-center">
                                                    <div class="apexchart-wrapper">
                                                        <div id="analytics10"></div>
                                                    </div>
                                                    <div class="statistics ml-sm-auto mt-4 mt-sm-0 pr-sm-5">
                                                        <ul class="list-style-none p-0">
                                                            <li class="d-flex py-1">
                                                                <span><i class="fa fa-circle text-primary pr-2"></i> Redirect Visits</span> <span class="pl-2 font-weight-bold">456</span></li>
                                                            <li class="d-flex py-1"><span><i class="fa fa-circle text-warning pr-2"></i> New Visits</span> <span class="pl-2 font-weight-bold">256</span></li>
                                                            <li class="d-flex py-1"><span><i class="fa fa-circle text-info pr-2"></i> Direct Visits</span> <span class="pl-2 font-weight-bold">128</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-xxl-4 m-b-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-heading">
                                            <h4 class="card-title">Support Ticket</h4>
                                        </div>
                                        <div class="dropdown">
                                            <a class="btn btn-round btn-inverse-primary btn-xs" href="#">View all </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row active-task m-b-20">
                                            <div class="col-xs-1">
                                                <div class="bg-type mb-1 mb-xs-0 mt-1">
                                                    <span>PP</span>
                                                </div>
                                            </div>
                                            <div class="col-11">
                                                <small class="d-block mb-1">Car dealer</small>
                                                <h5 class="mb-0"><a href="#">Unread utf-8 in more quick overview</a></h5>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">
                                                        <small> Created by Lizzy Halfman</small>
                                                    </li>
                                                    <li class="list-inline-item">|</li>
                                                    <li class="list-inline-item">
                                                        <small>Saturday, March 17 2019</small>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row active-task m-b-20">
                                            <div class="col-xs-1">
                                                <div class="bg-type bg-pink mb-1 mb-xs-0 mt-1">
                                                    <span>SL</span>
                                                </div>
                                            </div>
                                            <div class="col-11">
                                                <small class="d-block mb-1">Webster HTML5 </small>
                                                <h5 class="mb-0"><a href="#">I get an error "No Direct Access Allowed!" when I enter purchase</a></h5>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">
                                                        <small> Created by Samuel Woods</small>
                                                    </li>
                                                    <li class="list-inline-item">|</li>
                                                    <li class="list-inline-item">
                                                        <small>Sunday, March 19 2019</small>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row active-task m-b-20">
                                            <div class="col-xs-1">
                                                <div class="bg-type bg-success mb-1 mb-xs-0 mt-1">
                                                    <span>MP</span>
                                                </div>
                                            </div>
                                            <div class="col-11">
                                                <small class="d-block mb-1">The corps</small>
                                                <h5 class="mb-0"><a href="#">OAuth Credentials not generating the key</a></h5>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">
                                                        <small> Created by Andrew nico</small>
                                                    </li>
                                                    <li class="list-inline-item">|</li>
                                                    <li class="list-inline-item">
                                                        <small>Monday, March 21 2019</small>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row active-task m-b-20">
                                            <div class="col-xs-1">
                                                <div class="bg-type bg-orange mb-1 mb-xs-0 mt-1">
                                                    <span>SP</span>
                                                </div>
                                            </div>
                                            <div class="col-11">
                                                <small class="d-block mb-1">Sam martin vCard</small>
                                                <h5 class="mb-0"><a href="#">Pre-Buy Questions : For bakery Shop (Mentor Android Application)</a></h5>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">
                                                        <small> Created by Jimmy Falicon</small>
                                                    </li>
                                                    <li class="list-inline-item">|</li>
                                                    <li class="list-inline-item">
                                                        <small>Friday, March 22 2019</small>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row active-task m-b-20">
                                            <div class="col-xs-1">
                                                <div class="bg-type bg-info mb-1 mb-xs-0 mt-1">
                                                    <span>AP</span>
                                                </div>
                                            </div>
                                            <div class="col-11">
                                                <small class="d-block mb-1">Mentor admin </small>
                                                <h5 class="mb-0"><a href="#">I need a payment option, for each seller per item</a></h5>
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">
                                                        <small> Created by Brian Joedon</small>
                                                    </li>
                                                    <li class="list-inline-item">|</li>
                                                    <li class="list-inline-item">
                                                        <small>Saturday, March 17 2019</small>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xxl-4 m-b-30">
                                <div class="card card-statistics h-100 mb-0">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="card-heading">
                                            <h4 class="card-title">Project Activity</h4>
                                        </div>
                                        <div class="dropdown">
                                            <a class="p-2" href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fe fe-more-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu custom-dropdown dropdown-menu-right p-4">
                                                <h6 class="mb-1">Action</h6>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-o pr-2"></i>View reports</a>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-edit pr-2"></i>Edit reports</a>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-bar-chart-o pr-2"></i>Statistics</a>
                                                <h6 class="mb-1 mt-3">Export</h6>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-pdf-o pr-2"></i>Export to PDF</a>
                                                <a class="dropdown-item" href="#!"><i class="fa-fw fa fa-file-excel-o pr-2"></i>Export to CSV</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="activity">
                                            <li class="activity-item primary">
                                                <div class="activity-info">
                                                    <h5 class="mb-0">Meeting with Amanda and team.</h5>
                                                    <span>10:30 Jan</span>
                                                </div>
                                            </li>
                                            <li class="activity-item info">
                                                <div class="activity-info">
                                                    <h5 class="mb-0"> Assign task for Smith. </h5>
                                                    <span>
                                                                Wed, 10 Mar
                                                            </span>
                                                </div>
                                            </li>
                                            <li class="activity-item success">
                                                <div class="activity-info">
                                                    <h5 class="mb-0"> Complete milestone 3 and update. </h5>
                                                    <span>
                                                                Mon, 14 Jun
                                                            </span>
                                                </div>
                                            </li>
                                            <li class="activity-item danger">
                                                <div class="activity-info">
                                                    <h5 class="mb-0">Start new task with mark. </h5>
                                                    <span>
                                                                Sat, 01 May
                                                            </span>
                                                </div>
                                            </li>
                                            <li class="activity-item warning">
                                                <div class="activity-info">
                                                    <h5 class="mb-0">You have created a new task</h5>
                                                    <span>9:30</span>
                                                </div>
                                            </li>
                                            <li class="activity-item info">
                                                <div class="activity-info">
                                                    <h5 class="mb-0"> Meeting with client and CEO.</h5>
                                                    <span>
                                                                Fri, 10 Aug
                                                            </span>
                                                </div>
                                            </li>
                                            <li class="activity-item success">
                                                <div class="activity-info">
                                                    <h5 class="mb-0">Meeting with Amanda and team.</h5>
                                                    <span>
                                                                Fri, 01 Dec
                                                            </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-statistics">
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Event Calendar</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div id='external-events'>
                                                    <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#eventModal">Add New Event</button>
                                                    <p class="mt-3">
                                                        Drag and drop your event or click in the calendar.
                                                    </p>
                                                    <div class='fc-event fc-event-primary' data-color="fc-event-primary"><span></span> Family
                                                        Vacation</div>
                                                    <div class='fc-event fc-event-warning' data-color="fc-event-warning"><span></span> Meeting In
                                                        Office</div>
                                                    <div class='fc-event fc-event-danger' data-color="fc-event-danger"><span></span> Client Call</div>
                                                    <div class='fc-event fc-event-success' data-color="fc-event-success"><span></span> Interview</div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                        <label class="form-check-label" for="defaultCheck1">
                                                            Remove After Drop
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="event-calendar">
                                                    <div id="event-calendar"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- event Modal -->
                        <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="verticalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="verticalCenterTitle">Add New Event</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="modelemail">Event Name</label>
                                                <input type="email" class="form-control" id="modelemail">
                                            </div>
                                            <div class="form-group">
                                                <label>Choose Event Color</label>
                                                <select class="form-control">
                                                    <option>Primary</option>
                                                    <option>Warning</option>
                                                    <option>Success</option>
                                                    <option>Danger</option>
                                                </select>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
            <footer class="footer">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-left">
                        <p>&copy; Copyright 2019. All rights reserved.</p>
                    </div>
                   <div class="col  col-sm-6 ml-sm-auto text-center text-sm-right">
                        <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                    </div>
                </div>
            </footer>
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    <script src="assets/js/vendors.js"></script>

    <!-- custom app -->
    <script src="assets/js/app.js"></script>
</body>


</html>