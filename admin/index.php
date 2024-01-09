<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Admin Dashboard </title>
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" /> 
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="js/argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!-- SA Pop-up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
 </head> 
 <body>
 
 <!--- WRAPPER START --->
 <div class="container_16" id="wrapper">	
<!-- HIDDEN COLOR CHANGER -->      
      <div style="position:relative;">
  	<!--LOGO-->
	<div class="grid_8" id="logo">Guest House Administration</div>
    <div class="grid_8">
<!-- USER TOOLS START -->
      <div id="user_tools"><span><a href="../index.php">Logout</a></span></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="index.php" class="main current"><span class="outer"><span class="inner dashboard">Dashboard</span></span></a></li>
		<li class="item middle" id="four"><a href="message.php" class="main"><span class="outer"><span class="inner media_library">Messages</span></span></a></li>  
		<li class="item last" id="eight"><a href="rooms.php" class="main"><span class="outer"><span class="inner settings">Rooms</span></span></a></li>   
        <li class="item least" id="eight"><a href="register.php" class="main"><span class="outer"><span class="inner set">Users</span></span></a></li>	
         <li class="item leastt" id="eight"><a href="reserves.php" class="main"><span class="outer"><span class="inner sett">Reservation</span></span></a></li>			
    </ul>
</div>
<!--- MENU END --->
</div>

<!---CONTENT START--->
	<div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">Dashboard</h1>
    </div>
    <div class="clear">
    </div>
    <!--  TITLE END  --> 
	<!-- #PORTLETS START -->
    <div id="portlets">
    
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
		<div class="portlet">
			<div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> 
			<label for="filter">Search</label> <input type="text" name="filter" value="" id="filter" />
			&nbsp;&nbsp; Payment Status:  &nbsp;&nbsp;<img src="cancel.png">Pending  &nbsp; &nbsp; &nbsp;<img src="active.png">  Paid
			</div>
			<div class="portlet-content nopadding">
	<table cellpadding="1" cellspacing="1" id="resultTable">
				<thead>
					<tr>
						<th  style="border-left: 1px solid #C1DAD7"> Transaction ID </th>
						<th> First Name </th>
						<th> Second Name </th>
						<th> Address </th>
						<th> State </th>
						<th> Phone Number </th>
						<th> Email </th>
						<th> Grand Total </th>
						<th> Date </th>
						<th> Status </th>
						<th> Action </th>
						</tr>
						</thead>
				</tbody>
		<?php
			include('../db/dbConnection.php');
			$sql = "SELECT * FROM booking ORDER BY First_Name ASC";
			
			$result = mysqli_query($conn, $sql);
			
			while($row = mysqli_fetch_array($result))
			{
				echo '<tr class = "record" id="'.$row['status'].'">';
				echo '<td style = "border-left: 1px solid #C1DAD7;">'.$row['Trans_id'].'</td>';
				echo '<td><div align="left">'.$row['First_Name'].'</div></td>';
				echo '<td><div align="left">'.$row['Second_Name'].'</div></td>';
				echo '<td><div align="left">'.$row['Address'].'</div></td>';
				echo '<td><div align="left">'.$row['State'].'</div></td>';
				echo '<td><div align="left">'.$row['Phone_Number'].'</div></td>';
				echo '<td><div align="left">'.$row['Email'].'</div></td>';
				echo '<td><div align="left">'.$row['Grand_total'].'</div></td>';
				echo '<td><div align="left">'.$row['Date'].'</div></td>';
				echo '<td><div align="left">'.$row['status'].'</div></td>';
				echo '<td><div align="center"><a rel="facebox" href="viewbookings.php?id='.$row['Trans_id'].'" title="Click To View Bookings">View Bookings</a> | <a rel="facebox" href="viewreport.php?id='.$row['Trans_id'].'" title="Click To Print Report">Print Report</a> | <a rel="facebox" href="editstatus.php?id='.$row['Book_id'].'"><img src="images/edit.gif"></a> | <a href="#" id="'.$row['Book_id'].'" class="delbutton" title="Click To Delete"><img src="images/delete.gif"></a></div></td>';
				echo '</tr>';
		
				
			}
				?>
			</tbody>
			</table>
			</form>
			</div>
			</div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

</div>
</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
Website Administration by <a href="../indeex.php">#Guest Admin</a></div>
<!-- FOOTER END -->
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Are you sure you want to delete this update? \n You can't UNDO this action!!!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteres.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>

