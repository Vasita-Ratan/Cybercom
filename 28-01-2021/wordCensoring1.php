<?php


$find = array('Ratan','sumit','karan');
$replace = array('R***n','s***t','k***n'); 
if(isset($_POST['user_text']) && ! empty($_POST['user_text']))
{
	 $user_text = $_POST['user_text'];
	  $string_new = str_replace($find, $replace, $user_text_lc);//capital latters ingnoring using str_ireplace

	 echo $string_new;

}

?>


<form action="wordCensoring.php" method="GET">
	
	<textarea name= "user_text" cols="30" rows="7"> <?php echo $user_text; ?></textarea><br><br>

	<input type="submit" name="submit" value="submit">

</form>
