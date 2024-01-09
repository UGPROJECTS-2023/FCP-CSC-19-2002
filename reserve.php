<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reserve</title>
<script type = "text/javascript" src = "js/validations.js"> </script>
</head>
<style>
span.red {
	color:red;
	
}
#heading {
	text-align: center;
	font-weight: bold;
	font-size: 30px;
	padding: 4px;
	margin: 2px;
}
</style>
<body class="body" style="background-image:url(images/B6.jpg);text-align:left;font-family:Georgia;line-height:1.5;font-size:16px;
width:95%;margin:0 auto;clear:both;"> 

<!--Header-->
<header id="mainheader" style="">

           <center><img src="images/Logo copy_104029.jpg" width="975"  style="margin:1% 0;border-radius: 1px;"></center></br>
		   <tr>
		<th height="54" colspan="2" scope="row"><center>
	    <a href="index.php"><img src="image1/home.png" alt="" width="130" height="50"/></a>
		<a href="aboutus.php"><img src="image1/Aboutus.png" alt="" width="130" height="50" onclick="aboutus.html" /></a>
		<a href="gallery.php"><img src="image1/gallery.png" alt="" width="130" height="50" onclick="login.php" /></a>
		<a href="feedback.php"><img src="image1/feedback.png" alt="" width="130" height="50" /></a>
		<a href="login2.php"><img src="image1/login.png" alt="" width="130" height="50" />
		<a href="reserve.php"><img src="image1/Reserve.png"  alt="" width="130" height="50" />
		<a href="Login.php"><img src="image1/admin_login.png" alt="" width="130" height="50" />
		
		</a></center></th></div>
        </tr>&nbsp;&nbsp;
           
		   
<!--Menus-->
              
</header>

<!--Feedback Form Start-->
<form name = "reserves" onsubmit = "return validateFormOnSubmit(this)" action = "sendemail.php" method = "post">
<table align = "center" bgcolor = "#fff" width = "700" height = "300" style = "	box-shadow: 10px 10px 5px #888888; padding:2% 3%; margin-bottom:2%;margin-top:2%;">
	<tr>
	<td>
	<footer class="mainFooter" style="width:100%;float:left;border-radius:5px;background-color:#991553;color=#fff margin-top:2%;margin-bottom:2%;">
<center><h2> Reservation Form </h2></center>
	</footer>		
			<p><span class = "red"> <b> * </span>  fields with * are Required</p> </b>
            <span class = "red"> * </span> <label>Room No: </label>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="No" id="No" size="20"/>
			
			&nbsp;&nbsp;
			
			<span class = "red"> * </span> <label> Room Name: </label>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="name" id="name" size="20"/><br><br>
                <span class = "red"> * </span><label>Email:</label>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
               <input type="text" name="email" id="email" size="20">
			   &nbsp;&nbsp; 
			   <label> Phone: </label>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			<input type="text" name="telno" id="telno" size="20" /><br><br>
			<label> Address: </label>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
			<input type="text" name="address" id="address" size="20" /><br><br> 
            
		    <input type="submit" name="submit" id="submit" value="Reserve"/></br>
        </form></br>
		
<!--Feedback Form End-->

<!--Footer-->
<footer class="mainFooter" style="width:100%;float:left;border-radius:5px;background-color:#991553;color:#fff;margin-top:2%;margin-bottom:2%;">
<center><p style="width:92%;margin:2% auto;color:;"><h2>Copyright &copy; 2019, All rights reserved. </h2></p></center>
</footer>

</body>
</html>
