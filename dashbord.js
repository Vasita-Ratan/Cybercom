	
	var selectedRow = null;

	function onFormSubmit()
	{
	  if(validate()){
		var formdata = readformdata();
		if(selectedRow == null)
			insertNewRecord(formdata);
		
		else
			updateData(formdata);
		
	   resetform();
     }
}


	function readFormData()
	{
		formdata["name"] =  document.getElementById("name").value;
		formdata ["Email"] = document.getElementById("Email").value;
		formdata["Password"] = document.getElementById("Password").value;
		formdata["Birthdate"] = document.getElementById("Birthdate").value;
		formdata["age"] = document.getElementById ("age").value;
		return formdata;
	}
	function insertNewRecord(data)
	{
		var table = document.getElementByIdTagname('tbl')[0];

			var newrow = table.insertRow(table.lemgth);

			 var td1 = newrow.insertCell(0);
			 td1.innerHTML=data.name;
			var td2 = newrow.insertCell(1);
			td2.innerHTML=data.Email;
			var td3 = newrow.insertCell(2);
			td3.innerHTML=data.Password;
			var td4 = newrow.insertCell(3);
			td4=innerHTML=data.Birthdate;
			var td5 = newrow.insertCell(4);
			td5=innerHTML=data.age;


	}

	function resetform()
	{
		document.getElementById("name").value = "";
		document.getElementById("Email").value = "";
		 document.getElementById("Password").value = "";
		  document.getElementById ("Birthdate").value = "";
		 document.getElementById ("age").value = "";
	}

	function onEdit(td)
	{
		selectedRow - td.parentElement.parentElement;
		document.getElementById("name").value = selectedRow.cells[0].innerHTML;
		document.getElementById("Email").value =selectedRow.cells[1].innerHTML;
		 document.getElementById("Password").value = selectedRow.cells[2].innerHTML;
		  document.getElementById("Birthdate").value = selectedRow.cells[3].innerHTML;
		 document.getElementById ("age").value = selectedRow.cells[4].innerHTML;

	}

			
		
function updateData(formdata)
{
	selectedRow.cells[0].innerHTML = formdata.name;
	selectedRow.cells[1].innerHTML = formdata.Email;
	selectedRow.cells[2].innerHTML = formdata.Password;
	selectedRow.cells[3].innerHTML = formdata.Birthdate;
	selectedRow.cells[4].innerHTML = formdata.age;
}

function Delete(td)
{
	if(confirm('Are you sure to delete record?'))
	{
			row =td.parentElement.parentElement;
			document.getElementById('tbl').deleteRow(row.rowIndex);
			resetform();
	}
}
function validate()
{
	isValid = true;
	if(document.getElementById("name").value == "")
	{
		isValid = false;
		document.getElementById("fullNameValidationError").classList.remove("hide");
	}
	else{
			isValid = true;
			if(document.getElementById("fullNameValidationError").classList.contains("hide"))

				document.getElementById("fullNameValidationError").classList.add("hide");
				
	}

}
		}
			function togglemenu(){

				document.getElementById('slidebar').classList.toggle(active);
			}