<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $this->getUrl()->baseUrl('Skin/Admin/css/style.css');?>">
	<style>

		
	</style>
</head>
<body>
	<table border="1" width="100%">
		<tbody>
			<tr>
				<td height="100px" colspan="3"><?php echo $this->getChild('header')->toHtml() ?></td>
			</tr>
			<tr>
				<td height="500px" width="80%">
					<?php echo $this->getChild('content')->toHtml() ?>
				</td>
			</tr>
			<tr>
				<td height="100px" colspan="3">footer</td>
			</tr>
		</tbody>
	</table>
</body>
</html>