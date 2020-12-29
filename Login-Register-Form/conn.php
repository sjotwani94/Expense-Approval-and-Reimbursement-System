<?php /*?> 
 <?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'tourism');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die(mysqli_error());
?><?php */?>

<?php
$conn=mysqli_connect("localhost","root","","miniproject2");
if(!$conn)
{
	die("could not connect server... and Database!!");
}
?>