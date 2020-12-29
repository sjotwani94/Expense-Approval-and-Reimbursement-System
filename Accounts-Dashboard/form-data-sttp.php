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
                                    <h4 class="card-title">Input By <?php echo $_GET['EName']; ?>, Form ID <?php echo $_GET['ID']; ?></h4>
                                </div>
                            </div>
							<div class="card-body">
							<?php 
							$EName=$_GET['EName'];
							$id=$_GET['ID'];		
							?>
							<form action="" method="post">
							<?php
							$sql="select * from expense_form_1 where Emp_Name='$EName' and ID='$id'";
							$result = mysqli_query($conn,$sql);				
							$row = mysqli_fetch_assoc($result);
							$name=$row["Emp_Name"];
							$designation=$row["Emp_Designation"];
							$eventtype=$row["Event_Type"];
							$startdate=$row["Sched_Start_Date"];
							$SDate=date('d-m-Y',strtotime($startdate));
							$enddate=$row["Sched_End_Date"];
							$EDate=date('d-m-Y',strtotime($enddate));
							$PresentationPaper=$row["Presentation_Paper"];
							$Eventplaced=$row["Event_Venue"];
							$Organizer=$row["Organizer_Detail"];
							$Benefits=$row["Benefits_To_Institute"];
							$Respo=$row["Letter_Attached"];
							$Budpro=$row["Budget_Current_Year"];
							$Budutl=$row["Budget_Utilized"];
							$Budavl=$row["Budget_Available"];
							$Regfee=$row["FA_Registration_Fee"];
							$Tada=$row["TA_DA"];
							$Accom=$row["Accomodations"];
							$Others=$row["FA_Others"];
							$TotExpend=$row["Tot_Expenditure"];
							$starttdate=$row["DOD_Leave_Start"];
							$StDate=date('d-m-Y',strtotime($starttdate));
							$endddate=$row["DOD_Leave_End"];
							$EnDate=date('d-m-Y',strtotime($endddate));
							$Numconfr=$row["No_Of_Attnd_Confr"];
							$dateconfr=$row["When_Attnd_Confr"];
							$Dtconfr=date('d-m-Y',strtotime($dateconfr));
							$deanapproved=$row["Dean_Approved"];
							$hodapproved=$row["HOD_Approved"];
							$reasonforreject=$row["Reason_For_Rejection"];
							?>
							<table style="margin-bottom: 20px" border="0" cellpadding="5" background="form_img.jpg">
							<tr>
								<th><label class="col-sm-10 col-form-label" for="name" id="label-element">Name:</label></th>
								<td>
								<div class="form-group">
									  <div class="col-sm-10"><input type="text" class="form-control is-valid" name="name" value="<?php echo $name; ?>" id="label-element" disabled></div>
								</div>
								</td>
							</tr>
							<tr>
								<th><label class="col-sm-10 col-form-label" for="desg" id="label-element">Designation:</label></th>
								<td>
								<div class="form-group">
									  <div class="col-sm-10"><input type="text" class="form-control is-valid" name="desg" value="<?php echo $designation; ?>" id="label-element" disabled></div>
								</div>
								</td>
							</tr>
							<tr>
								<th><label class="col-sm-10 col-form-label" for="Event" id="label-element">Event which Applicant want to attend:</label></th>
								<td>
								<div class="form-group">
									  <div class="col-sm-10"><input type="text" class="form-control is-valid" name="Event" value="<?php echo $eventtype; ?>" id="label-element" disabled></div>
								</div>
								</td>
							</tr>
							<tr>
								<th><label class="col-sm-10 col-form-label" for="sdate" id="label-element">Scheduled Date:</label></th> 
								<td>
								<div class="form-inline">
								<div class="form-group col-sm-12">
									<input type="text" class="col-sm-4 form-control is-valid" name="sdate" value="<?php echo $SDate; ?>" id="label-element" disabled>
									<!--<span class="input-group-addon success">to</span>-->
									<label class="col-sm-1 col-form-label" id="label-element">To</label>
									<input type="text" class="col-sm-4 form-control is-valid" name="edate" value="<?php echo $EDate; ?>" id="label-element" disabled>
								</div>
								</div>
								</td>
							</tr>
							<tr>
								<th><label class="col-sm-10 col-form-label" for="pforpresent" id="label-element">Paper selected for presentation:</label></th>
								<td>
								<div class="form-group">
									  <div class="col-sm-10"><input type="text" class="form-control is-valid" name="pforpresent" value="<?php echo $PresentationPaper; ?>" id="label-element" disabled></div>
								</div>
								</td>
							</tr>
							<tr>
								<th><label class="col-sm-10 col-form-label" for="eventplaced" id="label-element">Place where the event will be organized:</label></th>
								<td>
								<div class="form-group">
									  <div class="col-sm-10"><input type="text" class="form-control is-valid" name="eventplaced" value="<?php echo $Eventplaced; ?>" id="label-element" disabled></div>
								</div>
								</td>
							</tr>
							<tr>
								<th><label class="col-sm-10 col-form-label" for="organizer" id="label-element">Organizer's Detail:</label></th> 
								<td>
								<div class="form-group">
									  <div class="col-sm-10"><input type="text" class="form-control is-valid" name="organizer" value="<?php echo $Organizer; ?>" id="label-element" disabled></div>
								</div>
								</td>
							</tr>
							<tr>
								<th><label class="col-sm-10 col-form-label" for="Benefits" id="label-element">Benefits to the Institute:</label></th>
								<td>
								<div class="form-group">
									  <div class="col-sm-10"><input type="text" class="form-control is-valid" name="Benefits" value="<?php echo $Benefits; ?>" id="label-element" disabled></div>
								</div>
								</td>
							</tr>
							<tr>
								<th><label class="col-sm-10 col-form-label" for="Respo" id="label-element">The letter of Invitation and letter of Acceptance of paper attached with the Application:</label></th> 
								<td>
								<div class="form-group">
									  <div class="col-sm-10"><input type="text" class="form-control is-valid" name="Respo" value="<?php echo $Respo; ?>" id="label-element" disabled></div>
								</div>
								</td>
							</tr>
							<tr>
								<th><label class="col-sm-10 col-form-label" id="label-element">Budget Provision:</label></th>
								<td>
								<table border="0">
								<tr>
								<th id="sub-label-element">
								(a) Budget Provision in current year:
								</th>
								<td>
									<input type="text" class="form-control is-valid" name="budpro" size="66" value="<?php echo $Budpro; ?>" id="label-element" disabled>
								</td>
								</tr>
								<tr>
								<th id="sub-label-element">
								(b) Budget utilized:
								</th>
								<td>
									<input type="text" class="form-control is-valid" name="budutl" size="66" value="<?php echo $Budutl; ?>" id="label-element" disabled>
								</td>
								</tr>
								<tr>
								<th id="sub-label-element">
								(c) Budget Available:
								</th>
								<td>
									<input type="text" class="form-control is-valid" name="budavl" size="66" value="<?php echo $Budavl; ?>" id="label-element" disabled>
								</td>
								</tr>
								</table>
								</td>
							</tr>
							<tr>
								<th><label class="col-sm-10 col-form-label" id="label-element">Details of Financial assistant required:</label></th>
								<td>
									<table border="0">
									<tr>
									<th id="sub-label-element">
									Registration Fee:
									</th>
									<td>
									<input type="text" class="form-control is-valid" name="regfee" value="<?php echo $Regfee; ?>" id="label-element" disabled>
									</td>
									</tr>
									<tr>
									<th id="sub-label-element">
									TA/DA:
									</th>
									<td>
									<input type="text" class="form-control is-valid" name="tada" value="<?php echo $Tada; ?>" id="label-element" disabled>
									</td>
									</tr>
									<tr>
									<th id="sub-label-element">
									Accommodations:
									</th>
									<td>
									<input type="text" class="form-control is-valid" name="accom" value="<?php echo $Accom; ?>" id="label-element" disabled>
									</td>
									</tr>
									<tr>
									<th id="sub-label-element">
									Others:
									</th>
									<td>
									<input type="text" class="form-control is-valid" name="oth" value="<?php echo $Others; ?>" id="label-element" disabled>
									</td>
									</tr>
									</table>
								</td>
							</tr>
							<tr>
								<th><label class="col-sm-10 col-form-label" for="totexpend" id="label-element">What is total expenditure estimated likely to incurr to attend the function?</label></th>
								<td>
								<div class="form-group">
									  <div class="col-sm-10"><input type="text" class="form-control is-valid" name="totexpend" value="<?php echo $TotExpend; ?>" id="label-element" disabled></div>
								</div>
								</td>
							</tr>
							<tr>
								<th><label class="col-sm-10 col-form-label" id="label-element">Date(s) of duty leave required:</label></th>
								<td>
								<div class="form-inline">
								<div class="form-group col-sm-12">
									<input type="text" class="col-sm-4 form-control is-valid" name="stdate" value="<?php echo $StDate; ?>" id="label-element" disabled>
									<!--<span class="input-group-addon success">to</span>-->
									<label class="col-sm-1 col-form-label" id="label-element">To</label>
									<input type="text" class="col-sm-4 form-control is-valid" name="endate" value="<?php echo $EnDate; ?>" id="label-element" disabled>
								</div>
								</div>
								</td>
							</tr>
							<tr>
								<th><label class="col-sm-10 col-form-label" for="numconfr" id="label-element">How many conference he/she has attended in current financial year:</label></th> 
								<td>
								<div class="form-group">
									  <div class="col-sm-10"><input type="number" class="form-control is-valid" name="numconfr" value="<?php echo $Numconfr; ?>" id="label-element" disabled></div>
								</div>
								</td>
							</tr>
							<tr>
								<th><label class="col-sm-10 col-form-label" for="dtconfr" id="label-element">When did he/she attended the conference:</label></th>
								<td>
								<div class="form-group">
									  <div class="col-sm-10"><input type="text" class="form-control is-valid" name="dtconfr" value="<?php echo $Dtconfr; ?>" id="label-element" disabled></div>
								</div>
								</td>
							</tr>
							<tfoot>
								<tr>
									<td colspan="2" align="center">
									<label class="col-sm-10 col-form-label" id="label-element">Status: </label>
									<?php
										if($deanapproved=="Approve" && $hodapproved=="Approve")
										{
										?>
										<label class="col-sm-10 col-form-label" for="reasonforreject" id="label-element">Approved by HOD & Director</label>
										<?php
										}
										else if($hodapproved=="Approve" && $deanapproved=='')
										{
										?>
										<label class="col-sm-10 col-form-label" for="reasonforreject" id="label-element">Approved by HOD, But Pending from Director's side</label>  
										<?php
										}
										else if($deanapproved=='' && $hodapproved=='')
										{
										?>
										<label class="col-sm-10 col-form-label" for="reasonforreject" id="label-element">Pending from both HOD & Director</label>
										<?php
										}
										else if($deanapproved=='' && $hodapproved=='Reject')
										{
										?>
										<label class="col-sm-10 col-form-label" for="reasonforreject" id="label-element">Rejected by HOD</label>
										<?php
										}
										else if($deanapproved=='Reject' && $hodapproved=='Approve')
										{
										?>
										<label class="col-sm-10 col-form-label" for="reasonforreject" id="label-element">Approved by HOD, But Rejected by Director</label>
										<?php
										}
										?>
									</td>
								</tr>
								<?php
								if($reasonforreject!='')
								{
								?>
								<tr id="footer">
									<td colspan="2">
										<label class="col-sm-10 col-form-label" for="reasonforreject" id="label-element">Reason For Rejection of Form:</label><br>
										<label class="col-sm-10 col-form-label" for="reasonforreject" id="label-element"><?php echo $reasonforreject;?></label>
										<!--<textarea type="text" name="reasonforreject" align="left" class="form-control" value="">
										</textarea>-->
									</td>
								</tr>
								<?php
								}
								?>
							</tfoot>
							</table>
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