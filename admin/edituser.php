<?php
include('../db/dbConnection.php');
$id = $_GET['id'];
$sql = "SELECT * FROM register WHERE id = '$id'";

$result = mysqli_query($conn, $sql);
//while($row = mysqli_fetch_array($result))
{
	$e = $row['e'];
	$P = $row['P'];
	$cp = $row['cp'];
	
}
?>

<form action = "register.php" method = "post">
	<input type = "hidden" name = "roomid" value = "<?php echo $id=$_GET['id'] ?>">
	<b>Email: </b> <br><input type = "text" name = "e" value="<?php echo $e ?>" class = "ed"><br>
	<b> Password: </b> <br><input type = "text" name = "P" value = "<?php echo $P ?>" class = "ed"><br>
	<b> Confirm Password:  </b> <br><input type = "text" name = "cp" value = "<?php echo $cp ?>" class = "ed"><br>
	<input type = "submit" value = "Save" id = "button1">
	</form>