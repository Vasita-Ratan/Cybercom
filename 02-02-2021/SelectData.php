<?php
$server_name="localhost";
$username="root";
$password="";
$db="training";
$mysql_error="not connect";

$con= mysqli_connect($server_name,$username,$password,$db) or die($mysql_error);

if(!mysqli_select_db($con,'training'))
{
	echo "not selected Database";	
}


$query = "select `id`,`name` from name";

$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);

if($total != 0)
{

	?>

		<table border="2">
			<tr>
				<th>id</th>
				<th>name</th>
			</tr>
		
		

	<?php

	while ($result = mysqli_fetch_assoc($data) ) {
		

		echo " <tr> 

				<td>".$result['id']."</td>
				<td> ".$result['name']."</td>
			</tr>";
	}

}
else
{
	echo "not connect"; 
}
?>


</table>

<html>
<body>
	<form action="SelectData.php" method = "POST">
	Name:-<input type="text" name="name"><br><br>
	<input type="submit" name="show" value="show">

	</form>
</body>
</html>