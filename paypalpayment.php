<html>
<head>
<title> Paying via Paypal </title>
<link rel="stylesheet" type = "text/css" href="css/style2.css">
<script type = "text/javascript" src = "js/validator2.js"> </script>	
</head>
<body>
	<div id = "main">
	<center><h1> PayPal Payments via Card </h1></center>
	
	<!--- Form content begins ---->
	<form name = "paypal" onsubmit = "return formvalidator()" method = "post" action = "receipt.php">
	
	<div id = "container">
	<h2> Pay with my card </h2>
	<hr/>
	<center><h3> Card Information </h3></center>
	<table style = "width:100%">
	<tr>
	<td id = "td-label"> Title: </td>
	<td>
		<select name = "title" id = "">
		<option value = "Mr" selected="selected"> Mr. </option>
		<option value = "Mrs"> Mrs. </option>
		<option value = "Ms."> Ms. </option>
		
		</td>
	</tr>
	<tr>
		<td id = "td-label"> First Name: </td>
		<td><input type = "text" name = "firstname" id = "firstname" placeholder="Enter first name" maxlength = "30"></td>
		</tr>
		<tr>
		<td id = "td-label"> Last Name: </td>
		<td><input type = "text" name = "secondname" id = "secondname" placeholder="Enter last name" maxlength = "30"></td>
		</tr>
		<tr>
			<td id = "td-label"> Card Type:</td>
			<td>
			<select name = "TypeofCreditCard">
			<option value = "Visa" selected="selected">Visa</option>
			<option value = "Master Card"> Master Card </option>
			<option value = "Verve"> Verve </option>
			</select>
			</td>
		</tr>
		<tr>
		<td id = "td-label"> Card Number: </td>
				<td><input type = "text" name="creditcardno" id="cardno" maxlength = "14" placeholder="Enter card number"></td>
				</tr>
		
		<tr>
				<td id = "td-label"> Expiry Date : </td>
			<td><div id = "date-div"> <select name = "expiryDateMonth">
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select></div>
				
				<div id = "year-div">
				
				<select name="expiryDateYear">
				<option value = "2017">2013</option>
				<option value = "2017">2014</option>
				<option value = "2017">2015</option>
				<option value = "2017">2016</option>
				<option value = "2017">2017</option>
				<option value = "2018">2018</option>
				<option value = "2019">2019</option>
				<option value = "2020">2020</option>
				<option value = "2021">2021</option>
				<option value = "2022">2022</option>
				<option value = "2023">2023</option>
				<option value = "2024">2024</option>
				<option value = "2025">2025</option>
				<option value = "2026">2026</option>
				<option value = "2027">2027</option>
				<option value = "2028">2028</option>
				<option value = "2029">2029</option>
				<option value = "2030">2030</option>
				</select></div></td>
				</tr>
				
					<tr>
							<td id = "td-label"> CVV: </td>
							<td><div id = "date-div"><input type = "password" name = "cvvnumber" id = "cvvnumber" placeholder="cvv" " maxlength = "3"></td>
							</tr>
		
				<tr>
				<td id = "td-label"> Amount (NGN): </td>
				<td> <input style = "background-color: #7dc855; color:#fffff;" type = "text" name="amount" id = "amountcharge" value ="<?php ob_start(); include "view_cart.php"; ob_end_clean(); echo $grand_total; ?>" disabled="true"></td>
				</tr>
				</table><br /><br />
				
					<h3><center> Booking Information </h3></center>
					<p><center><b> Address </b></center></p>
				<table style="width:100%">
					<tr>
					
					
					<center><textarea name = "address" id  = "address" cols = "40" rows = "5"></textarea></center>
					
					</tr>
				
				<tr>
				<td id = "td-label"> State: </td>
				<td>
				<div id = "date-div">
				<select id="state" name = "state">
				<option value = "ABUJA" selected = "Abuja"> Adamawa </option>
				<option value = "KANO"> Abuja </option>
				<option value = "ADAMAWA"> Anambra </option>
				<option value = "BENUE"> Benue </option>
				<option value = "BAYELSA"> Bayelsa </option>
				<option value = "BORNO"> Borno </option>
				<option value = "KANO"> Kano </option>
				<option value = "KADUNA"> Kaduna </option>
				<option value = "KWARA"> Kwara </option>
				<option value = "KATSINA"> Katsina </option>
				<option value = "JIGAWA"> Jigawa </option>
				<option value = "NASSARAWA"> Nassarawa </option>
				<option value = "YOBE"> Yobe </option>
				<option value = "LAGOS"> Lagos </option>
				<option value = "OYO"> Oyo </option>
				<option value = "ONDO"> Ondo </option>
				<option value = "OGUN"> Ogun </option>
				<option value = "EKITI"> Ekiti </option>
				<option value = "EDO"> Edo </option>
				
				</select>
				</div>
				</td></tr>
				
				<tr>
				<td id="td-label"> Phone Number: </td>
				<td> <input type = "text" name = "phone" id = "phone" placeholder = "Enter phone number" maxlength = "14"></td>
				</tr>
				
				<tr>
				<td id = "td-label"> Email: </td>
				<td> <input type = "text" name = "email" id = "email" placeholder = "Enter email address"></td>
				</tr>
						
				</table><br>
				<center><button type = "submit" id = "paynow" class="proceed-btn"><a href="#"> Proceed </a></button></center>
				
				</div>
				</div>
			</form>	
		<!--- Form contents ends --->	
			<img id = "paypal_logo" style = "float: right; margin: -30px 100px 0 0;" src = "image/secure-paypal-logo.jpg">
			</div>
			</body>
</html>