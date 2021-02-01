function validation()
{
	var name = document.getElementById('name').value;
	var password = document.getElementById('password').value;
	var Address = document.getElementById('Address').value;
	var checkbox = document.getElementById('checkbox').value;
	var gender = document.getElementById('gender').value;

	if(name == " ")
	{
		document.getElementById('name').innerHTML = "please fill the Feild";
		return false;
	}

	if(password == " ")
	{
		document.getElementById('password').innerHTML = "please fill the Feild";
		return false;
	}

	if(Address == " ")
	{
		document.getElementById('Address').innerHTML = "please fill the Feild";
		return false;
	}

	if(checkbox == " ")
	{
		document.getElementById('checkbox').innerHTML = "please choose  any one Game";
		return false;
	}

	if(gender == " ")
	{
		document.getElementById('gender').innerHTML = "gender Feild is require";
		return false;
	}

}