<script language = "javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Booking Report</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content">

<?php 
include('../db/dbConnection.php');
		$id = $_GET['id'];
		$sql = "SELECT * FROM booking WHERE Trans_id = '$id'";
		$result = mysqli_query($conn, $sql);
		
		while($row = mysqli_fetch_array($result))
		{
			echo 'Date:         '.$row['Date'].'<br>'.$row['TIME'].'<br><br>';
			echo 'Full Name:    '.$row['First_Name'].' '.$row['Second_Name'].'<br><br>';
			echo 'Address:      '.$row['Address'].'<br><br>';
			echo 'State:        '.$row['State'].'<br><br>';
			echo 'Phone Number: '.$row['Phone_Number'].'<br><br>';
			echo 'Email:        '.$row['Email'].'<br><br>';
			echo 'Transaction id: .'.$row['Trans_id'].'<br><br>';
			
		}

?>
<table cellpadding = "20" cellspacing = "0" id="resultTable" border="1">
	<tr>
		<td><b> Room Name  </b></td>
		<td><b> Room No </b></td>
		</tr>
		
<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM booking WHERE Trans_id = '$id'";
	
	$result = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_array($result))
	{
		echo '<tr class = "record">';
		echo '<td>'.$row['Room_name'].'</td>';
		echo '<td>'.$row['product_qty'].'</td>';
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
		echo '<td><b> Grand Total (Tax inclusive) </b></td>';
		echo '<td><b>'.$row["Grand_total"].'</b></td>';
		echo '</tr>';
	}
	
?>
</table>
</div>