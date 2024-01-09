<?php
include('../db/dbConnection.php');
if(!isset($_FILES['image'] ['tmp_name']))
{
	echo "";
} else
{
	$file = $_FILES['image']['tmp_name'];
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name = addslashes($_FILES['image']['name']);
	$image_size = getimagesize($_FILES['image']['tmp_name']);
	
	if($image_size = FALSE)
	{
		echo '<script> Please a valid image </script>';
	} else
	{
		move_uploaded_file($_FILES["image"]["tmp_name"], "../image/".$_FILES["image"]["name"]);
		$Room_image_name = $_FILES["image"]["name"];
		$Room_No = $_POST['code'];
		$Room_name = $_POST['name'];
		$price = $_POST['price'];
		
		$sql = "INSERT INTO rooms (Room_No,Room_name, Room_image_name, price) VALUES('$Room_No', '$Room_name', '$Room_image_name', '$price')";
		
		$result = mysqli_query($conn, $sql);
		header("location: rooms.php");
		exit();
		
	}
}

?>