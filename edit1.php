<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$id = $_GET['id'];
$sqlx = "SELECT * FROM `teacherdetails` WHERE `teacherid` = '$id' ;";
require("./includes/connect.php");
$result = $conn->query($sqlx);

if ($result->num_rows == 1) {
$row = $result->fetch_assoc();

} else {

}



$sqly = "SELECT * FROM `teacherexpertise` WHERE `teacherid` = '$id' ;";
$resulty = $conn->query($sqly);

if ($resulty->num_rows == 1) {
$rowx = $resulty->fetch_assoc();
if($rowx['eleventh'] ==1) {$c0 = "checked";} else {$c0 = "";}
if($rowx['twelveth'] ==1) {$c1 = "checked";} else {$c1 = "";}
if($rowx['phy'] ==1) {$c2 = "checked";} else {$c2 = "";}
if($rowx['chem'] ==1) {$c3 = "checked";} else {$c3 = "";}
if($rowx['maths'] ==1) {$c4 = "checked";} else {$c4 = "";}
if($rowx['entrance'] ==1) {$c5 = "checked";} else {$c5 = "";}



}



 else {

}




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>EDIT PERSONAL DETAILS</title>
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

<?php include "./menu.php"; ?>
	<div class="container-contact100">
		<div class="wrap-contact100">
      <?php $url = "./includes/editteacher1.php?id=".$id; ?>
			<form class="contact100-form validate-form" method="post" action="<?php echo $url; ?>">
				<span class="contact100-form-title">
					Teacher Details - I
				</span>
				<h4 style="text-align:center; margin-left:35%"><b>General Information</b></h4><br><br>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">NAME *</span>
					<input class="input100" type="text" name="name" value="<?php echo $row['name'];?>" placeholder="Enter Your Name">
				</div>


				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Surname *</span>
					<input class="input100" type="text" name="surname" placeholder="Enter Your Name" value="<?php echo $row['surname'];?>">
				</div>



				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="email" name="email" placeholder="Enter Your Email " value="<?php echo $row['email'];?>">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Phone</span>
					<input class="input100" type="tel" name="phone" placeholder="Enter Number Phone" value="<?php echo $row['phone'];?>">
				</div>





				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Address</span>
					<input class="input100" name="address" placeholder="Your address..." value="<?php echo $row['address'];?>"></input>
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100" style="width:30%">
					<span class="label-input100">Birth date</span>
					<input class="input100" type="date" name="dob" value="<?php echo $row['dateofbirth'];?>">
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100" style="width:30%; margin-left:-30%">
					<span class="label-input100">Experience</span>
					<input class="input100" type="text" name="exp" placeholder="Experience" value="<?php echo $row['experience'];?>">
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100" style="width:30%; margin-left:-30%">
					<span class="label-input100">Date 1st lec</span>
					<input class="input100" type="date" name="lecdate" placeholder="First lec" value="<?php echo $row['firstlecdate'];?>">
				</div>
				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Allotment *</span>
					<div>
						<select class="js-select2" name="allotment">
							<option>XI PCM</option>
							<option>XI PCB</option>
							<option>XII PCM</option>
							<option>XII PCB</option>
							<option>CET</option>
							<option>NEET</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>
				<h5>Expertise :</h5>
				<input type="checkbox" id="eleventh" value="eleventh" name="s0"<?php echo $c0;?>><label for="eleventh">XI</label>
				<input type="checkbox" id="twelveth" value="twelveth" name="s1" <?php echo $c1;?>><label for="twelveth">XII</label>
				<input type="checkbox" id="phy" value="phy" name="s2"<?php echo $c2;?>><label for="phy">Phy</label>
				<input type="checkbox" id="chem" value="chem" name="s3" <?php echo $c3;?>><label for="chem">Chem</label>
				<input type="checkbox" id="maths" value="maths" name="s4" <?php echo $c4;?>><label for="maths">Maths</label>
				<input type="checkbox" id="ent" value="ent" name="s5" <?php echo $c5;?>><label for="ent">Entrance</label>
				<div class="container-contact100-form-btn">
					<button type="submit" name="submit" class="contact100-form-btn">
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
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
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
