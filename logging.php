<?php
//Session starts
session_start();

//To connect to database
require "db/dbConnection.php";

//PHP function to validates users information from the form
function validate($str)
{
	$str = @trim($str);
	if(get_magic_quotes_gpc())
	{
		$str = stripslashes($str);
	}
	return mysql_real_escape_string($str);
}

//To ensure all inputs are correct
$username = validate($_POST['user_name']);
$password = validate ($_POST['password']);

//Create SQL query
$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password' ";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
	{
		$_SESSION['username'] = $username;
		header("location: admin/index.php");
		exit();
		
		//echo "<script>window.location='index.php'<\script>";
	}
else
	{
			echo "<script> alert('Please Enter Your username and password. To verify and try again :- ')
			window.location = 'Login.php' </script>";
			
			//echo '<div align="center"><strong><font color="#FF0000">User Name & Password not match !!</font></strong></div>';
		}
?>
