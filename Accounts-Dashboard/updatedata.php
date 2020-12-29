<!DOCTYPE html>
<?php
include("conn.php");
include("session.php"); 
include("updateone.php"); 
?>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title>NU-Expanse Approval & reimbersment System</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="assets\img\nirma_logo.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login200 p-t-90 p-b-30">
				<?php
				$Action=$_GET['Action'];
				if($Action=='newdata')
				{
				?>
				<form action="updateone.php?Action=newdata" method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-40">
						Budgets Allocation Form<br>
						New Data Entry
					</span>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter the department involved">
						<input class="input100" type="text" name="department" placeholder="Department" value="<?php echo $_GET["Department"];?>">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter section of the department">
						<input class="input100" type="text" name="section" placeholder="Section">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Budget Allocated">
						<input class="input100" type="text" name="Budget_Allocated" placeholder="Budget Allocated">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Budget Utilized">
						<input class="input100" type="text" name="Budget_Utilized" placeholder="Budget Utilized">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							Register
						</button>
					</div>

				</form>
				<?php
				}
				else if($Action=='Update')
				{
				$Section=$_GET['Section'];
				$sql="select * from budgets where Section='$Section'";
				$result = mysqli_query($conn,$sql);
				$rows = mysqli_fetch_array($result);
				$depart=$rows["Department"];
				$section=$rows["Section"];
				$Budget_Allocated=$rows["Budget_Allocated"];
				$Budget_Utilized=$rows["Budget_Utilized"];
				$Budget_Available=$rows["Budget_Available"];
				?>
				<form action="updateone.php?Section=<?php echo $section; ?>&&Action=Update" method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-40">
						Budget Allocation Form<br>
						Update Data Entry
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter the department involved">
						<input class="input100" type="text" name="department" placeholder="Department" value="<?php echo $depart; ?>">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter section of the department">
						<input class="input100" type="text" name="section" placeholder="Section" value="<?php echo $section; ?>">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Budget Allocated">
						<input class="input100" type="text" name="Budget_Allocated" placeholder="Budget Allocated" value="<?php echo $Budget_Allocated; ?>">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Budget Utilized">
						<input class="input100" type="text" name="Budget_Utilized" placeholder="Budget Utilized" value="<?php echo $Budget_Utilized; ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							Update
						</button>
					</div>

				</form>
				<?php
				}
				?>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>

</html>
