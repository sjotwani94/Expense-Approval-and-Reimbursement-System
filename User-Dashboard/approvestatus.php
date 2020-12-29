<!DOCTYPE html>
<?php
include("conn.php");
include("session.php");
?>
<html lang="en">
<head>
  
  
  <title>Expense Approval & Reimbursement - Employee Profile</title>
<link rel="shortcut icon" href="nirma_logo.ico">
  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

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

  <link rel="shortcut icon" href="asset/img/nirma_logo.ico">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<style>
#label-element {
	font-size: 150%;
	font-family: Verdana;
	color: black;
}
#sub-label-element {
	font-family: Verdana;
	color: black;
}
</style>
<body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="index.php" class="navbar-brand"> 
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
                <li><a><span class="fa fa-coffee"></span></a></li>
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
                      <a href="index.php"><span class="fa-home fa"></span> Dashboard </a>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Forms  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="STTP.php">STTP Form</a></li>
                      </ul>
                    </li>
                 
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-envelope-o"></span> Mail <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="mail-inbox.php?Desg=<?php echo $logindesg; ?>">Inbox</a></li>
                      </ul>
                    </li>
                  
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
					<?php 
					$EName=$_GET['EName'];
					$id=$_GET['ID'];		
					?>
					<form action="approvesubmit.php?EName=<?php echo $EName; ?>&&ID=<?php echo $id; ?>" method="post">
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
                              <div class="col-sm-10"><input type="text" class="form-control" name="name" value="<?php echo $name; ?>" disabled></div>
                        </div>
						</td>
					</tr>
					<tr>
						<th><label class="col-sm-10 col-form-label" for="desg" id="label-element">Designation:</label></th>
						<td>
						<div class="form-group">
                              <div class="col-sm-10"><input type="text" class="form-control" name="desg" value="<?php echo $designation; ?>" disabled></div>
                        </div>
						</td>
					</tr>
					<tr>
						<th><label class="col-sm-10 col-form-label" for="Event" id="label-element">Event which Applicant want to attend:</label></th>
						<td>
						<div class="form-group">
                              <div class="col-sm-10"><input type="text" class="form-control" name="Event" value="<?php echo $eventtype; ?>" disabled></div>
                        </div>
						</td>
					</tr>
					<tr>
						<th><label class="col-sm-10 col-form-label" for="sdate" id="label-element">Scheduled Date:</label></th> 
						<td>
						<div class="form-inline">
						<div class="form-group col-sm-12">
							<input type="text" class="col-sm-4 form-control success" name="sdate" value="<?php echo $SDate; ?>" disabled>
							<!--<span class="input-group-addon success">to</span>-->
							<label class="col-sm-1 col-form-label" id="label-element">To</label>
							<input type="text" class="col-sm-4 form-control success" name="edate" value="<?php echo $EDate; ?>" disabled>
						</div>
						</div>
						</td>
					</tr>
					<tr>
						<th><label class="col-sm-10 col-form-label" for="pforpresent" id="label-element">Paper selected for presentation:</label></th>
						<td>
						<div class="form-group">
                              <div class="col-sm-10"><input type="text" class="form-control" name="pforpresent" value="<?php echo $PresentationPaper; ?>" disabled></div>
                        </div>
						</td>
					</tr>
					<tr>
						<th><label class="col-sm-10 col-form-label" for="eventplaced" id="label-element">Place where the event will be organized:</label></th>
						<td>
						<div class="form-group">
                              <div class="col-sm-10"><input type="text" class="form-control" name="eventplaced" value="<?php echo $Eventplaced; ?>" disabled></div>
                        </div>
						</td>
					</tr>
					<tr>
						<th><label class="col-sm-10 col-form-label" for="organizer" id="label-element">Organizer's Detail:</label></th> 
						<td>
						<div class="form-group">
                              <div class="col-sm-10"><input type="text" class="form-control" name="organizer" value="<?php echo $Organizer; ?>" disabled></div>
                        </div>
						</td>
					</tr>
					<tr>
						<th><label class="col-sm-10 col-form-label" for="Benefits" id="label-element">Benefits to the Institute:</label></th>
						<td>
						<div class="form-group">
                              <div class="col-sm-10"><input type="text" class="form-control" name="Benefits" value="<?php echo $Benefits; ?>" disabled></div>
                        </div>
						</td>
					</tr>
					<tr>
						<th><label class="col-sm-10 col-form-label" for="Respo" id="label-element">The letter of Invitation and letter of Acceptance of paper attached with the Application:</label></th> 
						<td>
                        <div class="form-group">
                              <div class="col-sm-10"><input type="text" class="form-control" name="Respo" value="<?php echo $Respo; ?>" disabled></div>
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
							<input type="text" name="budpro" size="66" value="<?php echo $Budpro; ?>" disabled>
						</td>
						</tr>
						<tr>
						<th id="sub-label-element">
						(b) Budget utilized:
						</th>
						<td>
							<input type="text" name="budutl" size="66" value="<?php echo $Budutl; ?>" disabled>
						</td>
						</tr>
						<tr>
						<th id="sub-label-element">
						(c) Budget Available:
						</th>
						<td>
							<input type="text" name="budavl" size="66" value="<?php echo $Budavl; ?>" disabled>
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
							<input type="text" name="regfee" value="<?php echo $Regfee; ?>" disabled>
							</td>
							</tr>
							<tr>
							<th id="sub-label-element">
							TA/DA:
							</th>
							<td>
							<input type="text" name="tada" value="<?php echo $Tada; ?>" disabled>
							</td>
							</tr>
							<tr>
							<th id="sub-label-element">
							Accommodations:
							</th>
							<td>
							<input type="text" name="accom" value="<?php echo $Accom; ?>" disabled>
							</td>
							</tr>
							<tr>
							<th id="sub-label-element">
							Others:
							</th>
							<td>
							<input type="text" name="oth" value="<?php echo $Others; ?>" disabled>
							</td>
							</tr>
							</table>
						</td>
					</tr>
					<tr>
						<th><label class="col-sm-10 col-form-label" for="totexpend" id="label-element">What is total expenditure estimated likely to incurr to attend the function?</label></th>
						<td>
						<div class="form-group">
                              <div class="col-sm-10"><input type="text" class="form-control" name="totexpend" value="<?php echo $TotExpend; ?>" disabled></div>
                        </div>
						</td>
					</tr>
					<tr>
						<th><label class="col-sm-10 col-form-label" id="label-element">Date(s) of duty leave required:</label></th>
						<td>
						<div class="form-inline">
						<div class="form-group col-sm-12">
							<input type="text" class="col-sm-4 form-control success" name="stdate" value="<?php echo $StDate; ?>" disabled>
							<!--<span class="input-group-addon success">to</span>-->
							<label class="col-sm-1 col-form-label" id="label-element">To</label>
							<input type="text" class="col-sm-4 form-control success" name="endate" value="<?php echo $EnDate; ?>" disabled>
						</div>
						</div>
						</td>
					</tr>
					<tr>
						<th><label class="col-sm-10 col-form-label" for="numconfr" id="label-element">How many conference he/she has attended in current financial year:</label></th> 
						<td>
						<div class="form-group">
                              <div class="col-sm-10"><input type="number" class="form-control" name="numconfr" value="<?php echo $Numconfr; ?>" disabled></div>
                        </div>
						</td>
					</tr>
					<tr>
						<th><label class="col-sm-10 col-form-label" for="dtconfr" id="label-element">When did he/she attended the conference:</label></th>
						<td>
						<div class="form-group">
                              <div class="col-sm-10"><input type="text" class="form-control" name="dtconfr" value="<?php echo $Dtconfr; ?>" disabled></div>
                        </div>
						</td>
					</tr>
					<?php
					if($logindesg=='HOD' || $logindesg=='Director')
					{
					?>
					<tfoot>
						<?php
						$Expenditure=$Regfee+$Tada+$Accom+$Others+$TotExpend;
						if($Budavl<$Expenditure)
						{
						?>
						<tr>
							<td colspan="2" align="center">
								<div class="form-group">
									<div class="col-sm-10"><input style="font-family:Verdana, sans-serif;font-size: 120%;color: white;background-color:red;" type="text" class="form-control" value="Alert: Total Expense Mentioned is Exceeding the Budget Available..." disabled></div>
								</div>
							</td>
						</tr>
						<?php
						}
						?>
						<tr>
							<?php
							if($hodapproved=='' && $deanapproved=='')
							{
							?>
							<td colspan="2" align="center">
							<input class="submit btn btn-danger1" type="submit" name="submit" value="Approve">
							<input class="submit btn btn-danger" type="submit" formaction="javascript:myFunction(); return false;" id="submit" onclick="enableReason()" value="Reject">
							</td>
							<?php
							}
							else if($hodapproved=='Approve' && $deanapproved=='Approve')
							{
							?>
							<td colspan="2" align="center">
							<input class="submit btn btn-danger1" type="submit" name="submit" value="Already Approved" disabled>
							<!--<input class="submit btn btn-danger" type="submit" formaction="javascript:myFunction(); return false;" id="submit" onclick="enableReason()" value="Reject">-->
							</td>
							<?php
							}
							else if($deanapproved=='Reject' || $hodapproved=='Reject')
							{
							?>
							<td colspan="2" align="center">
							<input class="submit btn btn-danger1" type="submit" name="submit" value="Already Rejected" disabled>
							<!--<input class="submit btn btn-danger" type="submit" formaction="javascript:myFunction(); return false;" id="submit" onclick="enableReason()" value="Reject">-->
							</td>
							<?php
							}
							else if($deanapproved=='' && $logindesg=='Director')
							{
							?>
							<td colspan="2" align="center">
							<input class="submit btn btn-danger1" type="submit" name="submit" value="Approve">
							<input class="submit btn btn-danger" type="submit" formaction="javascript:myFunction(); return false;" id="submit" onclick="enableReason()" value="Reject">
							</td>
							<?php
							}
							else if($hodapproved=='Approve' && $logindesg='HOD')
							{
							?>
							<td colspan="2" align="center">
							<input class="submit btn btn-danger1" type="submit" name="submit" value="Already Approved, But Pending From Dean's Side" disabled>
							<!--<input class="submit btn btn-danger" type="submit" formaction="javascript:myFunction(); return false;" id="submit" onclick="enableReason()" value="Reject">-->
							</td>
							<?php
							}
							?>
						</tr>
						<script>
						function enableReason()
						{
							document.getElementById('footer').style.display="block";
						}
						</script>
						<tr id="footer" style="display:none">
							<td colspan="2">
								<label class="col-sm-10 col-form-label" for="reasonforreject" id="label-element">Any Specific Reason For Rejection of Form?</label>
								<textarea type="text" name="reasonforreject" align="left" class="form-control">
								</textarea>
								<input style="margin-top:3px" class="submit btn btn-danger" type="submit" name="submit" value="Reject">
							</td>
						</tr>
					</tfoot>
					<?php
					}
					else
					{
					?>
					<tfoot>
						<tr>
							<td colspan="2" align="center">
							
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
								<a href="createpdf.php?EName=<?php echo $EName; ?>&&ID=<?php echo $id; ?>" class="submit btn btn-danger1" >Save as PDF</a>
								<?php
								}
								else if($deanapproved=='' && $hodapproved=='')
								{
								?>
								<label class="col-sm-10 col-form-label" for="reasonforreject" id="label-element">Pending from both HOD & Director</label>
								<a href="createpdf.php?EName=<?php echo $EName; ?>&&ID=<?php echo $id; ?>" class="submit btn btn-danger1" >Save as PDF</a>
								<?php
								}
								else if($deanapproved=='' && $hodapproved=='Reject')
								{
								?>
								<label class="col-sm-10 col-form-label" for="reasonforreject" id="label-element">Rejected by HOD</label>
								<a href="createpdf.php?EName=<?php echo $EName; ?>&&ID=<?php echo $id; ?>" class="submit btn btn-danger1" >Save as PDF</a>
								<?php
								}
								else if($deanapproved=='Reject' && $hodapproved=='Approve')
								{
								?>
								<label class="col-sm-10 col-form-label" for="reasonforreject" id="label-element">Approved by HOD, But Rejected by Director</label>
								<a href="createpdf.php?EName=<?php echo $EName; ?>&&ID=<?php echo $id; ?>" class="submit btn btn-danger1" >Save as PDF</a>
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
						if($deanapproved=="Approve" && $hodapproved=="Approve")
						{
						?>
						<tr id="footer">
							<td colspan="2" align="center">
							<a href="TADA.php?ID=<?php echo $id; ?>" class="submit btn btn-danger1" value="Get Reimbursement">Get Reimbursement</a>
							<a href="permission_order_pdf.php?EName=<?php echo $name; ?>&&ID=<?php echo $id; ?>" class="submit btn btn-danger1" value="Get permission order">Get Permission Order</a>
							<a href="createpdf.php?EName=<?php echo $EName; ?>&&ID=<?php echo $id; ?>" class="submit btn btn-danger1" >Save as PDF</a>
							</td>
						</tr>
						<?php
						}
						?>
					</tfoot>
					<?php
					}	
					?>
					</table>
					</form>
					</div>
				</div>
              </div>
            </div>
          <!-- end: content -->
          
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
