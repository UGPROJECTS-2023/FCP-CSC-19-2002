<?php require_once('Connections/prince.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO Signin (username, password) VALUES (%s, %s)",
                       GetSQLValueString($_POST['username'], "text"),
                       GetSQLValueString($_POST['password'], "text"));

  mysql_select_db($database_prince, $prince);
  $Result1 = mysql_query($insertSQL, $prince) or die(mysql_error());
}

mysql_select_db($database_prince, $prince);
$query_Recordset1 = "SELECT * FROM Signin";
$Recordset1 = mysql_query($query_Recordset1, $prince) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<?php
// *** Validate request to Signin to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['username'])) {
  $loginUsername=$_POST['username'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "room.php";
  $MM_redirectLoginFailed = "fail.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_prince, $prince);
  
  $LoginRS__query=sprintf("SELECT e, p FROM register WHERE e='%s' AND p='%s'",
    get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password)); 
   
  $LoginRS = mysql_query($LoginRS__query, $prince) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="validlogin.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prince Hotel-Logged in</title>
<style type="text/css">
.style1 {color: #FFFFFF}
body {
	background-image: url(images/B6.jpg);
	background-color: #ccc484;
}
.style15 {font-size: 18px}
.style20 {	font-size: 14px;
	color: #CCCCCC;
}
.style6 {	font-size: 12px;
	color: #FFFF99;
}
.style7 {	color: #FF0000;
	font-weight: bold;
	font-size: 36px;
}
.style18 {font-size: 36px;
	color: #FFFF99;
}
.style34 {color: #FFFF99;
	font-size: 36px;
}
</style>
</head>

<body>
<div align="center"><span class="style17"><img src="images/Logo copy_104029.jpg" width="950"/></span></div></br>
 <tr>
		<th height="54" colspan="2" scope="row"><center>
		<a href="index.php">	<img src="image1/home.png" alt="" width="130" height="50"/></a>
		<a href="aboutus.php"><img src="image1/Aboutus.png" alt="" width="130" height="50" onclick="aboutus.php" /></a>
		<a href="gallery.php"><img src="image1/gallery.png" alt="" width="130" height="50" onclick="login.php" /></a>
		<a href="feedback.php"><img src="image1/feedback.png" alt="" width="130" height="50" /></a>
		<a href="login2.php"><img src="image1/login.png" alt="" width="130" height="50" /></a>
		<a href="reserve.php"><img src="image1/Reserve.png" alt="" width="130" height="50" /></a>
		<a href="Login.php"><img src="image1/admin_login.png" alt="" width="130" height="50" />
		
		</a></center></th>
        </tr>&nbsp;&nbsp;
      <!--  <table width="603" height="200" border="0" align="center" background="img/.png" bgcolor="#fff"></br>
		</table>
        <!--<tr>
        <th height="262" colspan="5" bgcolor="#FF9900" scope="row">
	   <img src="images/.jpg" alt="" width="900" height="258" border="10" style="border:thick; border-color:#000000" /></th>
      </tr>-->
	<center><form action="" method="post" name="f" onsubmit="return validateLogin(this);">
	<tr border color="#CC6600" bgcolor="#fff">
	  <th height="57" colspan="3" scope="row"><p><span class="style30"><footer class="mainFooter" style="width:100%;height:200%;float:left;border-radius:5px;background-color:#991553; color:#; margin-top:2%;margin-bottom:2%;">
	   <h2>Dont have a Hotel account? </h2></span></footer><a href="registration.php" class="style33" >Register Now</a></p>
            <form method="POST" name="form2" action="<?php echo $loginFormAction; ?>">
              <table align="center">
                <tr valign="baseline">
                  <label> Email Address: </label>
                   <input type="text" name="username" Placeholder="Enter Email Address"><br><br>
				   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <label>Password:</label>
                 <input type="password" name="password" Placeholder="Enter Password"><br/><br/>
                <tr valign="baseline">
                  <td nowrap align="right">&nbsp;</td>
                  <td><input type="submit" value="Submit">
                    <label>
                    <input type="reset" name="Reset" value="Reset" />
                  </label></td>
                </tr>
              </table>
              <input type="hidden" name="MM_insert" value="form2">
             </form>
            <p>&nbsp;</p>
            <footer class="mainFooter" style="width:100%;float:left;border-radius:5px;background-color:#991553;color:#fff;margin-top:2%;margin-bottom:2%;">
           <center><p style="width:92%;margin:2% auto;color:;"><h2>Copyright &copy; 2023, All rights reserved. </h2></p></center>
          </footer> 
           </tr>
            </th>
			</form></center>
             </body>
              </html>	
               <?php
                mysql_free_result($Recordset1);
                ?>
