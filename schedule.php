<html>
<head>
<title>schedule</title>
<style>
input{
	width:20%;
	height:7%;
}
label{
	font-size:1.5rem;

}
select{
	width:20%;
	height:7%;
}
</style>
</head>
<body style="background-color:rgb(230,230,230)">
<?php include "menu.php"; ?>

	<div style="background-color:white; border:1px solid black; margin-left:10%; width:80%; margin-top:5%; box-shadow:0 0 10px gray">
		<div style="background-color:black; height:15%; color:white; margin-top:-3.5%; text-align:center; font-size:2rem; box-shadow:0px 10px 7px rgb(200,200,200)"><h3><b>Schedule details</b></h3></div>
		<table border="1" cellspacing="0" cellpadding="6" style="margin-left:1.3%; margin-top:5%; box-shadow:0 0 5px green">
		<tr style="text-align:center">
		<th ></th>
		<th colspan="3">Monday</th>
		<th colspan="3">Tuesday</th>
		<th colspan="3">Wednesday</th>
		<th colspan="3">Thursday</th>
		<th colspan="3">Friday</th>
		<th colspan="3">Saturday</th>
		<th colspan="3">Sunday</th>
		</tr>
		<tr style="text-align:center">
		<td></td>
		<td>Name</td>
		<td>From</td>
		<td>To</td>

		<td>Name</td>
		<td>From</td>
		<td>To</td>

		<td>Name</td>
		<td>From</td>
		<td>To</td>

		<td>Name</td>
		<td>From</td>
		<td>To</td>

		<td>Name</td>
		<td>From</td>
		<td>To</td>

		<td>Name</td>
		<td>From</td>
		<td>To</td>

		<td>Name</td>
		<td>From</td>
		<td>To</td>
		</tr>
		<tr style="text-align:center">
		<td>Morning</td>
		<td>RB</td>
		<td>12</td>
		<td>1</td>

		<td>RR</td>
		<td>12</td>
		<td>1</td>

		<td>PM</td>
		<td>12</td>
		<td>1</td>

		<td>SS</td>
		<td>12</td>
		<td>1</td>

		<td> - </td>
		<td> - </td>
		<td> - </td>

		<td>ZZ</td>
		<td>12</td>
		<td>1</td>

		<td> - </td>
		<td> - </td>
		<td> - </td>
		</tr>
		<tr style="text-align:center">
		<td>Evening</td>
		<td>RB</td>
		<td>12</td>
		<td>1</td>

		<td>RR</td>
		<td>12</td>
		<td>1</td>

		<td>PM</td>
		<td>12</td>
		<td>1</td>

		<td>SS</td>
		<td>12</td>
		<td>1</td>

		<td> - </td>
		<td> - </td>
		<td> - </td>

		<td>ZZ</td>
		<td>12</td>
		<td>1</td>

		<td> - </td>
		<td> - </td>
		<td> - </td>
		</tr>
		</table>
		<p style="text-align:center">------------------------------------------------------------------------------------------------------------------------------------------------</p>
		<form method="post" action="">
		<br><label for="teacher" style="margin-left:5%">Select teacher </label>
		<select name="teacher" id="teacher">
			<option>1</option>
			<option>2</option>
		</select>

		<label for="day" style="margin-left:15%">Select day </label>
		<select name="teacher" id="day">
			<option>Monday</option>
			<option>Tuesday</option>
			<option>Wednesday</option>
			<option>Thursday</option>
			<option>Friday</option>
			<option>Saturday</option>
			<option>Sunday</option>
		</select>

		<br><br><label style="margin-left:5%">Enter : </label>
		<label style="margin-left:5%">Start : </label><input type="time" id="starttime" name="time"/>
		<label style="margin-left:5%">End : </label><input type="time" id="endtime" name="time"/>

		<br><br><input type="button" value="Check" style="width:40%; background-color:orange; border-radius:5px; margin-left:30%; font-size:1.2rem; height:10%"/>
		<br><br><input type="button" value="Enter" style="width:40%; background-color:blue; border-radius:5px; color:white; margin-left:30%; font-size:1.2rem; height:10%"/><br><br><br>
		</form>
	</div>
</body>
</html>
