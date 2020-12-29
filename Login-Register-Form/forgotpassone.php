<?php
	include("conn.php");
	session_start();
	

	if(isset($_POST['submit']))
	{
		if (empty($_POST['email'])) 
		{
			echo '<script type="text/javascript">alert("Please Enter  Apropriate Data");window.location=\'forgotpass.php\'</script>';
		}
		else 
		{	
			$Email=$_POST['email'];
			$_SESSION['E']=$Email;
			$query="select * from registration where Email_ID='$Email'";
			$result = mysqli_query($conn,$query);
			$rows = mysqli_num_rows($result);
			if ($rows == 1)
			{
				$str = "a1s2d3f4g5h6j7i8ueoptkeitjtfgdhjjdvjnd96451234682365g4fsfhfg24878456";
				$str = str_shuffle($str);
				$str = substr($str,0,5);
				//header("location:resetpass.php");
				$url = "http://localhost/MiniProject2/Login-Register-Form/resetpass.php?token=$str&Email=$Email";
				mail($Email,"Reset Password",$url,"From: ears.3436@gmail.com " . "\r\n");
				$query="update registration set Token='$str' where Email_ID='$Email'";
				$result = mysqli_query($conn,$query);
				$rows = mysqli_num_rows($result);
				mysqli_close($conn); // Closing Connection
				echo '<script type="text/javascript">alert("Email has been sent");window.location=\'forgotpass.php\'</script>';
			}
			else
			{
				echo '<script type="text/javascript">alert("Email ID does not exist");window.location=\'forgotpass.php\'</script>';
			}
		}
	}
?>