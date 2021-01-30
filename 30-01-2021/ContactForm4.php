<?php

	if (isset($_POST['user_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])) {
		$user_name = $_POST['user_name'];
		$contact_email = $_POST['contact_email'];
		$contact_text = $_POST['contact_text'];

		if(!empty($user_name) && !empty($contact_email) && !empty($contact_text)) {

			if(strlen($user_name)>25 || strlen($contact_email)>50 || strlen($contact_text) )//set the lenght on this feild
			{
				echo "sorry maxlength for some has been existeds ";
			}
			else
			{

				$to = 'sumitrajput000444@gmail.com';
				$subject = 'simple email';
				$body = $user_name."\n\n".$contact_text;
				$headers = 'From: '.$contact_email;

				if(@mail($to, $subject, $body, $headers))
				{

					echo "Thank you for conacting us.";
				}
				else
				{
					echo "sorry some error occured on it ";
				}
			}
			else
			{
				echo "please fill all feilds";
			}
		}

?>


<form action="ContactForm3.php" method="POST"> 
	
		username:-<input type="text" name="user_name" maxlength="25"><br></br>
		Email_address:-<input type="text" name="contact_email" maxlength="50"><br><br>
		message:-<br>
		<textarea name="contact_text" rows="6" cols="30" maxlength="100"></textarea>
		<input type="submit" name="submit" value="submit">
</form>