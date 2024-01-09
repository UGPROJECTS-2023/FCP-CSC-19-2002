function validateFormOnSubmit(reserve)
{
	
	var reason = "";
	reason += validateNo(reserve.No);
	reason += validatename(reserve.name);
	reason += validateemail(reserve.email);
	reason += validatetelno(reserve.telno);
	reason += validateaddress(reserve.address);
	
	if(reason!= "")
	{
		alert("All the required fields are empty!!!");
		return false;
		
	}
	return true;
	
	
function validateEmpty(fld)
{
		var error = "";
		if(fld.value.length == 0)
		{
			fld.style.background = "#7dc855";
			error = alert("Please fill in the required fields \n");		
		}
		else {
			fld.style.background = "#FFFFFF";
		}
		return error;
}	

function validateNo(fld)
{
	var error = "";
	
	if(fld.value == "") {
		fld.style.background = "#7dc855";
		fld.focus();
		error = alert("Please enter room No");
	}
	
	else {
		fld.style.background = "FFFFFF";
		
	} 
	
	return error;
		}

function trim(s)
{
	return s.replace(/^\s+|\s+$,"/);
}
function validatename(fld)
{
	var error = "";
	if(fld.value == "")
	{
		error = alert("Please fill in the Room name");
		fld.style.background ="#7dc855";
}
return error;
}	

function validateemail(fld)
{
	var error = "";
	var tfld = trim(fld.value);
	var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/;
	var illegalChars = /[\(\)\<\>\,\;\:\\\"\[\]]/;
	
	if(fld.value == "") {
		fld.style.background = "#7dc855";
		error = alert("Please enter Your email address .\n");
	} else if(!emailFilter.test(tfld)) {
		fld.style.background = "#FF3399";
		error = alert("Please enter a valid email address. \n");
	}
		else if(fld.value.match(illegalChars))
		{
			fld.style.background = "#7dc855";
			error = alert("The email address contains illegal characters. \n");
		}
		else {
			fld.style.background = "FFFFFF";
		}
		return error;
	}

function validatetelno(fld)
{
	var error = "";
	var stripped = fld.value.replace(/[\(\)\.\-\ ]/g);
	
	if(fld.value == "")
{
	error = alert("Pleas enter a phone number.\n");
	fld.style.background = "#7dc855";	
} else if(isNaN(parseInt(stripped)))
{
	error = alert("The phone number contains wrong characters");
	fld.style.background = "#FF33CC";
}
return error;
}

function validateaddress(fld)
{
	var error = "";
	if(fld.value == "")
	{
		error = alert("Please leave a address...");
		fld.style.background = "#7dc855";
	}
return error;
	}

}