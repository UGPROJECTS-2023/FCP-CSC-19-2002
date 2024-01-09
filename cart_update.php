<?php
//To connect to database
session_start();
include("config.php");

//add product to session or create new one
if(isset($_POST["type"]) && $_POST["type"]=='add' && $_POST["product_qty"] > 0)
{
	foreach($_POST as $key => $value)  //add all post variables to the new product array
	{
		$new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING);
	}
	// remove unnecessary variables
	unset($new_product['type']);
	unset($new_product['return_url']);
	
	//code to get product name and price from database.
	$statement = $mysqli->prepare("SELECT Room_name, price FROM rooms WHERE Room_No =? LIMIT 1");
	$statement->bind_param('s', $new_product['Room_No']);
	$statement->execute();
	$statement->bind_result($Room_name, $price);
	
	while($statement->fetch()){
		
		//code to fetch product name, price from database and add to new_product array
		$new_product["Room_name"] = $Room_name;
		$new_product["product_price"] = $price;
		
		if(isset($_SESSION["cart_products"])) {
			if(isset($_SESSION["cart_products"] [$new_product ['Room_No']])) //check item exist in products array
			{
				unset($_SESSION["cart_products"] [$new_product['Room_No']]); //unset old array item
				
			}
			
		}
			$_SESSION["cart_products"][$new_product ['Room_No']] = $new_product; //update or create product session with new item
	}
}
//update or remove items
if(isset($_POST["produty_qty"]) || isset($_POST["remove_code"]));
{
	//update item quantity in product session
	if(isset($_POST["product_qty"]) && is_array ($_POST["product_qty"]))
	{
		foreach($_POST["product_qty"] as $key => $value)
		{
			if(is_numeric($value))
			{
				$_SESSION["cart_products"][$key]["product_qty"] = $value;
				
			}
		}
	}
	//remove an item from product session
	if(isset($_POST["remove_code"]) && is_array($_POST["remove_code"])) {
		foreach($_POST["remove_code"] as $key) {
			unset($_SESSION["cart_products"][$key]);
			
		}
	}
}

//back to return urldecode
$return_url = (isset($_POST["return_url"])) ?urldecode($_POST["return_url"]):''; //return urldecode
header('Location:'.$return_url);
?>
