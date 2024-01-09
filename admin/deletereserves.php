<?php
include('../db/dbConnection.php');
if($_GET['id'])
{
	$Id = $_GET['id'];
	$sql = "DELETE FROM reserves WHERE sn = '$id'";
	
	$results = mysqli_query($conn, $sql);