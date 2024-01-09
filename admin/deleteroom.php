<?php
include('../db/dbConnection.php');

if($_GET['id'])
{
	$id = $_GET['id'];
	$sql = "DELETE FROM rooms WHERE id = '$id'";
	
	$result = mysqli_query($conn, $sql);
	
}

?>