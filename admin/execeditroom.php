<?php
include('../db/dbConnection.php');
$roomid = $_POST['roomid'];
$Room_No = $_POST['Room_No'];
$Room_name = $_POST['Room_name'];
$price = $_POST['price'];

$sql = "UPDATE rooms SET Room_No = '$Room_No', Room_name = '$Room_name', price = '$price' WHERE id = '$roomid'";
if(mysqli_query($conn, $sql))
{
	header("location: rooms.php");
	
}
else
	{
		echo '<script> alert("Error updating.") </script>';
	}

?>