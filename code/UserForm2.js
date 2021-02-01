function validation()
{
	var name = document.getElementById('name').value;
	var password = document.getElementById('password').value;
	var gender = document.getElementById('gender').value;
	var Address = document.getElementById('Address').value;
	var date = document.getElementById('date').value;
	var checkbox = document.getElementById('checkbox').value;
	var status = document.getElementById('status').value;
	

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
	if(gender == " ")
	{
		document.getElementById('gender').innerHTML = "gender Feild is require";
		return false;
	}

	if(Address == " ")
	{
		document.getElementById('Address').innerHTML = "please fill the Feild";
		return false;
	}
	if(date == " ")
	{
		document.getElementById('date').innerHTML = "gender Feild is require";
		return false;
	}

	if(checkbox == " ")
	{
		document.getElementById('checkbox').innerHTML = "please choose  any one Game";
		return false;
	}

	if(status == " ")
	{
		document.getElementById('status').innerHTML = "gender Feild is require";
		return false;
	}

}