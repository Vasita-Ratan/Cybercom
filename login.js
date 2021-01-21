

var Email = document.forms['form']['Email'];
var password = document.forms['form']['password'];

var Email_error = document.getElementById('Email_error');
var password_error = document.getElementById('password _error');




function validate() {
	const validate = () =>{

			const Emailval = Email.value.trim();
			const passwordval = password.value.trim();
		}

	// body...
	if(Email == Emailval && password == passwordval)
	{
		alert("login sucessfull");
		return true;
		widndow.location.href = "dashbord.html";
	}
	else if(Email == '' && password == '')
	{
			alert("login unsucessfull");
	}
}


