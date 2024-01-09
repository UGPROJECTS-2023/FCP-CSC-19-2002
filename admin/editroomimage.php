<?php
include('../db/dbConnection.php');
$id = $_GET['id'];

$sql = "SELECT * FROM rooms WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
	$image = $row['Room_image_name'];
}
?>

<img src = "../image/<?php echo $image ?>">
<form action = "execeditpic.php" method = "post" enctype = "multipart/form-data">
<br>
	<input type = "hidden" name = "roomid" value =  "<?php echo $id = $_GET['id']; ?>">
	Select Room Image
	<br>
	<input type = "file" name = "image"><br>
	<input type = "submit" value = "Upload">
	</form>
	