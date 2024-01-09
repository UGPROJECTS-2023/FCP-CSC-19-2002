<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>online shopping</title>
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

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$tel = $_POST['telno'];
$message = $_POST['message'];

//To post into feedback table
$sql = "INSERT INTO feedback (SN, NAME, SUBJECT, MESSAGE, TELEPHONE, EMAIL) VALUES ('', '$name', '$subject', '$message', '$tel', '$email')";

if(mysqli_query($conn, $sql))
	{
		
		echo '<table align = "center" bgcolor = "#fff" width = "400" height = "300" style = "box-shadow: 10px 10px 5px #888888; padding: 2% 3%;">';
		echo '<td>';
		echo '<hr />';
		echo "<h4><center> Feedback Notification </h4></center>";
		echo '<hr />';
		
		echo '<p style = "text-align: justify;">Thank you.   <b>'.$name.'</b>.<br><br> Your message has been received. <br />';
		echo '<p style = "text-align: justify;"> We will get in touch with you and ensure our Customer Care unit work round the clock to resolve your complaint. </center><br/>';
		echo '<p style = "text-align: justify;"> Please accept our warm assurances. <br/> <br />';
		echo "<center><em> Fud Guest House.com </center></em>";
	}
	else
	{
		echo "Error adding feedback".mysqli_error($conn);
	}
	echo '</td>';
?>
<aside>
<a href="index.php" style="text-decoration:none;background-color:#991553;color:#fff;padding:10px 10px;height:20px;
border-radius:15px;"><strong>Back To Home Page</strong></a></hr>
</aside>
</body>
</html>