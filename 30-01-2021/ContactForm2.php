<?php

	if (isset($_POST['user_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])) {
		$user_name = $_POST['user_name'];
		$contact_email = $_POST['contact_email'];
		$contact_text = $_POST['contact_text'];

		if(!empty($user_name) && !empty($contact_email) && !empty($contact_text)) {
				echo "This mail is sent";
		}
		else
		{
			echo "please fill all feilds";
		}
	}

?>


<form action="ContactForm2.php" method="POST"> 
	
		username:-<input type="text" name="user_name"><br></br>
		Email_address:-<input type="text" name="contact_email"><br><br>
		message:-<br>
		<textarea name="contact_text" rows="6" cols="30"></textarea>
		<input type="submit" name="submit" value="submit">
</form>