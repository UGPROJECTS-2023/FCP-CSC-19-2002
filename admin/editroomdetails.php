<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#7dc855;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:transparent;
padding:5px;
background-color:#7dc855;
color: white;
height: 34px;
width: 50%;
cursor: pointer;
}
-->
</style>

<?php
include('../db/dbConnection.php');

$id = $_GET['id'];
$sql = "SELECT * FROM rooms WHERE id = '$id'";

$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
{
	$Room_No = $row['Room_No'];
	$Room_name = $row['Room_name'];
	$price = $row['price'];
	
}
?>

<form action = "execeditroom.php" method = "post">
	<input type = "hidden" name = "roomid" value = "<?php echo $id=$_GET['id'] ?>">
	<b>Room No: </b> <br><input type = "text" name = "Room_No" value="<?php echo $Room_No ?>" class = "ed"><br>
	<b> Room Name: </b> <br><input type = "text" name = "Room_name" value = "<?php echo $Room_name ?>" class = "ed"><br>
	<b> Price:  </b> <br><input type = "text" name = "price" value = "<?php echo $price ?>" class = "ed"><br>
	<input type = "submit" value = "Save" id = "button1">
	</form>