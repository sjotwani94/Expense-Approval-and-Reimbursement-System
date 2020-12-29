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
<style>
#label-element {
	font-size: 130%;
	font-family: Arial, Sans-serif;
	color: black;
}
#sub-label-element {
	font-family: Arial, Sans-serif;
	color: black;
}
.table-element {
	margin-left:10px;
	margin-right:10px;
	border: 1px solid #000000;
	padding: 2px;
	font-size: 100%;
	font-family: Verdana;
	color: black;
}
</style>
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
                            <li class="nav-static-title"><?php echo $logindesg; ?></li>
                            <li>
                                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <i class="nav-icon ti ti-rocket"></i>
                                    <span class="nav-title">Budgets of Depts.</span>
                                    <span class="nav-label label label-danger">8</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li> <a href='budg-manage.php?Department=CSE'>Computer Science</a> </li>
                                    <li> <a href='budg-manage.php?Department=EE'>Electrical</a> </li>
                                    <li> <a href='budg-manage.php?Department=ME'>Mechanical</a> </li>
                                    <li> <a href='budg-manage.php?Department=EC'>Electronics & Comm.</a> </li>
                                    <li> <a href='budg-manage.php?Department=CH'>Chemical</a> </li>
                                    <li> <a href='budg-manage.php?Department=CL'>Civil</a> </li>
                                    <li> <a href='budg-manage.php?Department=IC'>Inst. & Cont.</a> </li>
									<li> <a href='budg-manage.php?Department=HM'>Humanities & Math.</a> </li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
							<i class="nav-icon ti ti-calendar"></i>
							<span class="nav-title">Forms</span></a>
                                <ul aria-expanded="false">
                                    <li> <a href='tada-form.php'>Reimbursement Applications</a> </li>
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
                                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                                    <div class="page-title mb-2 mb-sm-0">
                                        <h1>Expense Approval Forms Records</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <nav>
                                            <ol class="breadcrumb p-0 m-b-0">
                                                <li class="breadcrumb-item">
                                                    <a href="index.php"><i class="ti ti-home"></i></a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    Forms
                                                </li>
                                                <li class="breadcrumb-item active text-primary" aria-current="page">Expense Approval Forms Records</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
						<div class="row">
						<div class="col-md-12">
                            <div class="card card-statistics">
							<div class="card-header">
                                <div class="card-heading">
                                    <h4 class="card-title">Input By <?php echo $_GET['Email_ID']; ?>, Form ID <?php echo $_GET['ID']; ?></h4>
                                </div>
                            </div>
							<div class="card-body" style="overflow-x: scroll">
							<?php 
							$Email_ID=$_GET['Email_ID'];
							$id=$_GET['ID'];		
							?>
							<form method="post" action="" id="form-element"> 
							<?php
							$sql="select * from ta_da_1 where EMAIL_ID='$Email_ID' and ID='$id'";
							$result = mysqli_query($conn,$sql);				
							$row = mysqli_fetch_assoc($result);
							$tid=$row["ID"];
							$Email_ID=$row["EMAIL_ID"];
							$sttp_id=$row["STTP_ID"];
							$ta_month=$row["ALL_MONTH"];
							$basic_pay=$row["BASIC_PAY"];
							$agp=$row["AGP"];
							$purpose=$row["PURPOSE"];
							$certificates = explode( ',', $row["CERTIFICATES"] );
							$fare=$row["FARE"];
							$Da_allow=$row["DAILY_ALL"];
							$conv=$row["CONVEYANCE"];
							$other=$row["OTHERS"];
							$total=$row["TOTAL"];
							$sql1="select * from expense_form_1 where ID='$sttp_id'";
							$result1 = mysqli_query($conn,$sql1);				
							$row1 = mysqli_fetch_assoc($result1);
							$name=$row1["Emp_Name"];
							$designation=$row1["Emp_Designation"];
							$eventtype=$row1["Event_Type"];
							?>
						<center><font size="10" style="font-family: verdana;color: black;">Institute of Technology<br>Nirma University</font></center>
						<br><br>
					<table>
					<tr>
						<th><label class="col-md-12 col-form-label" for="name" id="label-element">Name: </label></th>
						<td>
						<div class="form-group">
                              <input type="text" class="form-control is-valid" name="name" value="<?php echo $name;?>" id="label-element" disabled>
                        </div>
						</td>
					</tr>
					<tr>
						<th><label class="col-md-12 col-form-label" for="designation" id="label-element">Designation: </label></th>
						<td>
						<div class="form-group">
							<input type="text" name="designation" class="form-control is-valid" value="<?php echo $designation;?>" id="label-element" disabled>
						</div>
						</td>
					</tr>
					<tr>	
						<th><label class="col-md-12 col-form-label" for="department" id="label-element">Event Type: </label></th>
						<td>
						<div class="form-group">
                            <input type="text" name="eventtype" class="form-control is-valid" value="<?php echo $eventtype;?>" id="label-element" disabled>
						</div>
						</td>
					</tr>
					<tr>
						<th><label class="col-md-12 col-form-label" for="tamonth" id="label-element">Travelling allowence bill for the month of: </label></th>
						<td>
						<div class="form-group">
                              <input type="month" class="form-control is-valid" name="ta_month" value="<?php echo $ta_month;?>" id="label-element" disabled>
                        </div>
						</td>
					</tr>
					<tr>
						<th><label class="col-md-12 col-form-label" for="basic_pay" id="label-element">Basic pay: </label></th>
						<td>
						<div class="form-group">
                            <input type="number" class="form-control is-valid" name="basic_pay" value="<?php echo $basic_pay;?>" id="label-element" disabled>
						</div>
						</td>
					</tr>
					<tr>
						<th><label class="col-md-12 col-form-label" for="agp" id="label-element">AGP: </label></th>
						<td>
						<div class="form-group">
                            <input type="text" class="form-control is-valid" name="agp" value="<?php echo $agp;?>" id="label-element" disabled>
						</div>
						</td>
					</tr>
					<tr>
						<th><label class="col-md-12 col-form-label" for="purpose" id="label-element">Purpose: </label></th>
						<td>
						<div class="form-group">
                            <input type="text" class="form-control is-valid" name="purpose" value="<?php echo $purpose;?>" id="label-element" disabled>
						</div>
						</td>
					</tr>
					</table><br><br>
					<table border="1" id="employee_table" class="table-element">
						<tr>	
							<th></th>
							<th colspan="8">Travelling</th>
							<th colspan="3">Daily Allowance</th>
							<th colspan="5">Conveyance</th>
						</tr>
						<tr>
							<th></th>
							<th colspan="3">Departure</th>
							<th colspan="3">Arrival</th>
							<th>Travelled By</th>
							<th>Fare ammount</th>
							<th>Halt Days</th>
							<th>Rate of D.A.</th>
							<th>Total D.A.</th>
							<th>Date</th>
							<th>From Place</th>
							<th>TO Place</th>
							<th>Kms/ Point</th>
							<th>Amount</th>
						</tr>
						<tr>
							<th>Entry</th>
							<th>Date</th>
							<th>Place</th>
							<th>Time (am/pm)</th>
							<th>Date</th>
							<th>Place</th>
							<th>Time (am/pm)</th>
							<th>(Rail / Bus)</th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
						<?php
						$sql2="select * from ta_da where EMAIL_ID='$Email_ID' and ID='$tid'";
						$result2 = mysqli_query($conn,$sql2);
						$idd=0;
						while($row2 = mysqli_fetch_assoc($result2))
						{
						$dep_date=$row2["DEPART_DATE"];
						$dep_place=$row2["DEPART_PLACE"];
						$dep_time=$row2["DEPART_TIME"];
						$arr_date=$row2["ARRIVAL_DATE"];
						$arr_place=$row2["ARRIVAL_PLACE"];
						$arr_time=$row2["ARRIVAL_TIME"];
						$travel_by=$row2["TRAVELL_BY"];
						$fare_amt=$row2["FARE_AMT"];
						$halt_days=$row2["HALT_DAYS"];
						$rate_da=$row2["DA_RATE"];
						$total_da=$row2["DA_TOTAL"];
						$con_date=$row2["CON_DATE"];
						$from_place=$row2["CON_PLACE_FROM"];
						$to_place=$row2["CON_PLACE_TO"];
						$kmp=$row2["CON_KM"];
						$con_amt=$row2["CON_AMT"];
						$idd=$idd+1;
						?>
						<tr id="row1">
							<td> <?php echo $idd; ?> </td>
							<td> <input type="date" name="dep_date[]" value="<?php echo $dep_date; ?>" disabled></td>
							<td> <input type="text" name="dep_place[]" value="<?php echo $dep_place; ?>" disabled></td>
							<td> <input type="time" name="dep_time[]" value="<?php echo $dep_time; ?>" disabled></td>
							<td> <input type="date" name="arr_date[]" value="<?php echo $arr_date; ?>" disabled></td>
							<td> <input type="text" name="arr_place[]" value="<?php echo $arr_place; ?>" disabled></td>
							<td> <input type="time" name="arr_time[]" value="<?php echo $arr_time; ?>" disabled></td>
							<td> <input type="text" name="travel_by[]" value="<?php echo $travel_by; ?>" disabled></td>
							<td> <input type="number" name="fare_amt[]" value="<?php echo $fare_amt; ?>" disabled></td>
							<td> <input type="number" name="halt_days[]" value="<?php echo $halt_days; ?>" disabled></td>
							<td> <input type="number" name="rate_da[]" value="<?php echo $rate_da; ?>" disabled></td>
							<td> <input type="number" name="total_da[]" value="<?php echo $total_da; ?>" disabled></td>
							<td> <input type="date" name="con_date[]" value="<?php echo $con_date; ?>" disabled></td>
							<td> <input type="text" name="from_place[]" value="<?php echo $from_place; ?>" disabled></td>
							<td> <input type="text" name="to_place[]" value="<?php echo $to_place; ?>" disabled></td>
							<td> <input type="number" name="kmp[]" value="<?php echo $kmp; ?>" disabled></td>
							<td> <input type="number" name="con_amt[]" value="<?php echo $con_amt; ?>" disabled></td>
						</tr>
						<?php
						}
						?>
					</table>
					<br>
					<br>
					<label class="col-md-12 col-form-label" id="label-element">Certificates (Strike out items that aren't relevant):</label>
					<br> 
					<ul type="none">
					<li>
						<div class="form-check">
						<?php
						if(strpos($row["CERTIFICATES"], 'I have actually performed the journey as per details given in the bill.') !== false)
						{
						?>
                        <input class="form-check-input" type="checkbox" name="certificates[]" value="I have actually performed the journey as per details given in the bill." id="defaultCheck2" disabled checked>
						<?php
						}
						else
						{
						?>
						<input class="form-check-input" type="checkbox" name="certificates[]" value="I have actually performed the journey as per details given in the bill." id="defaultCheck2" disabled>
						<?php
						}
						?>
                        <label class="form-check-label" for="defaultCheck2">
                            I have actually performed the journey as per details given in the bill.
                        </label>
                        </div>
					<li>
						<div class="form-check">
						<?php
						if(strpos($row["CERTIFICATES"], 'Rikshaw / Taxi fares shown in the bill are actuals (see overleaf)') !== false)
						{
						?>
                        <input class="form-check-input" type="checkbox" name="certificates[]" value="Rikshaw / Taxi fares shown in the bill are actuals (see overleaf)" id="defaultCheck2" disabled checked>
						<?php
						}
						else
						{
						?>
						<input class="form-check-input" type="checkbox" name="certificates[]" value="Rikshaw / Taxi fares shown in the bill are actuals (see overleaf)" id="defaultCheck2" disabled>
						<?php
						}
						?>
                        <label class="form-check-label" for="defaultCheck2">
                            Rikshaw / Taxi fares shown in the bill are actuals (see overleaf).
                        </label>
                        </div>
					<li>
						<div class="form-check">
						<?php
						if(strpos($row["CERTIFICATES"], 'I have not been given free boarding / lodging by the organiser / organisers.') !== false)
						{
						?>
                        <input class="form-check-input" type="checkbox" name="certificates[]" value="I have not been given free boarding / lodging by the organiser / organisers." id="defaultCheck2" disabled checked>
						<?php
						}
						else
						{
						?>
						<input class="form-check-input" type="checkbox" name="certificates[]" value="I have not been given free boarding / lodging by the organiser / organisers." id="defaultCheck2" disabled>
						<?php
						}
						?>
                        <label class="form-check-label" for="defaultCheck2">
                            I have not been given free boarding / lodging by the organiser / organisers.
                        </label>
                        </div>
					<li>
						<div class="form-check">
						<?php
						if(strpos($row["CERTIFICATES"], 'I have actually stayed in hotel at the place of visit, the bill in original submitted.') !== false)
						{
						?>
						<input class="form-check-input" type="checkbox" name="certificates[]" value="I have actually stayed in hotel at the place of visit, the bill in original submitted." id="defaultCheck2" disabled checked>
						<?php
						}
						else
						{
						?>
						<input class="form-check-input" type="checkbox" name="certificates[]" value="I have actually stayed in hotel at the place of visit, the bill in original submitted." id="defaultCheck2" disabled>
						<?php
						}
						?>
                        <label class="form-check-label" for="defaultCheck2">
                            I have actually stayed in hotel at the place of visit, the bill in original submitted.
                        </label>
                        </div>
					<li>
						<div class="form-check">
						<?php
						if(strpos($row["CERTIFICATES"], 'I have drawn an advance for the journey Rs.') !== false)
						{
						?>
                        <input class="form-check-input" type="checkbox" name="certificates[]" value="I have drawn an advance for the journey Rs." id="defaultCheck2" disabled checked>
						<?php
						}
						else
						{
						?>
						<input class="form-check-input" type="checkbox" name="certificates[]" value="I have drawn an advance for the journey Rs." id="defaultCheck2" disabled>
						<?php
						}
						?>
                        <label class="form-check-label" for="defaultCheck2">
                            I have drawn an advance for the journey Rs.<input type="number" name="adv_rs">
                        </label>
                        </div>
					<li>
						<div class="form-check">
						<?php
						if(strpos($row["CERTIFICATES"], 'The excess amount over advanced drawn has been paid into the accounts and voucher submitted.') !== false)
						{
						?>
                        <input class="form-check-input" type="checkbox" name="certificates[]" value="The excess amount over advanced drawn has been paid into the accounts and voucher submitted." id="defaultCheck2" disabled checked>
						<?php
						}
						else
						{
						?>
						<input class="form-check-input" type="checkbox" name="certificates[]" value="The excess amount over advanced drawn has been paid into the accounts and voucher submitted." id="defaultCheck2" disabled>
						<?php
						}
						?>
                        <label class="form-check-label" for="defaultCheck2">
                            The excess amount over advanced drawn has been paid into the accounts and voucher submitted.
                        </label>
                        </div>
					<li>
						<div class="form-check">
						<?php
						if(strpos($row["CERTIFICATES"], 'I have not preferred or drawn this claim previously.') !== false)
						{
						?>
                        <input class="form-check-input" type="checkbox" name="certificates[]" value="I have not preferred or drawn this claim previously." id="defaultCheck2" disabled checked>
						<?php
						}
						else
						{
						?>
						<input class="form-check-input" type="checkbox" name="certificates[]" value="I have not preferred or drawn this claim previously." id="defaultCheck2" disabled>
						<?php
						}
						?>
                        <label class="form-check-label" for="defaultCheck2">
                            I have not preferred or drawn this claim previously.
                        </label>
                        </div>
					<li>
						<div class="form-check">
						<?php
						if(strpos($row["CERTIFICATES"], 'The organisers had provided boarding / lodging / local conveyance.') !== false)
						{
						?>
                        <input class="form-check-input" type="checkbox" name="certificates[]" value="The organisers had provided boarding / lodging / local conveyance." id="defaultCheck2" disabled checked>
						<?php
						}
						else
						{
						?>
						<input class="form-check-input" type="checkbox" name="certificates[]" value="The organisers had provided boarding / lodging / local conveyance." id="defaultCheck2" disabled>
						<?php
						}
						?>
                        <label class="form-check-label" for="defaultCheck2">
                            The organisers had provided boarding / lodging / local conveyance.
                        </label>
                        </div>
					<li>
						<div class="form-check">
						<?php
						if(strpos($row["CERTIFICATES"], 'I have complied with all the conditions attached to my order dated ') !== false)
						{
						?>
                        <input class="form-check-input" type="checkbox" name="certificates[]" value="I have complied with all the conditions attached to my order dated " id="defaultCheck2" disabled checked>
						<?php
						}
						else
						{
						?>
						<input class="form-check-input" type="checkbox" name="certificates[]" value="I have complied with all the conditions attached to my order dated " id="defaultCheck2" disabled>
						<?php
						}
						?>
                        <label class="form-check-label" for="defaultCheck2">
                            I have complied with all the conditions attached to my order dated <input type="date" name="order_date">
                        </label>
                        </div>
					</ul><br><br><br>
					<table>
					<tr>
						<th align="left"><label class="col-md-12 col-form-label" for="purpose" id="label-element">Fare </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"> <input type="number" class="form-control is-valid" name="fare" value="<?php echo $fare; ?>" id="label-element" disabled> </div>
						</div></td>
						
					</tr>
					<tr>
						<th align="left"><label class="col-md-12 col-form-label" for="purpose" id="label-element">Daily Allowance </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><input type="number" class="form-control is-valid" name="Da_allow" value="<?php echo $Da_allow; ?>" id="label-element" disabled> </div>
						</div></td>
						
					</tr>
					<tr>
						<th align="left"><label class="col-md-12 col-form-label" for="purpose" id="label-element">Conveyance </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><input type="number" class="form-control is-valid" name="conv" value="<?php echo $conv; ?>" id="label-element" disabled> </div>
						</div></td>
						
					</tr>
					<tr>
						<th align="left"><label class="col-md-12 col-form-label" for="purpose" id="label-element">Others </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><input type="number" class="form-control is-valid" name="other" value="<?php echo $other; ?>" id="label-element" disabled> </div>
						</div></td>
						
					</tr>
					<tr>
						<th align="left"><label class="col-md-12 col-form-label" for="purpose" id="label-element">Total </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><input type="number" class="form-control is-valid" name="total" value="<?php echo $total; ?>" id="label-element" disabled> </div>
						</div></td>
					</tr>
					</table>
					<center style="padding-bottom: 10px;">
					<?php
					$sqlx="select * from ta_da_1 t, reimburse_manage r where t.id=r.ta_da_id and t.id='$tid'";
					$resultx = mysqli_query($conn,$sqlx);
					$rowx = mysqli_num_rows($resultx);
					if($rowx==0)
					{
					?>
					<input class="btn btn-primary" formaction="give_reimburse.php?ID=<?php echo $tid; ?>&&Email_ID=<?php echo $Email_ID; ?>" name="give_reimbursement" type="submit" value="Give Reimbursement">
					<input class="btn btn-secondary" formaction="form-data-sttp.php?ID=<?php echo $sttp_id; ?>&&EName=<?php echo $name; ?>" name="show_sttp_details" type="submit" value="Show STTP Details">
					<?php
					}
					else
					{
					?>
					<input class="btn btn-primary" formaction="give_reimburse.php?ID=<?php echo $tid; ?>&&Email_ID=<?php echo $Email_ID; ?>" name="give_reimbursement" type="submit" value="Already Reimbursed" disabled>
					<input class="btn btn-secondary" formaction="form-data-sttp.php?ID=<?php echo $sttp_id; ?>&&EName=<?php echo $name; ?>" name="show_sttp_details" type="submit" value="Show STTP Details">
					<?php
					}
					?>
					</center>
					</form>
							</div>
							</div>
						</div>
					  </div>
                        <!-- end row -->
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