<?php
	include("conn.php");
	//include("session.php");
	//session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit']))
	{
		$str1=$_POST['pass'];
		$str2=$_POST['confirmpass'];
		$condition=strcmp($str1,$str2);
		if (empty($_POST['fullname']) || empty($_POST['department']) || empty($_POST['designation']) || empty($_POST['email']) || empty($_POST['pass']) || empty($_POST['confirmpass'])) 
		{
			echo '<script type="text/javascript">alert("Some Data Entered is either empty/invalid");window.location=\'login.php\'</script>';
		}
		else if ($condition!=0)
		{
			echo '<script type="text/javascript">alert("Confirm Password Doesn`t Match with Password...");window.location=\'login.php\'</script>';
		}
		else
		{
			// Define All Parameters
			$Name=$_POST['fullname'];
			$Department=$_POST['department'];
			$Desgn=$_POST['designation'];
			$Email=$_POST['email'];
			$Password=$_POST['pass'];
			$ConfirmPassword=$_POST['confirmpass'];
			function validate($Email)
			{
				$validDomains = array('nirmauni.ac.in');
				$parts = explode('@',$Email);
				$domain = $parts[1];
				if(in_array($domain,$validDomains)) return true;
				return false;
			}
			if(validate($Email)==false)
			{
				echo '<script type="text/javascript">alert("Domain Name of Email_ID isn`t nirmauni.ac.in!");window.location=\'login.php\'</script>';
			}
			else
			{
			// SQL query to fetch information of registerd 	users and finds user match.
			$query="update registration set Name='$Name',Department='$Department',Designation='$Desgn',Password='$Password',Confirm_Pass='$ConfirmPassword' where Email_ID=$Email";
			$result = mysqli_query($conn,$query);
			$rows = mysqli_num_rows($result);
			echo '<script type="text/javascript">alert("Successfully Registered!");window.location=\'login.php\'</script>';
			mysqli_close($conn); // Closing Connection
			}
		}
	}
?>