<?php
include('../db/dbConnection.php');
if(!isset($_FILES['image'] ['tmp_name']))
{
	echo "";
} else {
	$file = $_FILES['image']['tmp_name'];
	$image = addslashes(file_get_contents($_FILES['image'] ['tmp_name']));
	$image_name = addslashes($_FILES['image']['name']);
	$image_size = getimagesize($_FILES['image']['tmp_name']);
	
		if ($image_size == FALSE)
		{
			
			echo '<script> alert("This is not an image!") </script>';
			
		} else
		{
			move_uploaded_file($_FILES["image"]["tmp_name"], "../image/".$_FILES["image"]["name"]);
			
			$location = $_FILES["image"]["name"];
			$roomid = $_POST['roomid'];
			
			$sql = "UPDATE rooms SET room_image_name = '$location' WHERE id = '$roomid'"; 
			
			$result = mysqli_query($conn, $sql);
			
			if(!$result > 0)
					{
					echo mysqli_error();
						}
			else
			{
				header("location: rooms.php");
				exit();
				
			}
		}
}
?>