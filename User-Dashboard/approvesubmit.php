<?php
	include("conn.php");
	include("session.php");
	//session_start(); // Starting Session
	$EName=$_GET['EName'];
	$id=$_GET['ID'];
	if (isset($_POST['submit']))
	{
		//$str1=$_POST['pass'];
		//$str2=$_POST['confirmpass'];
		//$condition=strcmp($str1,$str2);
		if ($_POST['submit']=="Approve") 
		{	
			if($logindesg=="HOD")
			{
			$Status=$_POST['submit'];
			$query="update expense_form_1 set HOD_Approved='$Status' where Emp_Name='$EName' and ID='$id'";
			$result = mysqli_query($conn,$query);
			$rows = mysqli_num_rows($result);
			mysqli_close($conn); // Closing Connection
?>
			<script type="text/javascript">
			var Desgn="<?php echo $logindesg; ?>";
			</script>
		<?php
			echo '<script type="text/javascript">alert("Approval Passed to Director, Status Updated to Employee...");window.location="mail-inbox.php?Desg="+Desgn</script>';
			}
			else
			{
			$Status=$_POST['submit'];
			$query="update expense_form_1 set Dean_Approved='$Status' where Emp_Name='$EName' and ID='$id'";
			$result = mysqli_query($conn,$query);
			$rows = mysqli_num_rows($result);
			mysqli_close($conn); // Closing Connection
?>
			<script type="text/javascript">
			var Desgn="<?php echo $logindesg; ?>";
			</script>
		<?php
			echo '<script type="text/javascript">alert("Form is Approved, Status Updated to Employee...");window.location="mail-inbox.php?Desg="+Desgn</script>';
			}
		}
		else if ($_POST['submit']=="Reject")
		{
			if($logindesg=="HOD")
			{
			$Status=$_POST['submit'];
			$Reason_For_Reject=$_POST['reasonforreject'];
			$query="update expense_form_1 set HOD_Approved='$Status',Reason_For_Rejection='$Reason_For_Reject' where Emp_Name='$EName' and ID='$id'";
			$result = mysqli_query($conn,$query);
			$rows = mysqli_num_rows($result);
			mysqli_close($conn); // Closing Connection
?>
			<script type="text/javascript">
			var Desgn="<?php echo $logindesg; ?>";
			</script>
		<?php
			echo '<script type="text/javascript">alert("Approval Rejected, Status Updated to Employee...");window.location="mail-inbox.php?Desg="+Desgn</script>';
			}
			else
			{
			$Status=$_POST['submit'];
			$Reason_For_Reject=$_POST['reasonforreject'];
			$query="update expense_form_1 set Dean_Approved='$Status',Reason_For_Rejection='$Reason_For_Reject' where Emp_Name='$EName' and ID='$id'";
			$result = mysqli_query($conn,$query);
			$rows = mysqli_num_rows($result);
			mysqli_close($conn); // Closing Connection
?>
			<script type="text/javascript">
			var Desgn="<?php echo $logindesg; ?>";
			</script>
		<?php
			echo '<script type="text/javascript">alert("Form is Rejected, Status Updated to Employee...");window.location="mail-inbox.php?Desg="+Desgn</script>';
			}
		}
	}
?>