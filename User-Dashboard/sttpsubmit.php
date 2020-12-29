<?php
	include("conn.php");
	include("session.php");
	//session_start(); // Starting Session
				
	if (isset($_POST['submit']))
	{
		//$str1=$_POST['pass'];
		//$str2=$_POST['confirmpass'];
		//$condition=strcmp($str1,$str2);
		if ( empty($_POST['Event']) || empty($_POST['sdate']) || empty($_POST['edate']) || empty($_POST['pforpresent']) || empty($_POST['eventplaced']) || empty($_POST['organizer']) || empty($_POST['Benefits']) || empty($_POST['Respo']) || empty($_POST['budpro']) || empty($_POST['budutl']) || empty($_POST['budavl']) || empty($_POST['regfee']) || empty($_POST['tada']) || empty($_POST['accom']) || empty($_POST['oth']) || empty($_POST['totexpend']) || empty($_POST['stdate']) || empty($_POST['endate'])) 
		{
			echo '<script type="text/javascript">alert("Some Data Entered is either empty/invalid");window.location=\'STTP.php\'</script>';
		}
		else
		{
			// Define All Parameters
			$Event=$_POST['Event'];
			$startdate=$_POST['sdate'];
			$SDate=date('Y-m-d',strtotime($startdate));
			$enddate=$_POST['edate'];
			$EDate=date('Y-m-d',strtotime($enddate));
			$PresentationPaper=$_POST['pforpresent'];
			$Eventplaced=$_POST['eventplaced'];
			$Organizer=$_POST['organizer'];
			$Benefits=$_POST['Benefits'];
			$Respo=$_POST['Respo'];
			$Budpro=$_POST['budpro'];
			$Budutl=$_POST['budutl'];
			$Budavl=$_POST['budavl'];
			$Regfee=$_POST['regfee'];
			$Tada=$_POST['tada'];
			$Accom=$_POST['accom'];
			$Others=$_POST['oth'];
			$TotExpend=$_POST['totexpend'];
			$starttdate=$_POST['stdate'];
			$StDate=date('Y-m-d',strtotime($starttdate));
			$endddate=$_POST['endate'];
			$EnDate=date('Y-m-d',strtotime($endddate));
			$Numconfr=$_POST['numconfr'];
			$dateconfr=$_POST['dtconfr'];
			$Dtconfr=date('Y-m-d',strtotime($dateconfr));
			// SQL query to fetch information of registerd 	users and finds user match.
			$query="insert into expense_form_1(Emp_Name,Emp_Designation,Event_Type,Sched_Start_Date,Sched_End_Date,Presentation_Paper,Event_Venue,Organizer_Detail,Benefits_To_Institute,Letter_Attached,Budget_Current_Year,Budget_Utilized,Budget_Available,FA_Registration_Fee,TA_DA,Accomodations,FA_Others,Tot_Expenditure,DOD_Leave_Start,DOD_Leave_End,No_Of_Attnd_Confr,When_Attnd_Confr) values('$login_session','$logindesg','$Event','$SDate','$EDate','$PresentationPaper','$Eventplaced','$Organizer','$Benefits','$Respo','$Budpro','$Budutl','$Budavl','$Regfee','$Tada','$Accom','$Others','$TotExpend','$StDate','$EnDate','$Numconfr','$Dtconfr')";
			$result = mysqli_query($conn,$query);
			$rows = mysqli_num_rows($result);
			echo '<script type="text/javascript">alert("Approval Form Was Sent & Delivered...");window.location=\'index.php\'</script>';
			mysqli_close($conn); // Closing Connection
		}
	}
?>