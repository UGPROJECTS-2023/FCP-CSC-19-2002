<?php
include('../db/dbConnection.php');
if($_GET['id'])
{
	$id = $_GET['id'];
	$sql = "DELETE FROM booking WHERE Book_id = '$id'";
	$result = mysqli_query($conn, $sql);
	
	
}

?>