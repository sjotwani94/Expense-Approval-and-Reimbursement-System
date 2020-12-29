<?php
	include("conn.php");
	$Email=$_GET['Email']; 
	$query="Delete from registration where Email_ID='$Email'";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
	$Department=$row["Department"];
?>
	<script type="text/javascript">
		var Dept="<?php echo $Department; ?>";
	</script>
<?php
	if($result==1)
	{
		echo'<script type="text/javascript">alert("Record Deleted");window.location = "reg-manage.php?Department="+Dept;</script>';
	}
?>