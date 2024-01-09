//JavaScript Functions to validate form contents
function checks()
{
	// Validating "name" for non-empty & to ensure it contain characters using isCharDot() function written in function2.js
if(document.getElementById("name").value =="")
{
	alert("Please enter your name");
	document.getElementById("name").focus();
	return false;
}
	else
	{
		if(isCharDot(document.getElementById("name").value) == false)
		{
			alert("Name must be characters only!!");
			document.getElementById("name").focus();
			return false;
		}
	}

	// Validating "Subject" to ensure it is not empty
if(document.getElementById("subject").value == "")
	{
	alert("Please fill - in the subject!");
	document.getElementById("subject").focus();
	return false;
		}

//Validating "Message" to ensure it is not empty
if(document.getElementById("message").value == "");
	{
	alert("Please leave a message");
	document.getElementById("message").focus();
	return false;
	}

// Validating "Email" for non-empty & to ensure it contain characters specified in isEmail() function written in function2.js
if(document.getElementBydId("email").value == "")
{
	alert("Please enter a valid email address");
	document.getElementById("email").focus();
	return false;
}
	else
	{
		if(isEmail(document.getElementById("email").value) == false)
		{
			alert("Enter valid email address!!");
			document.getElementById("email").focus();
			return false;
		}
	}

	// Validating "phone number" to ensure it contain right contents using isPhoneNumber() function written in function2.js	
if(isPhoneNumber(document.getElementById("telno").value) == false)
{
	alert("Enter a valid telephone number!");
	document.getElementById("telno").focus();
	return false;
}
}
