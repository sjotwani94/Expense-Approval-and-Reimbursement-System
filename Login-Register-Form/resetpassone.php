<?php
	include("conn.php");
	
	if(isset($_POST['submit']))
	{	$s1=$_POST['pass'];
		$s2=$_POST['confirmpass'];
		$cond=strcmp($s1,$s2);
		if (empty($_POST['pass']) || empty($_POST['confirmpass'])) 
		{
			echo '<script type="text/javascript">alert("Please Enter  Apropriate Data...");window.location=\'resetpass.php\'</script>';
		}
		else if ( $s1 == "changeme" )
		{
			echo '<script type="text/javascript">alert("Password is not allowed...");window.location=\'resetpass.php\'</script>';
		}
		else if ($cond!=0)
		{
			echo '<script type="text/javascript">alert("Confirm Password Doesn`t Match with Password...");window.location=\'resetpass.php\'</script>';
		}
		else 
		{	
			$Email=$_POST['email'];
			$pass=$_POST['pass'];
			$confirmpass=$_POST['confirmpass'];
			$token=$_GET['token'];
			$query="update registration set Password='$pass', Confirm_Pass='$confirmpass',Token='' where Email_ID='$Email' and Token='$token'";
			$result = mysqli_query($conn,$query);
			$rows = mysqli_num_rows($result);
			mysqli_close($conn); // Closing Connection
			echo '<script type="text/javascript">alert("Password has been Edited");window.location=\'login.php\'</script>';
		}
	}
	

?>