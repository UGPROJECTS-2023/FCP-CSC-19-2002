<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script src="js/.php" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
Booking Date: <?php
include('../db/dbConnection.php');
$id = $_GET['id'];
$sql = "SELECT * FROM booking WHERE Trans_id = '$id'";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
	echo $row['Date'];
}
?>
<table cellpadding="1" cellspacing="1" id="resultTable">
	<thead>
		<tr>
			<th  style="border-left: 1px solid #C1DAD7"> Room Name </th>
			<th> Room Number </th>
			<th> Address  </th>
			<th> Telephone </th>
			</tr>
			<html>
</script>
	</thead>
	<tbody>
	<?php
				
				
	$id = $_GET['id'];
	$sql = "SELECT * FROM booking WHERE Trans_id = '$id'";
	$result = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_array($result))
	{
		echo '<tr class = "record">';
		echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['Room_name'].'</td>';
		echo '<td>'.$row['product_qty'].'</td>';
		echo '<td>'.$row['Address'].'</td>';	
		echo '<td>'.$row['Phone_Number'].'</td>';
		echo '</tr>';
	}
?>

<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM booking WHERE Trans_id = '$id'";
	$result = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_array($result))
	{
		echo '<tr class = "record">';
		echo '<td style = "border-left: 1px solid #C1DAD7;"><b> Total Payable </b></td>';
		echo '<td><b>'.$row['Grand_total'].'</b></td>';
		echo '</tr>';
		
	}
?>

	</tbody>
	</table>
