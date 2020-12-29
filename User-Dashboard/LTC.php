<!DOCTYPE html>
<?php
include("conn.php");
include("session.php");
?>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Expense Approval & Reimbursement - Employee Profile</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="nirma_logo.ico"/>
  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/nouislider.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/select2.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/ionrangeslider/ion.rangeSlider.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/ionrangeslider/ion.rangeSlider.skinFlat.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/bootstrap-material-datetimepicker.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<style>
/*#form-element {
	overflow-x: scroll;
	background-image: url("form_img.jpg");
}*/
#table-element {
	border: 1px solid #000000 !important;
	padding: 2px;
	font-size: 100%;
	font-family: Verdana;
	color: black;
}
#table-bordering {
	border: 1px solid #000000 !important;
	padding-right: 15px;
	padding-left: 15px;
}
</style>
<body id="mimin" class="dashboard" onload="createTable()">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.html" class="navbar-brand"> 
                <img src="nimlogo.png" alt="ITNU" height="50" width="100">
                </a>

				<ul class="nav navbar-nav search-nav">
					<li>
						<div class="search">
						<div class="form-group form-animate-text">
							<label class="label-search"><b>Expense Approval & Reimbursement System - <?php echo $logindesg; ?></b></label>
						</div>
						</div>
					</li>
				</ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span style="font-size:150%"><?php echo $login_session; ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                        <li><a href="signout.php"><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li ><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple">
                      <a class="tree-toggle nav-header"><span class="fa-home fa"></span> Dashboard 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="dashboard-v1.html">Dashboard v.1</a></li>
                          <li><a href="dashboard-v2.html">Dashboard v.2</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span> Layout
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="topnav.html">Top Navigation</a></li>
                        <li><a href="boxed.html">Boxed</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span> Charts
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="chartjs.html">ChartJs</a></li>
                        <li><a href="morris.html">Morris</a></li>
                        <li><a href="flot.html">Flot</a></li>
                        <li><a href="sparkline.html">SparkLine</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-pencil-square"></span> Ui Elements  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="color.html">Color</a></li>
                        <li><a href="weather.html">Weather</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="panels.html">Panels & Tabs</a></li>
                        <li><a href="notifications.html">Notifications & Tooltip</a></li>
                        <li><a href="badges.html">Badges & Label</a></li>
                        <li><a href="progress.html">Progress</a></li>
                        <li><a href="sliders.html">Sliders</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="modal.html">Modals</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Forms  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="STTP.php">STTP</a></li>
                        <li><a href="LTC.php">LTC</a></li>
                        <li><a href="#">File Upload</a></li>
                        <li><a href="#">Text Editor</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-table"></span> Tables  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="datatables.html">Data Tables</a></li>
                        <li><a href="handsontable.html">handsontable</a></li>
                        <li><a href="tablestatic.html">Static</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a href="calendar.html"><span class="fa fa-calendar-o"></span>Calendar</a></li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-envelope-o"></span> Mail <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="mail-box.html">Inbox</a></li>
                        <li><a href="compose-mail.html">Compose Mail</a></li>
                        <li><a href="view-mail.html">View Mail</a></li>
                      </ul>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-file-code-o"></span> Pages  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="forgotpass.html">Forgot Password</a></li>
                        <li><a href="login.html">SignIn</a></li>
                        <li><a href="reg.html">SignUp</a></li>
                        <li><a href="article-v1.html">Article v1</a></li>
                        <li><a href="search-v1.html">Search Result v1</a></li>
                        <li><a href="productgrid.html">Product Grid</a></li>
                        <li><a href="profile-v1.html">Profile v1</a></li>
                        <li><a href="invoice-v1.html">Invoice v1</a></li>
                      </ul>
                    </li>
                     <li class="ripple"><a class="tree-toggle nav-header"><span class="fa "></span> MultiLevel  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li class="ripple">
                          <a class="sub-tree-toggle nav-header">
                            <span class="fa fa-envelope-o"></span> Level 1
                            <span class="fa-angle-right fa right-arrow text-right"></span>
                          </a>
                          <ul class="nav nav-list sub-tree">
                            <li><a href="mail-box.html">Level 2</a></li>
                            <li><a href="compose-mail.html">Level 2</a></li>
                            <li><a href="view-mail.html">Level 2</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="credits.html">Credits</a></li>
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->


          <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Form Element</h3>
                        <p class="animated fadeInDown">
                          Form <span class="fa-angle-right fa"></span> Form Element
                        </p>
                    </div>
                  </div>
                </div>
                <div class="form-element">
				<div class="col-md-12 padding-0">
					<div class="col-md-12">
					<form id="form-element">
					<center><font size="10">Nirma University</font></center>
					<br><br>
					<table>
					<tr>
						<th><label class="col-md-12 col-form-label" for="tamonth" style="font-size:150%">Travelling allowence bill for the month of: </label></th>
						<td>
						<div class="form-group">
                              <div class="col-md-12"><input type="month" class="form-control" name="tamonth"></div>
                        </div>
						</td>
					</tr>
					<tr>
						<th><label class="col-md-12 col-form-label" for="name" style="font-size:150%">Name: </label></th>
						<td>
						<div class="form-group">
                              <div class="col-md-12"><input type="text" class="form-control" name="name"></div>
                        </div>
						</td>
					</tr>
					<tr>
						<th><label class="col-md-12 col-form-label" for="designation" style="font-size:150%">Designation: </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><select name="designation" class="form-control">
							<option>Assistant Professor</option>
							<option>Associate Professor</option>
							<option>Professor</option>
							<option>HoD</option>
							<option>Dean</option>
							<option>Employee</option>
							</select></div>
						</div>
						</td>
					</tr>
					<tr>	
						<th><label class="col-md-12 col-form-label" for="department" style="font-size:150%">Department: </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><select name="department" class="form-control">
							<option>Computer Science And Engineering</option>
							<option>Mechanical Engineering</option>
							<option>Electrical Engineering</option>
							<option>Electronics And Communication Engineering</option>
							<option>Chemical Engineering</option>
							<option>Civil Engineering</option>
							<option>Instrument & Control Engineering</option>
							<option>Humanities & Mathematics</option>
							</select></div>
						</div>
						</td>
					</tr>
					<tr>
						<th><label class="col-md-12 col-form-label" for="basic_pay" style="font-size:150%">Basic pay: </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><input type="number" class="form-control" name="basic_pay"></div>
						</div>
						</td>
					</tr>
					<tr>
						<th><label class="col-md-12 col-form-label" for="agp" style="font-size:150%">AGP: </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><input type="text" class="form-control" name="agp"></div>
						</div>
						</td>
					</tr>
					<tr>
						<th><label class="col-md-12 col-form-label" for="purpose" style="font-size:150%">Purpose: </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12"><input type="text" class="form-control" name="purpose"></div>
						</div>
						</td>
					</tr>
					
					</table><br><br><br><br>
					<div id="cont"></div>
					<p>
						<input type="button" id="addRow" value="Add New Row" onclick="addRow()" />
					</p>
					<!--table id="table-bordering">
					<tr id="table-element">
					<th id="table-element" colspan="8">Travelling</th>
					<th id="table-element" colspan="3">Daily Allowance</th>
					<th id="table-element" colspan="5">Conveyance</th>
						<tr id="table-element">
							<th id="table-element" colspan="3">Departure</th>
							<th id="table-element" colspan="3">Arrival</th>
							<th id="table-element">Travelled By</th>
							<th id="table-element">Fare ammount</th>
							<th id="table-element">Halt Days</th>
							<th id="table-element">Rate of D.A.</th>
							<th id="table-element">Total D.A.</th>
							<th id="table-element">Date</th>
							<th id="table-element">From Place</th>
							<th id="table-element">To Place</th>
							<th id="table-element">Kms/Point</th>
							<th id="table-element">Amount</th>
						</tr>
						<tr id="table-element">
							<th id="table-element">Date</th>
							<th id="table-element">Place</th>
							<th id="table-element">Time (am/pm)</th>
							<th id="table-element">Date</th>
							<th id="table-element">Place</th>
							<th id="table-element">Time (am/pm)</th>
							<th id="table-element">(Rail / Bus)</th>
							<th id="table-element"></th>
							<th id="table-element"></th>
							<th id="table-element"></th>
							<th id="table-element"></th>
							<th id="table-element"></th>
							<th id="table-element"></th>
							<th id="table-element"></th>
							<th id="table-element"></th>
							<th id="table-element"></th>
						</tr>
						<tr id="table-element">
							<td id="table-element"> <input type="date" name="dep_date1"></td>
							<td id="table-element"> <input type="text" name="dep_place1"></td>
							<td id="table-element"> <input type="time" name="dep_time1"></td>
							<td id="table-element"> <input type="date" name="arr_date1"></td>
							<td id="table-element"> <input type="text" name="arr_place1"></td>
							<td id="table-element"> <input type="time" name="arr_time1"></td>
							<td id="table-element"> <input type="text" name="travel_by1"></td>
							<td id="table-element"> <input type="number" name="fare_amt1"></td>
							<td id="table-element"> <input type="number" name="halt_days1"></td>
							<td id="table-element"> <input type="number" name="rate_da1"></td>
							<td id="table-element"> <input type="number" name="total_da1"></td>
							<td id="table-element"> <input type="date" name="con_date1"></td>
							<td id="table-element"> <input type="text" name="from_place1"></td>
							<td id="table-element"> <input type="text" name="to_place1"></td>
							<td id="table-element"> <input type="number" name="kmp1"></td>
							<td id="table-element"> <input type="number" name="con_amt1"></td>
						</tr>
						
						<!--tr id="table-element">
							<td id="table-element"> <input type="date" name="dep_date2"></td>
							<td id="table-element"> <input type="text" name="dep_place2"></td>
							<td id="table-element"> <input type="time" name="dep_time2"></td>
							<td id="table-element"> <input type="date" name="arr_date2"></td>
							<td id="table-element"> <input type="text" name="arr_place2"></td>
							<td id="table-element"> <input type="time" name="arr_time2"></td>
							<td id="table-element"> <input type="text" name="travel_by2"></td>
							<td id="table-element"> <input type="number" name="fare_amt2"></td>
							<td id="table-element"> <input type="number" name="halt_days2"></td>
							<td id="table-element"> <input type="number" name="rate_da2"></td>
							<td id="table-element"> <input type="number" name="total_da2"></td>
							<td id="table-element"> <input type="date" name="con_date2"></td>
							<td id="table-element"> <input type="text" name="from_place2"></td>
							<td id="table-element"> <input type="text" name="to_place2"></td>
							<td id="table-element"> <input type="number" name="kmp2"></td>
							<td id="table-element"> <input type="number" name="con_amt2"></td>
						</tr>
						
						<tr id="table-element">
							<td id="table-element"> <input type="date" name="dep_date3"></td>
							<td id="table-element"> <input type="text" name="dep_place3"></td>
							<td id="table-element"> <input type="time" name="dep_time3"></td>
							<td id="table-element"> <input type="date" name="arr_date3"></td>
							<td id="table-element"> <input type="text" name="arr_place3"></td>
							<td id="table-element"> <input type="time" name="arr_time3"></td>
							<td id="table-element"> <input type="text" name="travel_by3"></td>
							<td id="table-element"> <input type="number" name="fare_amt3"></td>
							<td id="table-element"> <input type="number" name="halt_days3"></td>
							<td id="table-element"> <input type="number" name="rate_da3"></td>
							<td id="table-element"> <input type="number" name="total_da3"></td>
							<td id="table-element"> <input type="date" name="con_date3"></td>
							<td id="table-element"> <input type="text" name="from_place3"></td>
							<td id="table-element"> <input type="text" name="to_place3"></td>
							<td id="table-element"> <input type="number" name="kmp3"></td>
							<td id="table-element"> <input type="number" name="con_amt3"></td>
						</tr>
						<tr id="table-element">
							<td id="table-element"> <input type="date" name="dep_date4"></td>
							<td id="table-element"> <input type="text" name="dep_place4"></td>
							<td id="table-element"> <input type="time" name="dep_time4"></td>
							<td id="table-element"> <input type="date" name="arr_date4"></td>
							<td id="table-element"> <input type="text" name="arr_place4"></td>
							<td id="table-element"> <input type="time" name="arr_time4"></td>
							<td id="table-element"> <input type="text" name="travel_by4"></td>
							<td id="table-element"> <input type="number" name="fare_amt4"></td>
							<td id="table-element"> <input type="number" name="halt_days4"></td>
							<td id="table-element"> <input type="number" name="rate_da4"></td>
							<td id="table-element"> <input type="number" name="total_da4"></td>
							<td id="table-element"> <input type="date" name="con_date4"></td>
							<td id="table-element"> <input type="text" name="from_place4"></td>
							<td id="table-element"> <input type="text" name="to_place4"></td>
							<td id="table-element"> <input type="number" name="kmp4"></td>
							<td id="table-element"> <input type="number" name="con_amt4"></td>
						</tr>
						<tr id="table-element">
							<td id="table-element"> <input type="date" name="dep_date5"></td>
							<td id="table-element"> <input type="text" name="dep_place5"></td>
							<td id="table-element"> <input type="time" name="dep_time5"></td>
							<td id="table-element"> <input type="date" name="arr_date5"></td>
							<td id="table-element"> <input type="text" name="arr_place5"></td>
							<td id="table-element"> <input type="time" name="arr_time5"></td>
							<td id="table-element"> <input type="text" name="travel_by5"></td>
							<td id="table-element"> <input type="number" name="fare_amt5"></td>
							<td id="table-element"> <input type="number" name="halt_days5"></td>
							<td id="table-element"> <input type="number" name="rate_da5"></td>
							<td id="table-element"> <input type="number" name="total_da5"></td>
							<td id="table-element"> <input type="date" name="con_date5"></td>
							<td id="table-element"> <input type="text" name="from_place5"></td>
							<td id="table-element"> <input type="text" name="to_place5"></td>
							<td id="table-element"> <input type="number" name="kmp5"></td>
							<td id="table-element"> <input type="number" name="con_amt5"></td>
						</tr>
						<tr id="table-element">
							<td id="table-element"> <input type="date" name="dep_date6"></td>
							<td id="table-element"> <input type="text" name="dep_place6"></td>
							<td id="table-element"> <input type="time" name="dep_time6"></td>
							<td id="table-element"> <input type="date" name="arr_date6"></td>
							<td id="table-element"> <input type="text" name="arr_place6"></td>
							<td id="table-element"> <input type="time" name="arr_time6"></td>
							<td id="table-element"> <input type="text" name="travel_by6"></td>
							<td id="table-element"> <input type="number" name="fare_amt6"></td>
							<td id="table-element"> <input type="number" name="halt_days6"></td>
							<td id="table-element"> <input type="number" name="rate_da6"></td>
							<td id="table-element"> <input type="number" name="total_da6"></td>
							<td id="table-element"> <input type="date" name="con_date6"></td>
							<td id="table-element"> <input type="text" name="from_place6"></td>
							<td id="table-element"> <input type="text" name="to_place6"></td>
							<td id="table-element"> <input type="number" name="kmp6"></td>
							<td id="table-element"> <input type="number" name="con_amt6"></td>
						</tr>
						<tr id="table-element">
							<td id="table-element"> <input type="date" name="dep_date7"></td>
							<td id="table-element"> <input type="text" name="dep_place7"></td>
							<td id="table-element"> <input type="time" name="dep_time7"></td>
							<td id="table-element"> <input type="date" name="arr_date7"></td>
							<td id="table-element"> <input type="text" name="arr_place7"></td>
							<td id="table-element"> <input type="time" name="arr_time7"></td>
							<td id="table-element"> <input type="text" name="travel_by7"></td>
							<td id="table-element"> <input type="number" name="fare_amt7"></td>
							<td id="table-element"> <input type="number" name="halt_days7"></td>
							<td id="table-element"> <input type="number" name="rate_da7"></td>
							<td id="table-element"> <input type="number" name="total_da7"></td>
							<td id="table-element"> <input type="date" name="con_date7"></td>
							<td id="table-element"> <input type="text" name="from_place7"></td>
							<td id="table-element"> <input type="text" name="to_place7"></td>
							<td id="table-element"> <input type="number" name="kmp7"></td>
							<td id="table-element"> <input type="number" name="con_amt7"></td>
						</tr>
						<tr id="table-element">
							<td id="table-element"> <input type="date" name="dep_date8"></td>
							<td id="table-element"> <input type="text" name="dep_place8"></td>
							<td id="table-element"> <input type="time" name="dep_time8"></td>
							<td id="table-element"> <input type="date" name="arr_date8"></td>
							<td id="table-element"> <input type="text" name="arr_place8"></td>
							<td id="table-element"> <input type="time" name="arr_time8"></td>
							<td id="table-element"> <input type="text" name="travel_by8"></td>
							<td id="table-element"> <input type="number" name="fare_amt8"></td>
							<td id="table-element"> <input type="number" name="halt_days8"></td>
							<td id="table-element"> <input type="number" name="rate_da8"></td>
							<td id="table-element"> <input type="number" name="total_da8"></td>
							<td id="table-element"> <input type="date" name="con_date8"></td>
							<td id="table-element"> <input type="text" name="from_place8"></td>
							<td id="table-element"> <input type="text" name="to_place8"></td>
							<td id="table-element"> <input type="number" name="kmp8"></td>
							<td id="table-element"> <input type="number" name="con_amt8"></td>
						</tr>
						<tr id="table-element">
							<td id="table-element"> <input type="date" name="dep_date9"></td>
							<td id="table-element"> <input type="text" name="dep_place9"></td>
							<td id="table-element"> <input type="time" name="dep_time9"></td>
							<td id="table-element"> <input type="date" name="arr_date9"></td>
							<td id="table-element"> <input type="text" name="arr_place9"></td>
							<td id="table-element"> <input type="time" name="arr_time9"></td>
							<td id="table-element"> <input type="text" name="travel_by9"></td>
							<td id="table-element"> <input type="number" name="fare_amt9"></td>
							<td id="table-element"> <input type="number" name="halt_days9"></td>
							<td id="table-element"> <input type="number" name="rate_da9"></td>
							<td id="table-element"> <input type="number" name="total_da9"></td>
							<td id="table-element"> <input type="date" name="con_date9"></td>
							<td id="table-element"> <input type="text" name="from_place9"></td>
							<td id="table-element"> <input type="text" name="to_place9"></td>
							<td id="table-element"> <input type="number" name="kmp9"></td>
							<td id="table-element"> <input type="number" name="con_amt9"></td>
						</tr>
						<tr id="table-element">
							<td id="table-element"> <input type="date" name="dep_date10"></td>
							<td id="table-element"> <input type="text" name="dep_place10"></td>
							<td id="table-element"> <input type="time" name="dep_time10"></td>
							<td id="table-element"> <input type="date" name="arr_date10"></td>
							<td id="table-element"> <input type="text" name="arr_place10"></td>
							<td id="table-element"> <input type="time" name="arr_time10"></td>
							<td id="table-element"> <input type="text" name="travel_by10"></td>
							<td id="table-element"> <input type="number" name="fare_amt10"></td>
							<td id="table-element"> <input type="number" name="halt_days10"></td>
							<td id="table-element"> <input type="number" name="rate_da10"></td>
							<td id="table-element"> <input type="number" name="total_da10"></td>
							<td id="table-element"> <input type="date" name="con_date10"></td>
							<td id="table-element"> <input type="text" name="from_place10"></td>
							<td id="table-element"> <input type="text" name="to_place10"></td>
							<td id="table-element"> <input type="number" name="kmp10"></td>
							<td id="table-element"> <input type="number" name="con_amt10"></td>
						</tr-->
					</tr>
					</table>
					<br><br><br><br>
					<b><label class="col-md-12 col-form-label" style="font-size:150%">Certificates :(Strike out the items not relevent)</label></b>
					<br> 
					<ul>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" style="font-size:120%"><input type="checkbox" class="checkbox" name="">I have actually performed the journey as per details given in the bill.</label><br>
						</div>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" style="font-size:120%"><input type="checkbox" class="checkbox" name="">Rikshaw / Taxi fares shown in the bill are actuals (see overleaf)</label><br>
						</div>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" style="font-size:120%"><input type="checkbox" class="checkbox" name="">I have not been given free boarding / lodging by the organiser / organisers.</label><br>
						</div>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" style="font-size:120%"><input type="checkbox" class="checkbox" name="">I have actually stayed in hotel at the place of visit, the bill in original submitted.</label><br>
						</div>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" style="font-size:120%"><input type="checkbox" class="checkbox" name="">I have drawn an advance for the journey Rs.<input type="number" name=""></label><br>
						</div>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" style="font-size:120%"><input type="checkbox" class="checkbox" name="">The excess amount over advanced drawn has been paid into the accounts and voucher submitted.</label><br>
						</div>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" style="font-size:120%"><input type="checkbox" class="checkbox" name="">I have not preferred or drawn this claim previously.</label><br>
						</div>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" style="font-size:120%"><input type="checkbox" class="checkbox" name="">The organisers had provided boarding / lodging / local conveyance.</label><br>
						</div>
					<li>
						<div class="form-group form-animate-checkbox">
						<label class="col-md-12 col-form-label" for="" style="font-size:120%"><input type="checkbox" class="checkbox" name="">I have complied with all the conditions attached to my order dated <input type="date" name=""></label><br>
						</div>
					</ul><br><br><br>
					<table>
					<tr>
						<th align="left"><label class="col-md-12 col-form-label" for="purpose" style="font-size:150%">Fare </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12">=Rs <input type="number" class="form-control" name=""> /- </div>
						</div></td>
						<td>
						<div class="form-group">
                            <div class="col-md-12">Rupees <input type="text" class="form-control" name=""> </div>
						</div></td>
					</tr>
					<tr>
						<th align="left"><label class="col-md-12 col-form-label" for="purpose" style="font-size:150%">Daily Allowance </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12">=Rs <input type="number" class="form-control" name=""> /- </div>
						</div></td>
						<td>
						<div class="form-group">
                            <div class="col-md-12">Rupees <input type="text" class="form-control" name=""> </div>
						</div></td>
					</tr>
					<tr>
						<th align="left"><label class="col-md-12 col-form-label" for="purpose" style="font-size:150%">Conveyance </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12">=Rs <input type="number" class="form-control" name=""> /- </div>
						</div></td>
						<td>
						<div class="form-group">
                            <div class="col-md-12">Rupees <input type="text" class="form-control" name=""> </div>
						</div></td>
					</tr>
					<tr>
						<th align="left"><label class="col-md-12 col-form-label" for="purpose" style="font-size:150%">Others </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12">=Rs <input type="number" class="form-control" name=""> /- </div>
						</div></td>
						<td>
						<div class="form-group">
                            <div class="col-md-12">Rupees <input type="text" class="form-control" name=""> </div>
						</div></td>
					</tr>
					<tr>
						<th align="left"><label class="col-md-12 col-form-label" for="purpose" style="font-size:150%">Total </label></th>
						<td>
						<div class="form-group">
                            <div class="col-md-12">=Rs <input type="number" class="form-control" name=""> /- </div>
						</div></td>
						<td>
						<div class="form-group">
                            <div class="col-md-12">Rupees <input type="text" class="form-control" name=""> </div>
						</div></td>
					</tr>
					<tfoot>
						<tr>
							<td colspan="2" align="center">
							<input type="reset" value="Reset">
							<button type="submit">
								Submit <img src="https://visibleclassroom.com/wp-content/uploads/2018/05/new-send-button.png" alt="img" height="30" width="50">
							</button> 
							</td>
						</tr>
					</tfoot>
					</table>
					</form>
					</div>
				</div>
              </div>
            </div>
          <!-- end: content -->


          <!-- start: right menu -->
            <div id="right-menu">
              <ul class="nav nav-tabs">
                <li class="active">
                 <a data-toggle="tab" href="#right-menu-user">
                  <span class="fa fa-comment-o fa-2x"></span>
                 </a>
                </li>
                <li>
                 <a data-toggle="tab" href="#right-menu-notif">
                  <span class="fa fa-bell-o fa-2x"></span>
                 </a>
                </li>
                <li>
                  <a data-toggle="tab" href="#right-menu-config">
                   <span class="fa fa-cog fa-2x"></span>
                  </a>
                 </li>
              </ul>

              <div class="tab-content">
                <div id="right-menu-user" class="tab-pane fade in active">
                  <div class="search col-md-12">
                    <input type="text" placeholder="search.."/>
                  </div>
                  <div class="user col-md-12">
                   <ul class="nav nav-list">
                    <li class="online">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="away">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-desktop"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="offline">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>
                    <li class="online">
                      <img src="asset/img/avatar.jpg" alt="user name">
                      <div class="name">
                        <h5><b>Bill Gates</b></h5>
                        <p>Hi there.?</p>
                      </div>
                      <div class="gadget">
                        <span class="fa  fa-mobile-phone fa-2x"></span> 
                      </div>
                      <div class="dot"></div>
                    </li>

                  </ul>
                </div>
                <!-- Chatbox -->
                <div class="col-md-12 chatbox">
                  <div class="col-md-12">
                    <a href="#" class="close-chat">X</a><h4>Akihiko Avaron</h4>
                  </div>
                  <div class="chat-area">
                    <div class="chat-area-content">
                      <div class="msg_container_base">
                        <div class="row msg_container send">
                          <div class="col-md-9 col-xs-9 bubble">
                            <div class="messages msg_sent">
                              <p>that mongodb thing looks good, huh?
                                tiny master db, and huge document store</p>
                                <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                              </div>
                            </div>
                            <div class="col-md-3 col-xs-3 avatar">
                              <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                            </div>
                          </div>

                          <div class="row msg_container receive">
                            <div class="col-md-3 col-xs-3 avatar">
                              <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                            </div>
                            <div class="col-md-9 col-xs-9 bubble">
                              <div class="messages msg_receive">
                                <p>that mongodb thing looks good, huh?
                                  tiny master db, and huge document store</p>
                                  <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                </div>
                              </div>
                            </div>

                            <div class="row msg_container send">
                              <div class="col-md-9 col-xs-9 bubble">
                                <div class="messages msg_sent">
                                  <p>that mongodb thing looks good, huh?
                                    tiny master db, and huge document store</p>
                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                  </div>
                                </div>
                                <div class="col-md-3 col-xs-3 avatar">
                                  <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                              </div>

                              <div class="row msg_container receive">
                                <div class="col-md-3 col-xs-3 avatar">
                                  <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                                <div class="col-md-9 col-xs-9 bubble">
                                  <div class="messages msg_receive">
                                    <p>that mongodb thing looks good, huh?
                                      tiny master db, and huge document store</p>
                                      <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                  </div>
                                </div>

                                <div class="row msg_container send">
                                  <div class="col-md-9 col-xs-9 bubble">
                                    <div class="messages msg_sent">
                                      <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                      </div>
                                    </div>
                                    <div class="col-md-3 col-xs-3 avatar">
                                      <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                    </div>
                                  </div>

                                  <div class="row msg_container receive">
                                    <div class="col-md-3 col-xs-3 avatar">
                                      <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                    </div>
                                    <div class="col-md-9 col-xs-9 bubble">
                                      <div class="messages msg_receive">
                                        <p>that mongodb thing looks good, huh?
                                          tiny master db, and huge document store</p>
                                          <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="chat-input">
                                <textarea placeholder="type your message here.."></textarea>
                              </div>
                              <div class="user-list">
                                <ul>
                                  <li class="online">
                                    <a href=""  data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <div class="user-avatar"><img src="asset/img/avatar.jpg" alt="user name"></div>
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="online">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="offline">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="online">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                  <li class="away">
                                    <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                      <img src="asset/img/avatar.jpg" alt="user name">
                                      <div class="dot"></div>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div id="right-menu-notif" class="tab-pane fade">

                            <ul class="mini-timeline">
                              <li class="mini-timeline-highlight">
                               <div class="mini-timeline-panel">
                                <h5 class="time">07:00</h5>
                                <p>Coding!!</p>
                              </div>
                            </li>

                            <li class="mini-timeline-highlight">
                             <div class="mini-timeline-panel">
                              <h5 class="time">09:00</h5>
                              <p>Playing The Games</p>
                            </div>
                          </li>
                          <li class="mini-timeline-highlight">
                           <div class="mini-timeline-panel">
                            <h5 class="time">12:00</h5>
                            <p>Meeting with <a href="#">Clients</a></p>
                          </div>
                        </li>
                        <li class="mini-timeline-highlight mini-timeline-warning">
                         <div class="mini-timeline-panel">
                          <h5 class="time">15:00</h5>
                          <p>Breakdown the Personal PC</p>
                        </div>
                      </li>
                      <li class="mini-timeline-highlight mini-timeline-info">
                       <div class="mini-timeline-panel">
                        <h5 class="time">15:00</h5>
                        <p>Checking Server!</p>
                      </div>
                    </li>
                    <li class="mini-timeline-highlight mini-timeline-success">
                      <div class="mini-timeline-panel">
                        <h5 class="time">16:01</h5>
                        <p>Hacking The public wifi</p>
                      </div>
                    </li>
                    <li class="mini-timeline-highlight mini-timeline-danger">
                      <div class="mini-timeline-panel">
                        <h5 class="time">21:00</h5>
                        <p>Sleep!</p>
                      </div>
                    </li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>

                </div>
                <div id="right-menu-config" class="tab-pane fade">
                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Notification</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-info">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
                        <label class="onoffswitch-label" for="myonoffswitch1"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Custom Designer</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-danger">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
                        <label class="onoffswitch-label" for="myonoffswitch2"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Autologin</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-success">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
                        <label class="onoffswitch-label" for="myonoffswitch3"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Auto Hacking</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-warning">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch4" checked>
                        <label class="onoffswitch-label" for="myonoffswitch4"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Auto locking</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch5" checked>
                        <label class="onoffswitch-label" for="myonoffswitch5"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>FireWall</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch6" checked>
                        <label class="onoffswitch-label" for="myonoffswitch6"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>CSRF Max</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-warning">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch7" checked>
                        <label class="onoffswitch-label" for="myonoffswitch7"></label>
                      </div>
                    </div>
                  </div>


                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Man In The Middle</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-danger">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch8" checked>
                        <label class="onoffswitch-label" for="myonoffswitch8"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="col-md-6 padding-0">
                      <h5>Auto Repair</h5>
                    </div>
                    <div class="col-md-6">
                      <div class="mini-onoffswitch onoffswitch-success">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch9" checked>
                        <label class="onoffswitch-label" for="myonoffswitch9"></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <input type="button" value="More.." class="btnmore">
                  </div>

                </div>
              </div>
            </div>  
          <!-- end: right menu -->
          
      </div>

      <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                    <li class="active ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-home fa"></span>Dashboard 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                          <li><a href="dashboard-v1.html">Dashboard v.1</a></li>
                          <li><a href="dashboard-v2.html">Dashboard v.2</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span>Layout
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="topnav.html">Top Navigation</a></li>
                        <li><a href="boxed.html">Boxed</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span>Charts
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="chartjs.html">ChartJs</a></li>
                        <li><a href="morris.html">Morris</a></li>
                        <li><a href="flot.html">Flot</a></li>
                        <li><a href="sparkline.html">SparkLine</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-pencil-square"></span>Ui Elements
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="color.html">Color</a></li>
                        <li><a href="weather.html">Weather</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="panels.html">Panels & Tabs</a></li>
                        <li><a href="notifications.html">Notifications & Tooltip</a></li>
                        <li><a href="badges.html">Badges & Label</a></li>
                        <li><a href="progress.html">Progress</a></li>
                        <li><a href="sliders.html">Sliders</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="modal.html">Modals</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                       <span class="fa fa-check-square-o"></span>Forms
                       <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="formelement.html">Form Element</a></li>
                        <li><a href="#">Wizard</a></li>
                        <li><a href="#">File Upload</a></li>
                        <li><a href="#">Text Editor</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-table"></span>Tables
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="datatables.html">Data Tables</a></li>
                        <li><a href="handsontable.html">handsontable</a></li>
                        <li><a href="tablestatic.html">Static</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a href="calendar.html">
                         <span class="fa fa-calendar-o"></span>Calendar
                      </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-envelope-o"></span>Mail
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="mail-box.html">Inbox</a></li>
                        <li><a href="compose-mail.html">Compose Mail</a></li>
                        <li><a href="view-mail.html">View Mail</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-file-code-o"></span>Pages
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="forgotpass.html">Forgot Password</a></li>
                        <li><a href="login.html">SignIn</a></li>
                        <li><a href="reg.html">SignUp</a></li>
                        <li><a href="article-v1.html">Article v1</a></li>
                        <li><a href="search-v1.html">Search Result v1</a></li>
                        <li><a href="productgrid.html">Product Grid</a></li>
                        <li><a href="profile-v1.html">Profile v1</a></li>
                        <li><a href="invoice-v1.html">Invoice v1</a></li>
                      </ul>
                    </li>
                     <li class="ripple"><a class="tree-toggle nav-header"><span class="fa "></span> MultiLevel  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li><a href="view-mail.html">Level 1</a></li>
                        <li class="ripple">
                          <a class="sub-tree-toggle nav-header">
                            <span class="fa fa-envelope-o"></span> Level 1
                            <span class="fa-angle-right fa right-arrow text-right"></span>
                          </a>
                          <ul class="nav nav-list sub-tree">
                            <li><a href="mail-box.html">Level 2</a></li>
                            <li><a href="compose-mail.html">Level 2</a></li>
                            <li><a href="view-mail.html">Level 2</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="credits.html">Credits</a></li>
                  </ul>
            </div>
        </div>       
      </div>
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.knob.js"></script>
<script src="asset/js/plugins/ion.rangeSlider.min.js"></script>
<script src="asset/js/plugins/bootstrap-material-datetimepicker.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>
<script src="asset/js/plugins/jquery.mask.min.js"></script>
<script src="asset/js/plugins/select2.full.min.js"></script>
<script src="asset/js/plugins/nouislider.min.js"></script>
<script src="asset/js/plugins/jquery.validate.min.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>

<script type="text/javascript">
	    // ARRAY FOR HEADER.
    var arrHead = new Array();
    arrHead = ['', 'Date', 'Place', 'Time(am/pm)','Date1','Place1', 'Time(am/pm)1','Travelled By(Rail/Bus)','Fare ammount','Halt Days','Rate of D.A.','Total D.A.','Date','From Place','To Place','KM/Point','Amount'];      // SIMPLY ADD OR REMOVE VALUES IN THE ARRAY FOR TABLE HEADERS.

    // FIRST CREATE A TABLE STRUCTURE BY ADDING A FEW HEADERS AND
    // ADD THE TABLE TO YOUR WEB PAGE.
    function createTable() {
        var empTable = document.createElement('table');
        empTable.setAttribute('id', 'empTable');            // SET THE TABLE ID.

        var tr = empTable.insertRow(-1);

        for (var h = 0; h < arrHead.length; h++) {
            var th = document.createElement('th');          // TABLE HEADER.
            th.innerHTML = arrHead[h];
            tr.appendChild(th);
        }

        var div = document.getElementById('cont');
        div.appendChild(empTable);    // ADD THE TABLE TO YOUR WEB PAGE.
    }

    // ADD A NEW ROW TO THE TABLE.s
    function addRow() {
        var empTab = document.getElementById('empTable');

        var rowCnt = empTab.rows.length;        // GET TABLE ROW COUNT.
        var tr = empTab.insertRow(rowCnt);      // TABLE ROW.
        tr = empTab.insertRow(rowCnt);

       
            var td = document.createElement('td');          // TABLE DEFINITION.
            td = tr.insertCell(0);
                       // FIRST COLUMN.
                // ADD A BUTTON.
                var button = document.createElement('input');
                // SET INPUT ATTRIBUTE.
                button.setAttribute('type', 'button');
                button.setAttribute('value', 'Remove');

                // ADD THE BUTTON's 'onclick' EVENT.
                button.setAttribute('onclick', 'removeRow(this)');

                td.appendChild(button);
            
         
                // CREATE AND ADD TEXTBOX IN EACH CELL.
                var ele = document.createElement('input');
				td = tr.insertCell(1);
                ele.setAttribute('type', 'date');
                ele.setAttribute('value', '');
				td.appendChild(ele);
				
				 var ele = document.createElement('input');
				td = tr.insertCell(2);
			    ele.setAttribute('type', 'text');
                ele.setAttribute('value', '');
				td.appendChild(ele);
				
				 var ele = document.createElement('input');
				td = tr.insertCell(3);
				ele.setAttribute('type', 'time');
                ele.setAttribute('value', '');
				td.appendChild(ele);

				var ele = document.createElement('input');
			    td = tr.insertCell(4);
				ele.setAttribute('type', 'date');
                ele.setAttribute('value', '');
                td.appendChild(ele)
				
				var ele = document.createElement('input');
				td = tr.insertCell(5);
                ele.setAttribute('type', 'text');
                ele.setAttribute('value', '');
				td.appendChild(ele);
				
				 var ele = document.createElement('input');
				td = tr.insertCell(6);
			    ele.setAttribute('type', 'time');
                ele.setAttribute('value', '');
				td.appendChild(ele);
				
				 var ele = document.createElement('input');
				td = tr.insertCell(7);
				ele.setAttribute('type', 'text');
                ele.setAttribute('value', '');
				td.appendChild(ele);

				var ele = document.createElement('input');
			    td = tr.insertCell(8);
				ele.setAttribute('type', 'number');
                ele.setAttribute('value', '');
                td.appendChild(ele);
				
				var ele = document.createElement('input');
				td = tr.insertCell(9);
                ele.setAttribute('type', 'number');
                ele.setAttribute('value', '');
				td.appendChild(ele);
				
				 var ele = document.createElement('input');
				td = tr.insertCell(10);
			    ele.setAttribute('type', 'number');
                ele.setAttribute('value', '');
				td.appendChild(ele);
				
				 var ele = document.createElement('input');
				td = tr.insertCell(11);
				ele.setAttribute('type', 'number');
                ele.setAttribute('value', '');
				td.appendChild(ele);

				var ele = document.createElement('input');
			    td = tr.insertCell(12);
				ele.setAttribute('type', 'date');
                ele.setAttribute('value', '');
                td.appendChild(ele)
				
				var ele = document.createElement('input');
				td = tr.insertCell(13);
                ele.setAttribute('type', 'text');
                ele.setAttribute('value', '');
				td.appendChild(ele);
				
				 var ele = document.createElement('input');
				td = tr.insertCell(14);
			    ele.setAttribute('type', 'text');
                ele.setAttribute('value', '');
				td.appendChild(ele);
				
				 var ele = document.createElement('input');
				td = tr.insertCell(15);
				ele.setAttribute('type', 'number');
                ele.setAttribute('value', '');
				td.appendChild(ele);

				var ele = document.createElement('input');
			    td = tr.insertCell(16);
				ele.setAttribute('type', 'number');
                ele.setAttribute('value', '');
                td.appendChild(ele);
				
				
            
        
    }

    // DELETE TABLE ROW.
    function removeRow(oButton) {
        var empTab = document.getElementById('empTable');
        empTab.deleteRow(oButton.parentNode.parentNode.rowIndex);       // BUTTON -> TD -> TR.
    }

    // EXTRACT AND SUBMIT TABLE DATA.
 /*   function submit() {
        var myTab = document.getElementById('empTable');
        var values = new Array();

        // LOOP THROUGH EACH ROW OF THE TABLE.
        for (row = 1; row < myTab.rows.length - 1; row++) {
            for (c = 0; c < myTab.rows[row].cells.length; c++) {   // EACH CELL IN A ROW.

                var element = myTab.rows.item(row).cells[c];
                if (element.childNodes[0].getAttribute('type') == 'text') {
                    values.push("'" + element.childNodes[0].value + "'");
                }
            }
        }
        
        // SHOW THE RESULT IN THE CONSOLE WINDOW.
        console.log(values);
    }*/
	
  $(document).ready(function(){

    $("#signupForm").validate({
      errorElement: "em",
      errorPlacement: function(error, element) {
        $(element.parent("div").addClass("form-animate-error"));
        error.appendTo(element.parent("div"));
      },
      success: function(label) {
        $(label.parent("div").removeClass("form-animate-error"));
      },
      rules: {
        validate_firstname: "required",
        validate_lastname: "required",
        validate_username: {
          required: true,
          minlength: 2
        },
        validate_password: {
          required: true,
          minlength: 5
        },
        validate_confirm_password: {
          required: true,
          minlength: 5,
          equalTo: "#validate_password"
        },
        validate_email: {
          required: true,
          email: true
        },
        validate_agree: "required"
      },
      messages: {
        validate_firstname: "Please enter your firstname",
        validate_lastname: "Please enter your lastname",
        validate_username: {
          required: "Please enter a username",
          minlength: "Your username must consist of at least 2 characters"
        },
        validate_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        validate_confirm_password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long",
          equalTo: "Please enter the same password as above"
        },
        validate_email: "Please enter a valid email address",
        validate_agree: "Please accept our policy"
      }
    });

    // propose username by combining first- and lastname
    $("#username").focus(function() {
      var firstname = $("#firstname").val();
      var lastname = $("#lastname").val();
      if (firstname && lastname && !this.value) {
        this.value = firstname + "." + lastname;
      }
    });


    $('.mask-date').mask('00/00/0000');
    $('.mask-time').mask('00:00:00');
    $('.mask-date_time').mask('00/00/0000 00:00:00');
    $('.mask-cep').mask('00000-000');
    $('.mask-phone').mask('0000-0000');
    $('.mask-phone_with_ddd').mask('(00) 0000-0000');
    $('.mask-phone_us').mask('(000) 000-0000');
    $('.mask-mixed').mask('AAA 000-S0S');
    $('.mask-cpf').mask('000.000.000-00', {reverse: true});
    $('.mask-money').mask('000.000.000.000.000,00', {reverse: true});
    $('.mask-money2').mask("#.##0,00", {reverse: true});
    $('.mask-ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
      translation: {
        'Z': {
          pattern: /[0-9]/, optional: true
        }
      }
    });
    $('.mask-ip_address').mask('099.099.099.099');
    $('.mask-percent').mask('##0,00%', {reverse: true});
    $('.mask-clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
    $('.mask-placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
    $('.mask-fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/, 
          fallback: '/'
        }, 
        placeholder: "__/__/____"
      }
    });
    $('.mask-selectonfocus').mask("00/00/0000", {selectOnFocus: true});

    var options =  {onKeyPress: function(cep, e, field, options){
      var masks = ['00000-000', '0-00-00-00'];
      mask = (cep.length>7) ? masks[1] : masks[0];
      $('.mask-crazy_cep').mask(mask, options);
    }};

    $('.mask-crazy_cep').mask('00000-000', options);


    var options2 =  { 
      onComplete: function(cep) {
        alert('CEP Completed!:' + cep);
      },
      onKeyPress: function(cep, event, currentField, options){
        console.log('An key was pressed!:', cep, ' event: ', event, 
          'currentField: ', currentField, ' options: ', options);
      },
      onChange: function(cep){
        console.log('cep changed! ', cep);
      },
      onInvalid: function(val, e, f, invalid, options){
        var error = invalid[0];
        console.log ("Digit: ", error.v, " is invalid for the position: ", error.p, ". We expect something like: ", error.e);
      }
    };

    $('.mask-cep_with_callback').mask('00000-000', options2);

    var SPMaskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
      onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
    };

    $('.mask-sp_celphones').mask(SPMaskBehavior, spOptions);



    var slider = document.getElementById('noui-slider');
    noUiSlider.create(slider, {
      start: [20, 80],
      connect: true,
      range: {
        'min': 0,
        'max': 100
      }
    });

    var slider = document.getElementById('noui-range');
    noUiSlider.create(slider, {
                        start: [ 20, 80 ], // Handle start position
                        step: 10, // Slider moves in increments of '10'
                        margin: 20, // Handles must be more than '20' apart
                        connect: true, // Display a colored bar between the handles
                        direction: 'rtl', // Put '0' at the bottom of the slider
                        orientation: 'vertical', // Orient the slider vertically
                        behaviour: 'tap-drag', // Move handle on tap, bar is draggable
                        range: { // Slider can select '0' to '100'
                        'min': 0,
                        'max': 100
                      },
                        pips: { // Show a scale with the slider
                          mode: 'steps',
                          density: 2
                        }
                      });



    $(".select2-A").select2({
      placeholder: "Select a state",
      allowClear: true
    });

    $(".select2-B").select2({
      tags: true
    });

    $("#range1").ionRangeSlider({
      type: "double",
      grid: true,
      min: -1000,
      max: 1000,
      from: -500,
      to: 500
    });

    $('.dateAnimate').bootstrapMaterialDatePicker({ weekStart : 0, time: false,animation:true});
    $('.date').bootstrapMaterialDatePicker({ weekStart : 0, time: false});
    $('.time').bootstrapMaterialDatePicker({ date: false,format:'HH:mm',animation:true});
    $('.datetime').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm',animation:true});
    $('.date-fr').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', lang : 'fr', weekStart : 1, cancelText : 'ANNULER'});
    $('.min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });


    $(".dial").knob({
      height:80
    });

    $('.dial1').trigger(
     'configure',
     {
       "min":10,
       "width":80,
       "max":80,
       "fgColor":"#FF6656",
       "skin":"tron"
     }
     );

    $('.dial2').trigger(
     'configure',
     {

       "width":80,
       "fgColor":"#FF6656",
       "skin":"tron",
       "cursor":true
     }
     );

    $('.dial3').trigger(
     'configure',
     {

       "width":80,
       "fgColor":"#27C24C",
     }
     );
  });
</script>
<!-- end: Javascript -->
</body>
</html>
