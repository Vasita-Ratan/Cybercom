

<?php ob_start(); //store the buffer content ?>
<h1>My page</h1>

This is my page
<?php

$redirect_page = 'http://google.co.uk';//redirect to this link using header fun      
$redirect_page = 'config.php';//define here php file also

$redirect =true;//dont redirect

if($redirect==true)
{
		header('location:'.$redirect_page);//redirect to another page terminate force
//header('location: http://google.com');//other way to write string 

}

//ob_end_clean();//this fun clean the buffer content redirect page to use it 

ob_end_flush();//flushing the buffer content properly redirect on specifed link
?>