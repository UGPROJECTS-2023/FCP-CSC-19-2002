<?php
include('../db/dbConnection.php');
if($_GET['id'])
{
	$id = $_GET['id'];
	$sql = "DELETE FROM register WHERE sn = '$id'";
	
	$results = mysqli_query($conn, $sql);
}

?>