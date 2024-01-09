<?php
include('../db/dbConnection.php');
$roomid = $_POST['roomid'];
$status = $_POST['status'];

$sql = "UPDATE booking SET status = '$status' WHERE Book_id = '$roomid' ";

$result = mysqli_query($conn, $sql);
header("location: index.php"); 

?>