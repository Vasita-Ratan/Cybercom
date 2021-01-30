<?php

	if (isset($_POST['user_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])) {
		$user_name = $_POST['user_name'];
		$contact_email = $_POST['contact_email'];
		$contact_text = $_POST['contact_text'];

		if(!empty($user_name) && !empty($contact_email) && !empty($contact_text)) {
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
	
		username:-<input type="text" name="user_name"><br></br>
		Email_address:-<input type="text" name="contact_email"><br><br>
		message:-<br>
		<textarea name="contact_text" rows="6" cols="30"></textarea>
		<input type="submit" name="submit" value="submit">
</form>