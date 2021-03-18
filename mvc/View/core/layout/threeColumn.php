<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>

		body {
		  margin: 0;
		  font-family: Arial, Helvetica, sans-serif;
		}

		.topnav {
		  overflow: hidden;
		  height: 50px;
		  background-color: #475659;
		  font-color:#fcfffc;
		}
		.topnav-right {
		  overflow: hidden;
		  background-color: #888c88;
		  font-color:white;
		}

		.topnav a {
		  float: left;
		  color: black;
		  text-align: center;
		  padding: 11px 11px;
		  text-decoration: none;
		  font-size: 17px;
		}

		.topnav a:hover {
		  background-color: #a7b0a7;
		  color:blue ;
		}

		.topnav a.active {
		  background-color: #1a1c1c;
		  color: white;
		}

		.topnav-right {
		  float: right;
		}

		#icon{

		  color: #debe7a;
		}
		.com{

		  padding: 10,10,10,10;
		  font-size: 25px;  
		  color: white;
		}
		.font
		{
		    color: black;
		}
		#red{

		  color: #64b3a3;
		}
	</style>
</head>
<body>
	<table border="1" width="100%">
		<tbody>
			<tr>
				<td height="100px" colspan="3"><?php echo $this->getChild('header')->toHtml() ?></td>
			</tr>
			<tr>
				<td height="500px" width="10%"><?php echo $this->getChild('left')->toHtml() ?></td>
				<td height="500px" width="80%">
					<?php echo $this->getChild('content')->toHtml() ?>
				</td>
				<td height="500px" width="10%"><?php echo $this->getChild('right')->toHtml() ?></td>
			</tr>
			<tr>
				<td height="100px" colspan="3">footer</td>
			</tr>
		</tbody>
	</table>
</body>
</html>