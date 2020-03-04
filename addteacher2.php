
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>addteacher2</title>
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
	opacity:0;
}
</style>
<body>

<?php include "./menu.php"; ?>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="./includes/teacherdetails2.php">
				<span class="contact100-form-title">
					Teacher Details - II
				</span>
				<h4 style="text-align:center; margin-left:33%; margin-right:40%; margin-bottom:2%"><b>Demo Information</b></h4>
				<div class="wrap-input100 bg1 rs1-wrap-input100" style="margin-left:0%; width:30%">
					<span class="label-input100">Demo date</span>
					<input class="input100" type="date" name="demodate">
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100" style="width:30%;">
					<span class="label-input100">Topic</span>
					<input class="input100" type="text" name="demotopic" placeholder="Topic">
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100" style="width:30%; ">
					<span class="label-input100">Subject</span>
					<input class="input100" type="text" name="demosub" placeholder="Subject">
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100" style="width:30%; ">
					<span class="label-input100">Attended by :</span>
					<input class="input100" type="text" name="att1" placeholder="Attendee 1">
					<input class="input100" type="text" name="att2" placeholder="Attendee 2">
					<input class="input100" type="text" name="att3" placeholder="Attendee 3">
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Feedback</span>
					<textarea class="input100" name="feedback" placeholder="Enter feedback..."></textarea>
				</div>
				<div class="container-contact100-form-btn">
					<button name="submit" type="submit" class="contact100-form-btn">
						<span>
							Next
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
