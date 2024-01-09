<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_prince = "localhost";
$database_prince = "'prince'";
$username_prince = "root";
$password_prince = "";
$prince = mysql_pconnect($hostname_prince, $username_prince, $password_prince) or trigger_error(mysql_error(),E_USER_ERROR); 
?>