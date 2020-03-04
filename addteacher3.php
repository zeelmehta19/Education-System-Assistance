<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>addteacher3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<style>
input[type=checkbox]{
	opacity:1;
}
</style>



<body>

	<?php include "menu.php"; ?>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="./includes/teacherdetails3.php">
				<span class="contact100-form-title">
					Teacher Details - III
				</span>
				<h4 style="text-align:center; margin-left:35%; margin-right:30%; margin-bottom:2%"><b>Account Information</b></h4>
				<div class="wrap-input100 bg1 rs1-wrap-input100" style="width:30%;">
					<span class="label-input100">Hourly rate : Rs.</span>
					<input class="input100" type="text" name="rate" placeholder="Amount">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100" style="width:30%;">
					<span class="label-input100">Occupancy</span><br><br>
					<input type="checkbox" name="occ" value="job">Job&nbsp&nbsp&nbsp
					<input type="checkbox" name="occ" value="class">Other classes
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100" style="width:30%;">
					<span class="label-input100">Specify details : </span>
					<input class="input100" type="text" name="details" placeholder="Eg: Classes name">
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100" style="width:30%;">
					<span class="label-input100">Account no. :</span>
					<input class="input100" type="text" name="accno" placeholder="Amount">
				</div><br>
				<div class="wrap-input100 bg1 rs1-wrap-input100" style="width:30%;">
					<span class="label-input100">IFSC code :</span>
					<input class="input100" type="text" name="ifsc" placeholder="Amount">
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100" style="width:30%;">
					<span class="label-input100">Name of bank : </span>
					<input class="input100" type="text" name="bankname" placeholder="Amount">
				</div>
				<div class="container-contact100-form-btn">
					<button name="submit" type="submit" class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>

			</form>
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
