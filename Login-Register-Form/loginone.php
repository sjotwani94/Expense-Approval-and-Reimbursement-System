<?php
	include("conn.php");
	//include("session.php");
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit']))
	{
		if (empty($_POST['email']) || empty($_POST['pass'])) 
		{
			echo '<script type="text/javascript">alert("Email or Password is invalid");window.location=\'login.php\'</script>';
		}
		else if($_POST['pass']=="changeme")
		{
			$Email=$_POST['email'];
			$Password=$_POST['pass'];
			$query="select Email_ID,Password from registration where Password='$Password' AND Email_ID='$Email'";
			$result = mysqli_query($conn,$query);
			$rows = mysqli_num_rows($result);
			if ($rows == 1)
			{
				$_SESSION['admin_login']=$Email; // Initializing Session
				$s1 = $Password;
				$s2 = "changeme";
				$cond=strcmp($s1,$s2);
				if($cond==0)
				{
					header("location:register.php"); // Redirecting To Other Page
				}
				
			}
			else
				{
					echo '<script type="text/javascript">alert("Name or Password is invalid");window.location=\'login.php\'</script>';
				}
		}
		
		else
		{// Define $email and $password
			$Email=$_POST['email'];
			$Password=$_POST['pass'];
			// SQL query to fetch information of registerd 	users and finds user match.
			$query="select * from registration where Password='$Password' AND Email_ID='$Email'";
			$query1="select Designation from registration where Password='$Password' AND Email_ID='$Email'";
			$result = mysqli_query($conn,$query);
			$result1 = mysqli_query($conn,$query1);
			$rows = mysqli_num_rows($result);
			$rows1 = mysqli_fetch_array($result1);
			$Desgn=$rows1["Designation"];
			if ($rows == 1)
			{
				$_SESSION['admin_login']=$Email; // Initializing Session
				$str1 = $Desgn;
				$str2 = "Administration";
				$str3 = "Accounts Manager";
				$cond=strcmp($str1,$str2);
				$cond1=strcmp($str1,$str3);
				if($cond==0)
				{
					header("location:../Admin-Dashboard/index.php"); // Redirecting To Other Page
				}
				else if($cond1==0)
				{
					header("location:../Accounts-Dashboard/index.php"); // Redirecting To Other Page
				}
				else
				{
					header("location:../User-Dashboard/index.php"); // Redirecting To Other Page
				}
			}
			else 
			{
				echo '<script type="text/javascript">alert("Name or Password is invalid");window.location=\'login.php\'</script>';
			}
			mysqli_close($conn); // Closing Connection
		}
	}
?>