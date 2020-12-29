<?php
include("conn.php");
include("session.php");
require_once __DIR__ . '/vendor/autoload.php';
	$EName=$_GET['EName'];
	$id=$_GET['ID'];
	$sql="select * from expense_form_1 where Emp_Name='$EName' and ID='$id'";
	$result = mysqli_query($conn,$sql);				
	$row = mysqli_fetch_assoc($result);
	$sql1="select * from registration where Emp_Name='$EName' and ID='$id'";
	$result1 = mysqli_query($conn,$sql1);				
	$row1 = mysqli_fetch_assoc($result1);
	$name=$row["Emp_Name"];
	$desg=$row["Emp_Designation"];
	$dept=$row1["Department"];
	$paper='Data mining';
	$event=$row["Event_Type"];
	$organizer=$row["Organizer_Detail"];
	$startdate=date('d-m-Y',strtotime($row["Sched_Start_Date"]));
	$enddate=date('d-m-Y',strtotime($row["Sched_End_Date"]));
	$allownce=$row["Tot_Expenditure"];
	
	$mpdf = new \Mpdf\Mpdf();


$data .= '<img src="ITNU_logo.jpg" align="center" style="width:300px;height:100px;"><br><br><br>';
$data .='Date : '. date("d/m/Y");
$data .= '<h1 align="center">ORDER</h1><hr>';
$data .= '<p>The Director, Institute of Technology has approved Duty Leave to Mr.<font color="blue">' . $name .' , '. $desg .' , '. $dept .'</font>  Department under the School of Technology, Institute of Technology, Nirma University to attend and present paper titled <font color="blue">" '. $paper .' "</font> in the <font color="blue"> ' .$event . '</font> to be organized by <font color="blue">'.$organizer .'</font> on <font color="blue">'. $startdate .'</font> to <font color="blue">' .$enddate. '</font>.</p>';

$data .='<h2>The same is subject to following conditions :</h2>';
$data .='<ol><li> He will be treated as on duty for the period covered by the programme with reasonable journey period.<br>';
$data .='<li> He should report to the organizer well in time.<br>';
$data .='<li> He should not drop out from the programme.<br>';
$data .='<li> He has to obtain a certificate of attendance and satisfactory performance from the programme organizer.<br>';
$data .='<li> He has to hand over the literature/books etc. that might be receiving from the programme to the Institute.<br>';
$data .='<li> He has to prepare and submit self speaking technical report highlighting the experience/gains of the programme to the Director, Institute of Technology through Head of the Department.<br>';
$data .='<li> Immediately after return from the programme, he should address a staff meeting with a view to share the knowledge gained from the programme.<br>';
$data .='<li> The registration fee of Rs.<font color="blue">' .$allownce . '/-</font> will be paid by the Institute.<br>';
$data .='<li> TA/DA will be paid as per rule. In case of claim for conveyance charges, actual points of travel should be mentioned in the TA/DA bill. Also, in case of travel by train/ bus, actual ticket/ related vouchers either in original or certified photocopies should invariably be attached along with TA/DA bills.<br>';
$data .='<li> He will attend the said programme subject to the condition of availability of budget.</ol><br><br><br><br><br>';

$data.='<address>Deputy Registrar<br>Institute Of Technology</address>';

$mpdf->WriteHTML($data);
$mpdf->Output('permission_latter.pdf','D');
?>