<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>online Fud Guest House</title>
</head>
<style>
#heading {
	text-align: center;
	font-weight: bold;
	font-size: 30px;
	padding: 4px;
	margin: 2px;
}
</style>
<body class="body" style="background-color:#ccc484;text-align:left;font-family:Georgia;line-height:1.5;font-size:16px;
width:95%;margin:0 auto;clear:both;">

<!--Header-->
<header id="mainheader" style="">

           
           <center><img src="images/Logo copy_104029.jpg" width="975"  style="margin:1% 0;border-radius: 1px;"></center></br>
		   
		
</header>

<?php
//To connect to database
include("db/dbConnection.php");

//To collect contents of feedback form
$No = $_POST['No'];
$name = $_POST['name'];
$email = $_POST['email'];
$telno = $_POST['telno'];
$address = $_POST['address'];



//To post into feedback table
$sql = "INSERT INTO reserves (sn, No, name, email, telno, address) VALUES ('', 'sn','$name', '$email', '$telno' , '$address')";

if(mysqli_query($conn, $sql))
	{
		
		echo '<table align = "center" bgcolor = "#fff" width = "400" height = "300" style = "box-shadow: 10px 10px 5px #888888; padding: 2% 3%;">';
		echo '<td>';
		echo '<hr />';
		echo "<h4><center> Reserve Notification </h4></center>";
		echo '<hr />';
		
		echo '<p style = "text-align: justify;"><center>You Reserve.   <b>'.$name.'</b>.<br> <center>Thank you.</center><br> Your reservation Successful. <br />';
		echo '<p style = "text-align: justify;"> <center>We will get in touch with you.</center>';
		echo '<p style = "text-align: justify;"> <center>Please accept our warm assurances. </center><br/> <br />';
		echo "<center><em> RoyalPalaceHotel.com </center></em></center>";
	}
	else
	{
		echo "Error adding reserve".mysqli_error($conn);
	}
	echo '</td>';
?>
<aside>
<a href="index.php" style="text-decoration:none;background-color:#991553;color:#fff;padding:10px 10px;height:20px;
border-radius:15px;"><strong>Back To Home</strong></a></hr>
</aside>
</body>
</html>