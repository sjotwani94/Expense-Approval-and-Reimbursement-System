<?php
	include("conn.php");
	$Section=$_GET['Section']; 
	$query="Delete from budgets where Section='$Section'";
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
		echo'<script type="text/javascript">alert("Record Deleted");window.location = "budg-manage.php?Department="+Dept;</script>';
	}
?>