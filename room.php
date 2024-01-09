<!-- Tiny PHP code to include database for product information --->
<?php
session_start();
include("config.php");

//To obtain the current URL of the page which makes cart update page redirects back to this URL
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<!--Tiny PHP code ends --->

<html>
<head> 
<title>Our Rooms </title>
<link href = "css/style.css" rel="stylesheet" type = "text/css">
</head>

<body class="body" background="images/B6.jpg" style="background-color:#;text-align:left;font-family:Georgia;line-height:1.5;font-size:16px;
width:95%;margin:0 auto;clear:both;">


<!--Header-->
<style>
#heading {
	text-align: center;
	font-weight: bold;
	font-size: 30px;
	padding: 4px;
	margin: 2px;
}
</style>
<header id="mainheader" style="">

         <div align="center"><span class="style3"><span class="style17"><img src="images/Logo copy_104029.jpg" width="950"/></span></div></br>
             <p id = "heading"> 
		   


<!--Menus-->
              
</header>
                
                <aside>
				<a href="index.php" style="text-decoration:none;background-color:#991553;color:#fff;padding:10px 10px;height:20px;
				border-radius:15px;"><strong>Sign Out</strong></a>
				</aside>

<!---Content Begins --->
<p><center><font face = "Trebuchet MS" color = "#fff" size = "6"><b> Rooms </p></center></font></b>


<!-- View Cart Frame Code Begins --->
<?php
if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"]) > 0)
{
	echo '<div class = "cart-view-table-front" id = "view-cart">';
	echo '<h3> Your Shopping Cart </h3>';
	echo '<form method="post" action="cart_update.php">';
	echo '<table width="100%" cellpadding="6" cellspacing="0">';
	echo '<tbody>';
	
	$total = 0;
	$b = 0;
	
	foreach ($_SESSION["cart_products"] as $cart_item)
	{
		
			$Room_name = $cart_item["Room_name"];
			$product_qty = $cart_item["product_qty"];
			$product_price = $cart_item["product_price"];
			$Room_No = $cart_item["Room_No"];
			$bg_color = ($b++%2==1) ? 'odd'  : 'even'; //zebra stripe
			echo '<tr class= "'.$bg_color.'">';
			echo '<td> Quantity <input type="text" size="2" maxlength="2" name ="product_qty['.$Room_No.']" value ="'.$product_qty.'" /></td>';
			echo '<td>'.$Room_name.'</td>';
			echo '<td><input type="checkbox" name = "remove_code[]" value ="'.$Room_No.'" /> Remove </td>';
			echo '</tr>';
			$subtotal = ($product_price * $product_qty);
			$total = ($total + $subtotal);
			
	}
	
	echo '<td colspan="4">';
	echo '<button type ="submit">Update </button><a href="view_cart.php" class = "button">Checkout</a>';
	echo '</td>';
	echo '</tbody>';
	echo '</table>';
	
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo '<input type="hidden" name="return_url" value ="'.$current_url.'" />';
	echo '</form>';
	echo '</div>';
	
}
?>
<!-- View Cart Frame Code Ends --->

<!-- Products List Code Begins --->
<?php
$results = $mysqli->query("SELECT Room_No, Room_name, Room_image_name, price FROM rooms ORDER BY id ASC");

if($results)
{
	$products_item = '<ul class="products">';
	
	//fetch results set as object and output HTML
	
	while($obj = $results -> fetch_object())
	{
		$products_item .= <<<EOT
		<li class = "product">
		<form method = "post" action = "cart_update.php">
		<div class="product-content"><h3>{$obj->Room_name}</h3>
		<div class="product-thumb"><img src = "image/{$obj->Room_image_name}" width = "200" height = "150"></div>
		<div class="product-info">
		Price: {$currency} {$obj->price}
		
		<fieldset>
		
		<label>
			<span>Choose No Of Room</span>
			<input type="text" size="2" maxlength="2" name="product_qty" value="1" />
			</label>
			
		</fieldset>
		<input type = "hidden" name="Room_No" value="{$obj->Room_No}" />
		<input type = "hidden" name="type" value = "add" />
		<input type = "hidden" name="return_url" value="{$current_url}" />
		<div align="center"><button type="submit" class="add_to_cart">Pay To Book </button></div>
		</div></div>
		</form>
		</li>
EOT;
	}
$products_item .='</ul>';
echo $products_item;	
}
?>
<!--- Products List Code Ends --->		
<!---Content Ends --->

<!--Footer Begins --->
<footer>
<center><p> <font face = "cursive, serif" color = "#ffffff" size = "4"> <b>Contact us on any of the channels below </p></font></center></b>
<p><center><a href = "www.facebook.com" target = "_blank"><img src = "image1/facebook.png" alt = "Contact us on Facebook" border = "0"></a> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href = "www.twitter.com" target = "_blank"><img src = "image1/twitter.png" alt = "Contact us on Twitter" border = "0"></a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href = "www.instagram.com" target = "_blank"><img src = "image1/instagram.png" alt = "Contact us on Instagram" border = "0"></a></center>
</footer>
<!--Footer Ends --->
		
</body>				
</html>