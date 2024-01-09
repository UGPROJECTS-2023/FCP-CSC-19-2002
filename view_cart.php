<!--- To connect to database --->
<?php
session_start();
include("config.php");
?>
<!--Content Begins --->
<html>
<head>
<title>View Cart</title>
<link href = "css/style.css" rel="stylesheet" type = "text/css">
<script type = "text/javascript" src = "js/jquery.min.js"></script>
<script>
$(function() {
	var body = $('body');
	var backgrounds = new Array('url(image/bg1.png)', 'url(image/bg2.png)', 'url(image/bg3.png)');
	
	var current = 0;
	
	function nextBackground() {
		body.css('background', backgrounds[current = ++current % backgrounds.length]);
	 
	setTimeout(nextBackground, 5000);
	}
	setTimeout(nextBackground, 5000);
	body.css('background', backgrounds[0]);
});
</script>
 <script>
						var picPaths = [ 'image/IMG_445.jpeg', 'image/IMG_4537497274304.jpeg', 'image/blackclock.png', 'image/classical watches.png', 'image/black leather.png', 'image/ar2.jpeg', 'image/22.jpg', 'image/416203_heroa.jpg'];	
						var curPic = -1;
						
						//Preload the images for smooth animation.
						var img0 = new Array();
						for(i=0; i< picPaths.length; i++)
						{
							img0[i] = new Image();
							img0[i].src = picPaths[i];
							
						}
						
						function swapImage()
						{
							curPic = (++curPic > picPaths.length -1)? 0 : curPic;
							imgCont.src = img0[curPic].src;
							setTimeout(swapImage, 6000);
						}
						window.onload = function()
						{
							imgCont = document.getElementById('imgholder');
							swapImage();
						}
					  </script>
</head>

<br><br>
<h1 align = "center"> Your Cart </h1>
<!-- The design of the first row of the table --->
<div class = "cart-view-table-back">
<body>
<form method="post" action="cart_update.php">
<table width="100%" cellpadding="6" cellspacing="0">
<thead>
<tr>
		<th>Room name</th>
		<th>Name</th>
		<th>Price per unit</th>
		<th>Total</th>
		<th>Remove </th>
</tr>
</thead>
<tbody>
<!---To fetch the content of the table from the database --->
<?php
if(isset($_SESSION["cart_products"])) //check session variable
{
	$total = 0; //set initial value
	$b = 0; //variable for zebra stripe colour table
	foreach($_SESSION["cart_products"] as $cart_item)
	{
		
			//set variables to use in content below
			$Room_name = $cart_item["Room_name"];
			$product_qty = $cart_item["product_qty"];
			$product_price = $cart_item["product_price"];
			$Room_No = $cart_item["Room_No"];
			$subtotal = ($product_price * $product_qty); // Calculate the total price
			
			$bg_color = ($b++%2==1) ? 'odd'  : 'even'; //class for zebra stripe colour
			echo '<tr class= "'.$bg_color.'">';
			echo '<td><input type ="text" size="2" maxlength="2" name="product_qty.['.$Room_No.']" value = "'.$product_qty.'" /></td>';
			echo '<td>'.$Room_name.'</td>';
			echo '<td>'.$currency.$product_price.'</td>';
			echo '<td>'.$currency.$subtotal.'</td>';
			echo '<td><input type="checkbox" name = "remove_code[]" value ="'.$Room_No.'" /> Remove </td>';
			echo '</tr>';
		
			$total = ($total + $subtotal); //add subtotal to total variable
			
	}
	
	$grand_total = $total; //grand total equals total 
	//foreach($taxes as $key => $value) //list and calculate all taxes in array
	{
		$tax_amount 	= round($total  ); //to get a rounded number for taxes
		//$tax_item[$key]	= $tax_amount;
		$grand_total	= $grand_total; // add taxes to the grand total
		
	}
	$list_tax		= '';
	//foreach($tax_item as $key => $value)
	{
		//$list_tax .= $key. ' : '.$currency.sprintf("%01.2f", $value).'<br />';
	}
	//$transportcost = ($transportcost)?'Transportation Cost : '.$currency.sprintf("%01.2f", $transportcost).'<br />':'';
	
}
?>	
<!--- Fetching and calculations ends --->

<!--- Position of amount payable, add more items begins ---> 
<tr>
		<td colspan="5">
		<span style ="float:right; text-align: right;">
		<?php echo $list_tax;?> Amount Payable : <?php echo "NGN".sprintf("%01.2f", $grand_total);?>
		</span>
		</td>
		</tr>
<tr>
		<td colspan="5">
		<a href ="room.php" class="button"> Add more rooms to the cart </a>
		<button type="submit">Update</button>
		<a href = "paypalpayment.php"><img src="paypal.png" width="179" height="36"></a>
		</td>
		</tr>
		
		</tbody>
		</table>
<input type ="hidden" name="return_url" value="<?php 
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
echo $current_url; ?>" />
</form>
</div>
<div class = "background">
</div>
</body>
</html>