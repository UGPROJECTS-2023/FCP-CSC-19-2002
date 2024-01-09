// JavaScript Functions for several validations used in "function.js"

//function to check whether textbox contents is characters, space, dot or not!
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

//function to validate email address
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

//function to validate phone number
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