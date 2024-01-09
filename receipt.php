<?php
session_start();

$server = 'localhost';
$username = 'root';
$password =  '';
$dbname = 'prince';

$conn = mysqli_connect($server, $username, $password);
if(mysqli_select_db($conn, $dbname))
{
	echo "";
	
}
else
{
	echo "error connecting to database".mysqli_connect_error($conn);
	
}

?>
<html>
<head>
<title> Receipt </title>
<link rel = "stylesheet" type = "text/css" href = "css/style3.css">
</head>
<script>
function printpage()
{
	window.print();
	setTimeout("location.href='indeex.php'", 5000);
}
</script><br>
<aside>
<a href="index.php" style="text-decoration:none;background-color:#7dc855;color:#fff;padding:10px 10px;height:20px;
border-radius:15px;"><strong>Back To Home</strong></a>
</aside>
<body>
<form class = "transaction">
<div class = "form-header">
<h2 class = "title"> Payment Successful </h2>

	<!---Contents begins --->
<div class = "contentsinfo">
<?php
				
$title = $_POST['title'];
$fname = $_POST['firstname'];
$sname = $_POST['secondname'];
$address = $_POST['address'];
$state = $_POST['state'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$status = 'Pending';
$date = Date('d:m:y');
$time = Date('h:i:y');


echo '<br/><p style = "text-align: justify"> Thank you '."<b>".$title." ".$fname." ".$sname."</b>"." your transaction was successful and your order has been placed.";
echo '<br /><p style = "text-align: justify"> The products will be delivered to the address below: <br><center><b>'.$address.'</b><center></p>';

				ob_start(); 
				include "view_cart.php";
				ob_end_clean();
		
				$ukey = strtoupper(substr(sha1(microtime()), rand(0, 5), 25));
				$ukey2 = implode("-",str_split($ukey, 5));
						
					
				$result = "INSERT INTO booking (First_Name, Second_Name, Address, State, Phone_Number, Email, Room_No, Room_name, Product_qty, Grand_total, Trans_id, Date, TIME, status) VALUES('$fname', '$sname', '$address', '$state', '$phone', '$email', '$Room_No', '$Room_name', '$product_qty', '$grand_total', '$ukey2', '$date', '$time', '$status')";
				 
				
				if(mysqli_query($conn, $result))
				{
					echo "";
					}
					else
					{
						echo "error".mysqli_error($conn);
						
				}
				$sql = "SELECT Trans_id FROM booking WHERE Trans_id = '$ukey2'";
				
				$result = mysqli_query($conn, $sql);
				
				if(mysqli_num_rows($result) > 0)
				{
				while($rows = mysqli_fetch_assoc($result))
				{
					echo '<br /><p style = "text-align: center"> Your transaction id: </p>';
					echo '<center><b>'.$rows["Trans_id"].'</b></center>';
					
				}
									}
		echo '<br/><p><center> We appreciate your patronage. </p></center>';
			
		echo '<br /><center><input type = "button" id = "printout" name = "print" value = "Print" style = "background-color: #7dc855; color: #fff; height: 80%; width: 30%; border-color: transparent; border-radius: 3px; font-family: Georgia; font-size: 14px"; onclick = printpage()></center>';
		
		unset ($_SESSION['cart_products']);
		?>
</div>

</body>
</html>