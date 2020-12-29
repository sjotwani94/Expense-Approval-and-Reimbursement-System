<?php
	include("conn.php");
	//include("session.php");
	//session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	$Action=$_GET['Action'];
	if (isset($_POST['submit']))
	{
		if($Action=='Update')
		{
			$Section=$_GET['Section'];
			if (empty($_POST['department']) || empty($_POST['section']) || empty($_POST['Budget_Allocated']) || empty($_POST['Budget_Utilized'])) 
			{
				$error = "Some Data Entered is either empty/invalid";
				echo '<script type="text/javascript">alert($error);window.location=\'register.php\'</script>';
			}
			else
			{
				// Define All Parameters
				$Department=$_POST['department'];
				$section=$_POST['section'];
				$Budget_Allocated=$_POST['Budget_Allocated'];
				$Budget_Utilized=$_POST['Budget_Utilized'];
				$Budget_Available = $Budget_Allocated - $Budget_Utilized;
				// SQL query to fetch information of registerd 	users and finds user match.
				$query="update budgets set Department='$Department',Section='$Section',Budget_Allocated='$Budget_Allocated',Budget_Utilized='$Budget_Utilized',Budget_Available='$Budget_Available' where Section='$Section'";
				$result = mysqli_query($conn,$query);
				$rows = mysqli_num_rows($result);
				?>
				<script type="text/javascript">
				var Dept="<?php echo $Department; ?>";
				</script>
				<?php
				echo '<script type="text/javascript">alert("Successfully Updated!");window.location = "budg-manage.php?Department="+Dept;</script>';
				mysqli_close($conn); // Closing Connection
			}
		}
		else if($Action=='newdata')
		{
			if (empty($_POST['department']) || empty($_POST['section']) || empty($_POST['Budget_Allocated']) || empty($_POST['Budget_Utilized'])) 
			{
				$error = "Some Data Entered is either empty/invalid";
				echo '<script type="text/javascript">alert($error);window.location=\'updatedata.php\'</script>';
			}
			else
			{
				// Define All Parameters
				$Department=$_POST['department'];
				$section=$_POST['section'];
				$Budget_Allocated=$_POST['Budget_Allocated'];
				$Budget_Utilized=$_POST['Budget_Utilized'];
				$Budget_Available = $Budget_Allocated - $Budget_Utilized;
				// SQL query to fetch information of registerd 	users and finds user match.
				$query="insert into budgets(Department,Section,Budget_Allocated,Budget_Utilized,Budget_Available) values('$Department','$section','$Budget_Allocated','$Budget_Utilized','$Budget_Available')";
				$result = mysqli_query($conn,$query);
				$rows = mysqli_num_rows($result);
				?>
				<script type="text/javascript">
				var Dept="<?php echo $Department; ?>";
				</script>
				<?php
				echo '<script type="text/javascript">alert("Successfully Registered!");window.location = "budg-manage.php?Department="+Dept;</script>';
				mysqli_close($conn); // Closing Connection
			}
		}
	}
?>