<!-- Javascript function to validate inputs for room No, Room name, 
	product price and check if an image is selected --->	
<script type = "text/javascript">
	function validateForm()
	{
		var a = document.forms["addroom"]["code"].value;
		if(a == null || a == "")
		{
			alert("Please enter the room code");
			a.style.background = "#339966";
			return false;
		}
		
		var b = document.forms["addroom"]["name"];
		if(b == null || b == "")
		{
			alert("Please enter the room name");
			b.style.background = "#339966";
			return false;
		}
		
		var c = document.forms["addroom"]["price"];
		if(c == null || c == "")
		{
			alert("Please enter the room price");
			b.style.background = "#339966";
			return false;
		}
		
		var d = document.forms["addroom"]["image"];
		if(d == null || d == "")
		{
			alert("Please browse the room image");
			return false;
		}
	}

</script>

<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#7dc855;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:transparent;
padding:5px;
background-color:#7dc855;
color: white;
height: 34px;
width: 50%;
cursor: pointer;
}
-->
</style>

<!--Javascript Function to Ensure price input is NumberOnly() 
<script>
		function isNumberKey(evt)
		{
			var charCode = (evt.which) ? evt.which : event.keyCode;
			if(charCode > 31 && (charCode < 48 || charCode > 57))
			{
				return false;
			}
			
			return true;
		}

</script>
--->

<form action = "addexec.php" method = "post" enctype = "multipart/form-data" name = "addproduct" onsubmit = "return validateForm()">
<b> Room No </b> <br>
<input type = "text" name = "code" class = "ed" />
<b><p style = "color: red">***Please check the last Room ID to avoid duplication</b></p> <br>

<b> Room Name </b> <br>
<input type = "text" name = "name" class = "ed" /><br><br>

<b> Price </b> <br>
<input type = "text" name = "price" class = "ed" onkeypress = "return isNumberKey(event)" /><br><br>

<b> Room Image </b> <br>
<input type = "file" name = "image" class = "ed"><br><br>

<input type = "submit" name = "Submit"  value = "Save" id = "button1" />

</form>
