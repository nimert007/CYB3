<?php
   session_start();
?>
<html>
	<head>
		<title>Проверка валидности</title>
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
		<?php   
            $user = $_REQUEST["txtUser"];
            $pwd = $_REQUEST["txtPwd"];
            $hash = hash('sha256',$pwd);
            
            //ниже допущен ряд допущений правил безопасности
            // 1. Слабый пароль у root - 1-3 устранены путём делегирования ответственности админу
            // сервера приложения (в переменные окружения)
            // 2. Нарушение принциапа наименьших привелегий
            // 3. Секрет в коде
            // 4. Уязвимость для SQLi - устранено

            // $sql = "SELECT * FROM users WHERE UserName='$user' AND PwdHash='$hash'";
            //echo $sql;
            $sql = "SELECT * FROM users WHERE Login=? AND PwdHash=?";
            $db_server = getenv("cyb3_db_server");
            $db_user = getenv("cyb3_db_user");
            $db_pwd = trim(getenv("cyb3_db_pwd"));      
            $conn = mysqli_connect($db_server, $db_user, $db_pwd, "cyb3");
            // Решаем проблему с SQLi
            $stat = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stat, "ss", $user, $hash);
            mysqli_stmt_execute($stat);
            $result = mysqli_stmt_get_result($stat);

            // $result = mysqli_query($conn, $sql);
            // //echo $result;
            // var_dump(mysqli_num_rows($result));
            $num_rows = mysqli_num_rows($result);
            mysqli_close($conn);
            
            if ($num_rows >= 1){
                echo "<h1> Привет, $user!</h1>";
                $_SESSION["user"] = $user;  
            }
            else {
                echo "<h1> Неверный пароль или логин!</h1>";
            }
        ?>
	</body>

</html>