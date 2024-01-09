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
  $insertSQL = sprintf("INSERT INTO register (fn, ln, g, pn, e, p, cp, c, s) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['fn'], "text"),
                       GetSQLValueString($_POST['ln'], "text"),
                       GetSQLValueString($_POST['g'], "text"),
                       GetSQLValueString($_POST['pn'], "text"),
                       GetSQLValueString($_POST['e'], "text"),
                       GetSQLValueString($_POST['p'], "text"),
                       GetSQLValueString($_POST['cp'], "text"),
                       GetSQLValueString($_POST['c'], "text"),
                       GetSQLValueString($_POST['s'], "text"));

  mysql_select_db($database_prince, $prince);
  $Result1 = mysql_query($insertSQL, $prince) or die(mysql_error());

  $insertGoTo = "congrat.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_prince, $prince);
$query_Recordset1 = "SELECT * FROM register";
$Recordset1 = mysql_query($query_Recordset1, $prince) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="formvalidation.js"></script>
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
   <script type="text/javascript">
<!--
	var letters=' ABCÇDEFGHIJKLMNÑOPQRSTUVWXYZabcçdefghijklmnñopqrstuvwxyzàáÀÁéèÈÉíìÍÌïÏóòÓÒúùÚÙüÜ'
	var numbers='1234567890'
	var signs=',.:;@-\''
	var mathsigns='+-=()*/'
	var custom='<>#$%&?¿'

	function alpha(e,allow) 
	{
		var k;
		k=document.all?parseInt(e.keyCode): parseInt(e.which);
		return (allow.indexOf(String.fromCharCode(k))!=-1);
	}

// -->
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>prince hotel</title>
<style type="text/css">
.style1 {color: #FFFFFF}
.style2 {
	color: #FFFFFF;
	font-size: 18px;
	font-style: italic;
	font-weight: bold;
}
.style3 {color: #33CC99}
body {
	background-image: url(img/.gif);
	background-color: #ccc484;
}
.style7 {	font-size: 14px;
	color: #CCCCCC;
}
.style7 {	color: #FF0000;
	font-weight: bold;
	font-size: 36px;
}
.style8 {
	font-size: 18px;
	font-weight: bold;
}
.style29 {
	font-size: 24px
}
.style31 {color: #FFFFFF; font-size: 18px; font-weight: bold; }
.style18 {font-size: 36px;
	color: #FFFF99;
}
.style34 {color: #FFFF99;
	font-size: 36px;
}
</style>
<?php
error_reporting(0);
if(isset($_POST['submit']))
{
	  require('connect.php');

$fname=$_POST["fname"];
$username=$_POST["username"];
$password=$_POST["password"];
$gender=$_POST["sex"];
$city=$_POST["city"];
$state=$_POST["state"];
$country=$_POST["country"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$secquestion=$_POST["secquestion"];
$secanswer=$_POST["secanswer"];

       $extract1=mysql_query("SELECT * FROM registration WHERE user='$username' ");
        $count=mysql_num_rows($extract1);

        if($count == 0)
        {

$sql="INSERT INTO registration VALUES('', '$fname','$username','$password','$gender','$city','$state','$country','$phone','$email','$secquestion','$secanswer')";

$result=mysql_query($sql) or die(mysql_error());
if($result)
{
			echo "Registration done";
			header('Location:login.php');
}
else
	{		echo "<script type=\"text/javascript\">
alert(\"Registration failed\");
</script>";
}}
else
{
	 echo "<center><font face='Arial' size='6' color='white'>We cannot create the account from this username.<br>So please create the account with different name.</font></center>";
}} ?>
</head>

<body>
  <blockquote>
    <div align="center"><span class="style3"><span class="style17"><img src="images/Logo copy_104029.jpg" width=950/></span></div>
</blockquote>
<table width="800" border="0" align="center" background="img/Logo copy_104029.jpg">
  <td height="52">
  <form action="" method="post" name="f" onsubmit="return validateFormOnSubmit(this);">
    <footer class="mainFooter" style="width:100%;float:left;border-radius:5px;background-color:#991553;color:#;margin-top:2%;margin-bottom:2%;">
<center><p style="width:92%;margin:2% auto;color:;"><h2>REGISTRATION PAGE </h2></p></center>
</footer>                         
  
    <form method="post" name="form2" action="<?php echo $editFormAction; ?>">
      <table align="center" bgcolor="#fff" width="800px" height="500px">
        <tr valign="baseline">
          <td nowrap align="right">First name:</td>
          <td><input type="text" name="fn" value="" size="40"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Last name:</td>
          <td><input type="text" name="ln" value="" size="40"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Gender:</td>
          <td><label>
            <select name="g" id="g">
              <option>select option</option>
              <option>Male</option>
              <option>Female</option>
            </select>
          </label></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Phone number:</td>
          <td><input type="text" name="pn" value="" size="40"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Email address:</td>
          <td><input type="text" name="e" value="" size="40"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Password:</td>
          <td><input type="password" name="p" value="" size="40"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">Confrm password:</td>
          <td><input type="password" name="cp" value="" size="40"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">City:</td>
          <td><input type="text" name="c" value="" size="40"></td>
        </tr>
        <tr valign="baseline">
          <td nowrap align="right">State:</td>
          <td><input type="text" name="s" value="" size="40"></td>
        </tr>
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
	<aside>
<a href="index.php" style="text-decoration:none;background-color:#991553;color:#fff;padding:10px 10px;height:20px;
border-radius:15px;"><strong>Back To Home</strong></a>
</aside>
  </body>
</html>
<?php
mysql_free_result($Recordset1);
?>