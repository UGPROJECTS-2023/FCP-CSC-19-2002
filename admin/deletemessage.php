<?php
include('../db/dbConnection.php');
if($_GET['id'])
{
	$id = $_GET['id'];
	$sql = "DELETE FROM feedback WHERE SN = '$id'";
	
	$results = mysqli_query($conn, $sql);
}

?>