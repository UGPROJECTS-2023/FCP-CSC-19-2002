<?php
include('../db/dbConnection.php');
//Start our session
session_start();
//expire the session if user is inactive for 30
//minutes or more
$expireAfter = 30;
if(isset($_SESSION['last_action'])){
$secondInactive = time() - $_SESSION['last_action'];
$expireAfterSeconds = $expireAfter * 60;
if($secondsInactive >= $expireAfterSeconds){
session_unset();
session_destroy();
}
}
include('viewbookings.php');
$_SESSION['last_action'] = time();
?>