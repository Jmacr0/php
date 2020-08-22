<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	$inputName = $_GET["name"];
	echo "Welcome, $inputName";
	$friendsArray = array('Bob', 'Julie');
	?>

	<form action="index.php" method="get">
		Name: <input type="text" name="name">
		<button type="submit">submit</button>
	</form>

</body>

</html>