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
	opacity:1;
}
</style>
<body>
<?php include './menu.php'; ?>
<div class="container">
  <form method="post" action="./includes/changepw.php">
    <input type="text" name="login" placeholder="Admin"><br>
    <input type="text" name="p1" placeholder="Previous Password"><br>
    <input type="text" name="p2" placeholder="New Password"><br>

    <input type="submit" name="submit" value="Change">
  </form>

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
