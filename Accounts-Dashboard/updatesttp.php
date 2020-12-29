<?php
	include("conn.php");
	$TID=$_GET['ID']; 
	$query="Delete from ta_da natural join ta_da_1 where ID='$TID'";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
	if($result==1)
	{
		echo'<script type="text/javascript">alert("Record Deleted");window.location = "tada-form.php";</script>';
	}
?>