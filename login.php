<<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<style type="text/css">
			h1 {
			  color: #00FF00;
			  background-color: #000000;	
			}
            input{
                width: 100px;
                margin: 5px;
            }
		</style>
	</head>

	<body>
		<a href="index1.html">Домашняя страница</a>
		<h1 id="hdr1">Введите имя и пароль</h1>

		<form action="check_login.php" method="POST">
            		<input type="text" name="txtUser" /> <br/>
           		 <input type="password" name="txtPwd"/> <br/>
            		<input type="submit" value="Войти!" />
        	</form>
	</body>

</html>