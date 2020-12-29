<?php
	include("conn.php");
	$TID=$_GET['ID']; 
	$query="Delete from expense_form_1 where ID='$TID'";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
	$Event=$row["Event_Type"];
?>
	<script type="text/javascript">
		var Dept="<?php echo $Event; ?>";
	</script>
<?php
	if($result==1)
	{
		echo'<script type="text/javascript">alert("Record Deleted");window.location = "sttp-form.php?Event="+Dept;</script>';
	}
?>