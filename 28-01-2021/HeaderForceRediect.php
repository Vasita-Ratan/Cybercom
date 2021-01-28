
<h1>My page</h1>
<?php

$redirect_page = 'http://google.co.uk';//redirect to this link using header fun      

$redirect =true;

if($redirect==true)
{
		header('location:'.$redirect_page);//redirect to another page terminate force
//header('location: http://google.com');//other way to write string 

}
?>