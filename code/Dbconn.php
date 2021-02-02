<?php

$mysql_error = 'could not connect';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'employee';

$conn = @mysql_connect($mysql_host,$mysql_user,$mysql_pass) or die($mysql_error); 


if($conn)
{
	?>
	<script>
		alert("connection sucessfull");
	</script>
	<?php
}
else
{
	?>
	<script>
		alert("connection unsucessfull");
	</script>
	<?php
}


?>