<?php
$currency = 'NGN'; //Currency character

//Database connection
$db_username 	=	'root';
$db_password	=	'';
$db_name		=	'prince';
$db_host		=	'localhost';

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
if($mysqli->connect_error)
{
	die('Error: ('.$mysqli->connect_errno.') '.$mysqli->connect_errno);
	
}

//Pay Channel connection
$paypalmode 			= 'sandbox'; //sandbox or live
$paypalApiUsername		= 'account@gmail.com'; // PayPal API Username
$PayPalApiPassword 		= '979797979'; //Paypal API password
$PayPalApiSignature 	= 'AewouidSeoiewDradoZcgqH3hpacAokIiuNjAwoiedkew'; //Paypal API Signature
$PayPalCurrencyCode 	= 'NGN'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://project2/php-shopping-cart-master/paypal-express-checkout/'; //Point to paypal-express-checkout page
$PayPalCancelURL 		= 'http://project2/shopping-cart/paypal-express-checkout/cancel_url.html'; //Cancel URL if user clicks cancel

//Addition information and fees
$deliverycost 			=	0.00; //Delivery cost for the order
$transportcost			=	1500.00; //Transportation cost for the order
$transportdiscount		=	0.00; //Transportation discount for the order
$taxes					=	array (// Contain all relevant taxes
								'VAT' => 12,
								'Service Tax' => 5
								);


?>