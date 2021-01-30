<?php

	if (isset($_POST['user_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])) {
		echo $user_name = $_POST['user_name'];
		echo $contact_email = $_POST['contact_email'];
		echo $contact_text = $_POST['contact_text'];
	}

?>


<form action="ContactForm1.php" method="POST"> 
	
		username:-<input type="text" name="user_name"><br></br>
		Email_address:-<input type="text" name="contact_email"><br><br>
		message:-<br>
		<textarea name="contact_text" rows="6" cols="30"></textarea>
		<input type="submit" name="submit" value="submit">
</form>