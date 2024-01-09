//JavaScript Functions to validate form contents
function checks()
{
function namecheck()
{
function isCharDot(str)
{
	len=str.length;
	for(i = 0; i<len; i++)
	{
		if(((str.charAt(i) >= 'a') && (str.charAt(i) <= 'z')) || ((str.charAt(i) >= 'A') && (str.charAt(i) <= 'Z')) || 
		(str.charAt(i) == '') || (str.charAt(i) == ''))
		{}
		else{
			return false; break;
		}
	}
	return true;

}
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


}

function subjectcheck()
{
	// Validating "Subject" to ensure it is not empty
if(document.getElementById("subject").value == "")
	{
	alert("Please fill - in the subject!");
	document.getElementById("subject").focus();
	return false;
		}

}

function messagecheck()
{
//Validating "Message" to ensure it is not empty
if(document.getElementById("message").value == "");
	{
	alert("Please leave a message");
	document.getElementById("message").focus();
	return false;
	}
}

function emailcheck()
{
function isEmail(email)
{
var RegExp = /^((([A-Z]|[a-z]|[0-9]|!|#|$|%|&|'|\*|\+|\-|\/|=|\?|\^|_|`|\{|\||\}|~)+(\.([A-Z]|[a-z]|[0-9]|!|#|$|%|&|'|\*|\+|\-|\/|=|\?|\^|_|`|\{|\||\}|~)+)*)@((((([A-Z]|[a-z]|[0-9])([A-Z]|[a-z]|[0-9]|\-){0,61}([A-Z]|[a-z]|[0-9])\.))*([A-Z]|[a-z]|[0-9])([A-Z]|[a-z]|[0-9]|\-){0,61}([A-Z]|[a-z]|[0-9])\.)[\w]{2,4}|(((([0-9]){1,3}\.){3}([0-9]){1,3}))|(\[((([0-9]){1,3}\.){3}([0-9]){1,3})\])))$/
if(RegExp.test(email)) 
{
	return true;
}
else {
	return false;
}
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

}

function phonenumercheck()
{

function isPhoneNumber(num)
{
	len=num.length;
	for(i=0; i<len; i++)
	{
		if((num.charAt(i) >= 0) && (num.charAt(i) <= 9) || (num.charAt(i) == '+'))
		{} else
			{
				return false; break;
			}
	}
	return true;
}
	// Validating "phone number" to ensure it contain right contents using isPhoneNumber() function written in function2.js	
if(isPhoneNumber(document.getElementById("telno").value) == false)
{
	alert("Enter a valid telephone number!");
	document.getElementById("telno").focus();
	return false;
}
}
}