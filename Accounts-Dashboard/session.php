<?php
include("conn.php");
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysqli_connect("localhost", "root", "","");
// Selecting Database
//$db = mysqli_select_db("sidinqubeta", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['admin_login'];
// SQL Query To Fetch Complete Information Of User
$query12=mysqli_query($conn,"select * from registration where Email_ID='$user_check'");
$row12 = mysqli_fetch_assoc($query12);
$loginsession=$row12['Email_ID'];
$login_session=$row12['Name'];
$logindesg=$row12['Designation'];
$logindept=$row12['Department'];
if(!isset($loginsession))
	{
		mysqli_close($conn); // Closing Connection
		//header('Location:index.php'); // Redirecting To Home Page
		echo '<script type="text/javascript">alert("You Must Login First...");window.location=\'../Login-Register-Form/login.php\'</script>';
	}
?>