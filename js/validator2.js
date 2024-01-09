/*
This code validates email, name, telephone number, CVV, address, card number to check it 
contain the right kind of inputs such as Numeric only, alphabet only, alphanumeric only and 
above all check all required textfields are not empty!!!.

Originally written by these stackflow users: kki3908050, Krumia.
Modified to suit purpose by:		Muheeb Ridwan (Aspiring coder)

COMMERCIAL USE ONLY!!!!
*/

function formvalidator()
	{
	var firstname = document.getElementById('firstname');
	var lastname = document.getElementById('secondname');
	var cardnumber = document.getElementById('cardno');
	var cvv = document.getElementById('cvvnumber');
	var address = document.getElementById('address');
	var phone = document.getElementById('phone');
	
	//Check if all element inputs are filled
	
	if(isAlphabet(firstname, "Please enter only letters for your first name")) {
		if(isAlphabet(lastname, "Please enter only letters for your last name")) {
			if(isNumericOnly(cardnumber, "Invalid entry! \n Please enter a valid a card number")) {
				if(isNumeric(cvv, "Invalid entry! \n Please enter a valid CVV")) {				
						if(isNumeric(phone, "Invalid entry in telephone field. Only numbers are allowed!")) {
						if(emailValidator(email, "Please enter a valid email")) {
							
							return true;
							}
						}
					
					
	
	}
	}
	}
	}
	return false;
	
	
}
//Function to check if input field is not empty
function notEmpty(elem, helperMsg) {
	if(elem.value.length == 0)
	{
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
		
	}
	return true;
}

//Function to check if input field isNumeric only
function isNumeric(elem, helperMsg)
{
	var numericExpression = /[0-9]+/; 
	if(elem.value.lenght == 0) {
		alert("Fill in the required field please!");
		elem.style.background = "#CCFFCC";
		elem.focus();
	}
	
	else if(elem.value.match(numericExpression)) {
		return true;
	} else {
		alert(helperMsg);
		elem.focus();
		return false;
	}
	
	}

//Function to check if input field isAlphabet only
function isAlphabet(elem, helperMsg) {
		var alphaExp = /^[a-zA-Z]+$/;
		if(elem.value.length == 0)
		{
			alert("Fill in the required field please!");
			elem.style.background = "#CCFFCC";
			elem.focus();
		}
	else if(elem.value.match(alphaExp)) {
		return true;
	} else {
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

//Function to check if input field isNumeric only
function isNumericOnly(elem, helperMsg) {
	var numericonly = /^[0-9]/;
	if(elem.value.length == 0)
	{
		alert("Fill in the required field please!");
		elem.style.background = "#CCFFCC";
		elem.focus();
	}
	else if(elem.value.match(numericonly)) {
	return true;
	} else {
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

//Function to check if input field isAlphanumeric only
function isAlphanumeric(elem, helperMsg) {
	var alphaExp = /^[0-9a-zA-z]+$/;
	if(elem.value.length == 0)
	{
		alert("Fill in the required field please!");
		elem.style.background = "#CCFFCC";
		elem.focus();
	}
	else if(elem.value.match(alphaExp)) {
		return true;
	} else {
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

//Function to valiid email field
function emailValidator(elem, helperMsg) {
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.length  == 0)
	{
		alert("Fill in the required field please!");
		elem.style.background = "#CCFFCC";
		elem.focus();
	}
	else if(elem.value.match(emailExp)) {
		return true;
	} else {
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
