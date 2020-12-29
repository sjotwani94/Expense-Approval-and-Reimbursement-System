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
			$EmailID=$_GET['Email'];
			$str1=$_POST['pass'];
			$str2=$_POST['confirmpass'];
			$condition=strcmp($str1,$str2);
			if (empty($_POST['fullname']) || empty($_POST['department']) || empty($_POST['designation']) || empty($_POST['email']) || empty($_POST['pass']) || empty($_POST['confirmpass'])) 
			{
				$error = "Some Data Entered is either empty/invalid";
				echo '<script type="text/javascript">alert($error);window.location=\'register.php\'</script>';
			}
			else if ($condition!=0)
			{
				echo '<script type="text/javascript">alert("Confirm Password Doesn`t Match with Password...");window.location=\'register.php\'</script>';
			}
			else
			{
				// Define All Parameters
				$Name=$_POST['fullname'];
				$Department=$_POST['department'];
				$Section=$_POST['section'];
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
				$query="update registration set Name='$Name',Department='$Department',Section='$Section',Designation='$Desgn',Email_ID='$Email',Password='$Password',Confirm_Pass='$ConfirmPassword' where Email_ID='$EmailID'";
				$result = mysqli_query($conn,$query);
				$rows = mysqli_num_rows($result);
				?>
				<script type="text/javascript">
				var Dept="<?php echo $Department; ?>";
				</script>
				<?php
				echo '<script type="text/javascript">alert("Successfully Updated!");window.location = "reg-manage.php?Department="+Dept;</script>';
				mysqli_close($conn); // Closing Connection
				}
			}
		}
		else if($Action=='newdata')
		{
			$str1=$_POST['pass'];
			$str2=$_POST['confirmpass'];
			$condition=strcmp($str1,$str2);
			if (empty($_POST['email']) || empty($_POST['pass']) || empty($_POST['confirmpass'])) 
			{
				$error = "Some Data Entered is either empty/invalid";
				echo '<script type="text/javascript">alert($error);window.location=\'updatedata.php\'</script>';
			}
			else if ($condition!=0)
			{
				echo '<script type="text/javascript">alert("Confirm Password Doesn`t Match with Password...");window.location=\'register.php?Action=newdata\'</script>';
			}
			else
			{
				// Define All Parameters
				//$Name=$_POST['fullname'];
				$Department=$_POST['department'];
				//$Desgn=$_POST['designation'];
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
				$query="insert into registration(Department,Email_ID,Password,Confirm_Pass) values('$Department','$Email','$Password','$ConfirmPassword')";
				$result = mysqli_query($conn,$query);
				$rows = mysqli_num_rows($result);
				?>
				<script type="text/javascript">
				var Dept="<?php echo $Department; ?>";
				</script>
				<?php
				echo '<script type="text/javascript">alert("Successfully Registered!");window.location = "reg-manage.php?Department="+Dept;</script>';
				mysqli_close($conn); // Closing Connection
				}
			}
		}
	}
?>