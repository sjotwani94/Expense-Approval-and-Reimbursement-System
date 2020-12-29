<?php
	include("conn.php");
	

	if(isset($_POST['submit']))
	{
		if (empty($_POST['email'])) 
		{
			echo '<script type="text/javascript">alert("Please Enter  Apropriate Data");window.location=\'forgotpass.php\'</script>';
		}
		else 
		{	$Email=$_POST['submit'];
			$query="select Email_ID from registration where Email_ID='$Email'";
			$result = mysqli_query($conn,$query);
			$rows = mysqli_num_rows($result);
			if($rows>0)
			{
				$str = "a1s2d3f4g5h6j7i8ueoptkeitjtfgdhjjdvjnd96451234682365g4fsfhfg24878456";
				$str = str_shuffle($str);
				$str = substr($str,0,5);
				$url = "http://nirmauni.ac.in/MiniProject2/Login-Register-Form/resetpass.php?token=$str&Email=$Email";
				mail($Email,"Reset Password","$url","From: 17bce036@nirmauni.ac.in\r\n");
				$query="update registration set Token='$str' where Email_ID='$Email'";
				$result = mysqli_query($conn,$query);
				$rows = mysqli_num_rows($result);
				mysqli_close($conn); // Closing Connection
			}
			else
			{
				echo '<script type="text/javascript">alert("Email ID dose not exist");window.location=\'forgotpass.php\'</script>';
			}
		}
	}
?>