
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Удвоенное число</title>
</head>
<body>
<a href="index1.html"> Домашняя страница </a> <br/> <br/>
<?php 

$x = $_REQUEST["num"];
$result = 2 * $x;

echo("<h2>Твое удвоенное число: $result</h2>");

?> <br />

</body>
</html>