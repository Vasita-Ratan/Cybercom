function validation()
{
	var fname = document.getElementById('fname').value;
	var lname = document.getElementById('lname').value;
	var gender = document.getElementById('gender').value;
	var Country = document.getElementById('Country').value;
	var email = document.getElementById('email').value;
	var mobile = document.getElementById('mobile').value;
	var password = document.getElementById('password').value;
	var conpassword = document.getElementById('conpassword').value;
	var checkbox = document.getElementById('checkbox').value;


	if(fname == " ")
	{
		document.getElementById('fname').innerHTML = "please fill the Feild";
		return false;
	}
	if(lname == " ")
	{
		document.getElementById('lname').innerHTML = "please fill the Feild";
		return false;
	}
	if(gender == " ")
	{
		document.getElementById('gender').innerHTML = "gender Feild is require";
		return false;
	}
	if(Country == " ")
	{
		document.getElementById('Country').innerHTML = "gender Feild is require";
		return false;
	}
	if(email == "")
	{
		document.getElementById('email').innerHTML = "gender Feild is require";
		return false;
	}
	if(mobile == "")
	{
		document.getElementById('mobile').innerHTML = "gender Feild is require";
		return false;
	}


	if(password == " ")
	{
		document.getElementById('password').innerHTML = "please fill the Feild";
		return false;
	}
	if(conpassword == " ")
	{
		document.getElementById('conpassword').innerHTML = "please fill the Feild";
		return false;
	}
	if(checkbox == " ")
	{
		document.getElementById('checkbox').innerHTML = "please choose  any one Game";
		return false;
	}
}