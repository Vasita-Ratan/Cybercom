<?php

	if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {

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

?>


<form action="ContactUs.php" method="POST"> 
	
		<input type="text" name="name" maxlength="25" placeholder="Enter  Name:-"><br></br>
		<input type="text" name="email" maxlength="50" placeholder="Enter Email"><br><br>
		<input type="text" name="subject" maxlength="50" placeholder="Enter subject"><br><br>
		<textarea name="message" rows="6" cols="30" maxlength="100"></textarea>
		<input type="submit" name="submit" value="Send Message">
</form>