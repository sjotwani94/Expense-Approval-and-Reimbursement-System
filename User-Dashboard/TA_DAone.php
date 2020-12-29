<?php
include("conn.php");
include("session.php");
if(isset($_POST['submit_row']))
{	
	$sttp_id=$_GET["ID"];
	$ta_month=$_POST['ta_month'];
	$basic_pay=$_POST['basic_pay'];
	$agp=$_POST['agp'];
	$purpose=$_POST['purpose'];
	$certificates1=$_POST['certificates'];
	$certificates=implode(",",$certificates1);
	$adv_rs=$_POST['adv_rs'];
	$order_date=$_POST['order_date'];
	$fare=$_POST['fare'];
	$Da_allow=$_POST['Da_allow'];
	$conv=$_POST['conv'];
	$other=$_POST['other'];
	$total=$_POST['total'];
	
	if($ta_month!="" && $basic_pay!="" && $agp!="" && $purpose!="" &&   $fare!="" && $Da_allow!="" && $conv!="" && $other!="" && $total!="" )
	{
		$sql="insert into ta_da_1 values('','$loginsession','$sttp_id','$ta_month','$basic_pay','$agp','$purpose','$certificates','$fare','$Da_allow','$conv','$other','$total')";
		$results = mysqli_query($conn,$sql);
		$row = mysqli_num_rows($results);
	}
 		
	 
 /*-----------------------------------------------------------------------------------------------------------------*/
 $dep_date=$_POST['dep_date'];
 $dep_place=$_POST['dep_place'];
 $dep_time=$_POST['dep_time'];
 $arr_date=$_POST['arr_date'];
 $arr_place=$_POST['arr_place'];
 $arr_time=$_POST['arr_time'];
 $travel_by=$_POST['travel_by'];
 $fare_amt=$_POST['fare_amt'];
 $halt_days=$_POST['halt_days'];
 $rate_da=$_POST['rate_da'];
 $total_da=$_POST['total_da'];
 $con_date=$_POST['con_date'];
 $from_place=$_POST['from_place'];
 $to_place=$_POST['to_place'];
 $kmp=$_POST['kmp'];
 $con_amt=$_POST['con_amt'];
 $sql1="select ID from ta_da_1 where Email_ID='$loginsession' and STTP_ID='$sttp_id' and Basic_pay='$basic_pay' and AGP='$agp' and PURPOSE='$purpose' and FARE='$fare' and DAILY_ALL='$Da_allow' and CONVEYANCE='$conv' and OTHERS='$other' and TOTAL='$total'  ";
	$results1 = mysqli_query($conn,$sql1);
	$row1 = mysqli_fetch_assoc($results1);
	$id_tada=$row1['ID'];
 for($i=0;$i<count($dep_date);$i++)
 {
  if($dep_date[$i]!="" && $dep_place[$i]!="" && $dep_time[$i]!="" && $arr_date[$i]!="" && $arr_place[$i]!="" && $arr_time[$i]!="" && $travel_by[$i]!="" && $fare_amt[$i]!="" && $halt_days[$i]!="" && $rate_da[$i]!="" && $total_da[$i]!="" && $con_date[$i]!="" && $from_place[$i]!="" && $to_place[$i]!="" && $kmp[$i]!="" && $con_amt[$i]!="")
  {	
	$query="insert into ta_da values('$loginsession','$id_tada','','$dep_date[$i]','$dep_place[$i]','$dep_time[$i]','$arr_date[$i]','$arr_place[$i]','$arr_time[$i]','$travel_by[$i]','$fare_amt[$i]','$halt_days[$i]','$rate_da[$i]','$total_da[$i]','$con_date[$i]','$from_place[$i]','$to_place[$i]','$kmp[$i]','$con_amt[$i]')";
	$result = mysqli_query($conn,$query);
	$rows[$i] = mysqli_num_rows($result);
  }
  else
  {
	 echo '<script type="text/javascript">alert("impropper data entry...");window.location=\'TADA.php\'</script>'; 
  }
 }
 echo '<script type="text/javascript">alert("Approval Form Was Sent & Delivered...");window.location=\'TADA.php\'</script>';
 mysqli_close($conn);
}

?>