<?php
// де факто здесь авторизация доступа-проверка наличия жетона безопасности
session_start();
if (!isset($_SESSION["user"])) {
	echo '<meta http-equiv="refresh" content="2; url=login.php">';
	die("Для использования требуется логин. Перенаправление автоматически.");
}
?>

<html>
	<head>
		<title>Калькулятор</title>
		<meta charset="utf-8">
		
		<style> 
			input, button {
				margin: 6px;
			}
			button {
				width: 77px;
			}
		</style>
		<script type="text/javascript">
			function plus() {
				let x, y, z;
				x = parseInt(document.getElementById("num1").value);
				y = parseInt(document.getElementById("num2").value);
				z = x + y;
				document.getElementById("num3").value = z;
			}
			function minus() {
				let x, y, z;
				x = parseInt(document.getElementById("num1").value);
				y = parseInt(document.getElementById("num2").value);
				z = x - y;
				document.getElementById("num3").value = z;
			}
		</script>
	</head>

	<body>
		<a href="index1.html">Домашняя страница</a>
		<h1>Калькулятор на чистом JS</h1>
		<input type="text" id="num1" name="число 1"> <br/>
		<input type="text" id="num2" name="число 2"> <br/>
		<button onclick="plus();">+</button>
		<button onclick="minus();">-</button> <br/>
		<input type="text" id="num3" name="результат"> 
	</body>
</html>