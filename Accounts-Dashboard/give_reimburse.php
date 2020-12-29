<?php
	include("conn.php");
	include("session.php");
	$Email_ID=$_GET['Email_ID'];
	$tid=$_GET['ID'];
	if (isset($_POST['give_reimbursement']))
	{
		$sql12="select * from ta_da_1 where id='$tid'";
		$result12 = mysqli_query($conn,$sql12);
		$row12 = mysqli_fetch_assoc($result12);
		$sttp_id=$row12["STTP_ID"];
		$sql="select * from expense_form_1 where id='$sttp_id'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		$Regfee=$row["FA_Registration_Fee"];
		$Tada=$row["TA_DA"];
		$Accom=$row["Accomodations"];
		$Others=$row["FA_Others"];
		$TotExpend=$row["Tot_Expenditure"];
		$Sum=$Regfee+$Tada+$Accom+$Others+$TotExpend;
		$sql1="select * from registration where Email_ID='$Email_ID'";
		$result1 = mysqli_query($conn,$sql1);
		$row1 = mysqli_fetch_assoc($result1);
		$Name=$row1["Name"];
		$Department=$row1["Department"];
		$Section=$row1["Section"];
		$sql2="select * from budgets where Section='$Section'";
		$result2 = mysqli_query($conn,$sql2);
		$row2 = mysqli_fetch_assoc($result2);
		if($Sum<=$row2["Budget_Available"])
		{
			$query="update budgets set Budget_Available = Budget_Available - '$Sum', Budget_Utilized = Budget_Utilized + '$Sum' where Section='$Section'";
			$result3 = mysqli_query($conn,$query);
			$rows3 = mysqli_fetch_assoc($result3);
			
			$query1="insert into reimburse_manage(TA_DA_ID,Emp_Name,Email_ID,Department,Section,Budget_Allocated) values('$tid','$Name','$Email_ID','$Department','$Section','$Sum')";
			$result4 = mysqli_query($conn,$query1);
			$rows4 = mysqli_fetch_assoc($result4);
			mysqli_close($conn);
			
			echo '<script type="text/javascript">alert("Successfully Reimbursed!!!");window.location="tada-form.php"</script>';
		}
		else
		{
			echo '<script type="text/javascript">alert("Insufficient Funds...");window.location="tada-form.php"</script>';
		}
	}
?>