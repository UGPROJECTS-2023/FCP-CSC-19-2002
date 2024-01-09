<form action = "execeditstatus.php" method = "post">
<input type = "hidden" name = "roomid" value = "<?php echo $id = $_GET['id'] ?>">
Status: <br>
<select name = "status" style = "border-style: solid; border-width: thin; border-color: #7dc855; padding: 5px; margin-bottom: 4px;">
<option> Paid </option>
<option> Pending </option>
</select>
<br><br>
<input type = "submit" value = "Save Changes" style = "width:40%; border-radius: 1px; border-color: transparent; background-color: #7dc855;">
</form>