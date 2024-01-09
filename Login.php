<html>
<head>
<title> Admin Login </title>
</head>
<style>
#heading {
	text-align: center;
	font-weight: bold;
	font-size: 30px;
	padding: 4px;
	margin: 2px;
	
}
#loginmain{
	background:;
	color:#;
	}
</style>
<body class="body" style="background-color:#ccc484;background-image: url(images/B6.jpg);float-center;text-align:left;font-family:Georgia;line-height:1.5;font-size:16px;
width:95%;margin:0 auto;clear:both;">
 <center><img src="images/Logo copy_104029.jpg" width="975"  style="margin:1% 0;border-radius: 1px;"></center></br>
  <tr>
		<th height="54" colspan="2" scope="row"><center>
		<a href="index.php">	<img src="image1/home.png" alt="" width="130" height="50"/></a>
		<a href="aboutus.php"><img src="image1/Aboutus.png" alt="" width="130" height="50" onclick="aboutus.html" /></a>
		<a href="gallery.php"><img src="image1/gallery.png" alt="" width="130" height="50" onclick="login.php" /></a>
		<a href="feedback.php"><img src="image1/feedback.png" alt="" width="130" height="50" /></a>
		<a href="login2.php"><img src="image1/login.png" alt="" width="150" height="50" />
		<a href="reserve.php"><img src="image1/Reserve.png"  alt="" width="130" height="50" />
		<a href="Login.php"><img src="image1/admin_login.png" alt="" width="130" height="50" />
		
		</a></center></th></div>
        </tr>&nbsp;&nbsp;

<!--Header-->

<!--Menus-->

              
</header>

<table  align="center" bgcolor="#fff"  width="600" height="300" style="border-radius:5px;background-margin-left:3%;padding:2% 3%;
         margin-bottom:2%;margin-top:2%;">
<tr>
<td>
<center><img src="image/user.png"alt="Bird" width="150" height="100"style="padding-top:30px;"></center>
    <aside>
	<p style="text-decoration:none;background-color:#991553;color:#;padding:10px 10px;height:20px;
	border-radius:15px;">Admin Login</p>
	</aside><br/><hr/>

<!--Admin Login form -->
<form method = "post" action = "logging.php" name = "adminlogin" id = "adminlogin">
<label> Username: </label>
&nbsp;&nbsp;&nbsp;&nbsp
<input type="text" name="user_name" Placeholder="Enter Username"><br><br>

<label>Password</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
<input type="password" name="password" Placeholder="Enter Password"><br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
<input type="submit" id = "loginmain" name="loginmain"  value="Login">
&nbsp
<input type="reset" name="reset">
&nbsp;&nbsp;&nbsp;&nbsp
</form>
<!--Admin Login Form ends -->

</table>
</tr>
</td>
<aside>
<a href="index.php" style="text-decoration:none;background-color:#991553;color:#fff;padding:10px 10px;height:20px;
border-radius:15px;"><strong>Back To Home</strong></a><hr/>
</aside>

<footer class="mainFooter" style="width:100%;float:left;border-radius:5px;background-color:#991553;color:#fff;margin-top:2%;margin-bottom:2%;">
<center><p style="width:92%;margin:2% auto;color:;"><h2>Copyright &copy; 2019, All rights reserved. </h2></p></center>
</footer>

</body>
</html>