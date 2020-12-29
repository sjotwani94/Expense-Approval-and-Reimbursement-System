<?php
include("session.php");
require_once __DIR__ . '/vendor/autoload.php';
	$EName=$_GET['EName'];
	$id=$_GET['ID'];
	$sql="select * from expense_form_1 where Emp_Name='$EName' and ID='$id'";
	$result = mysqli_query($conn,$sql);				
	$row = mysqli_fetch_assoc($result);
	$Event=$row["Event_Type"];
	$startdate=date('d/m/Y',strtotime($row["Sched_Start_Date"]));
	$enddate=date('d/m/Y',strtotime($row["Sched_End_Date"]));
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
	$starttdate=date('d/m/Y',strtotime($row["DOD_Leave_Start"]));
	$endddate=date('d/m/Y',strtotime($row["DOD_Leave_End"]));
	$Numconfr=$row["No_Of_Attnd_Confr"];
	$dateconfr=date('d/m/Y',strtotime($row["When_Attnd_Confr"]));
	
	
	$mpdf = new \Mpdf\Mpdf();


$data = '';
$data .= '<img src="ITNU_logo.jpg" align="center" style="width:300px;height:100px;"><br><br><br>';
$data .= '<h1 align="center">Reimbursement Application</h1>';
$data .= '-------------------------------------------------------------------------------------------------------------------------------------------------------';
$data .= '<ol><li><b>Email ID : </b><font color="blue">' . $loginsession . '</font><br />';
$data .= '<li><b>Name : </b><font color="blue">' . $login_session . '</font><br />';
$data .= '<li><b>Designation : </b><font color="blue">' . $logindesg . '</font><br />';
$data .= '<li><b>Department : </b><font color="blue">' . $logindept . '</font><br />';
$data .= '<li><b>Select Event which Applicant want to attend : </b><font color="blue">' . $Event . '</font><br />';
$data .= '<li><b>Scheduled Date : </b><font color="blue">' . $startdate; $data .= '<b>  to  </b>' . $enddate . '</font><br />';
$data .= '<li><b>Paper selected for presentation : </b><font color="blue">' . $PresentationPaper . '</font><br />';
$data .= '<li><b>Place where the event will be organized : </b><font color="blue">' . $Eventplaced . '</font><br />';
$data .= '<li><b>Organizer Detail : </b><font color="blue">' . $Organizer . '</font><br />';
$data .= '<li><b>Benefits to the Institute : </b><font color="blue">' . $Benefits . '</font><br />';
$data .= '<li><b>The letter of Invitation and letter of Acceptance of paper attached with the Application :</b><font color="blue">' . $Respo . '</font><br />';
$data .= '<font size="10" color="gray">Budget Provision :</font><br />';
$data .= '<li><b>Budget Provision in current year : </b><font color="blue">' . $Budpro . '</font><br />';
$data .= '<li><b>Budget utilized : </b><font color="blue">' . $Budutl . '</font><br />';
$data .= '<li><b> Budget Available : </b><font color="blue">' . $Budavl . '</font><br />';
$data .= '<font size="10" color="gray">Details of Financial assistant required :</font><br />';
$data .= '<li><b>Registration Fee : </b><font color="blue">' . $Regfee . '</font><br />';
$data .= '<li><b>TA/DA : </b><font color="blue">' . $Tada . '</font><br />';
$data .= '<li><b>Accommodations : </b><font color="blue">' . $Accom . '</font><br />';
$data .= '<li><b>Others : </b><font color="blue">' . $Others . '</font><br />';
$data .= '<li><b>What is total expenditure estimated likely to incurr to attend the function? : </b><font color="blue">' . $TotExpend . '</font><br />';
$data .= '<li><b>Date(s) of duty leave required : </b><font color="blue">' . $starttdate; $data .= '<b>  to  </b>' . $endddate . '</font><br />';
$data .= '<li><b>How many conference he/she has attended in current financial year : </b><font color="blue">' . $Numconfr . '</font><br />';
$data .= '<li><b>When did he/she attended the conference : </b><font color="blue">' . $dateconfr . '</font></ol><br />';

$data.='<br><br><br><br><br><address align="left" >' .$login_session. ' <br>Date : '. date("d/m/Y") .'</address>';
$mpdf->WriteHTML($data);
$mpdf->Output('sttp.pdf','D');

?>