<?php
session_start();
?>
<html>
	<head>
		<title>Регистрация нового пользователя</title>
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

        <?php   
            
            

            $user = $_REQUEST["name"];
            $email = $_REQUEST["email"];
            $login = $_REQUEST["login"];
            $pwd = $_REQUEST["psw"];
            $hash = hash('sha256',$pwd);
            
            

            $sql = "INSERT INTO users (UserName, Email, Login, PwdHash) VALUES ('$user', '$email', '$login', '$hash')";
            // echo $sql;
            $db_server = getenv("cyb3_db_server");
            $db_user = getenv("cyb3_db_user");
            $db_pwd = trim(getenv("cyb3_db_pwd"));      
            $conn = mysqli_connect($db_server, $db_user, $db_pwd, "cyb3");
            mysqli_query($conn, $sql);

            // $stmt = mysqli_prepare($conn, $sql);
            // mysqli_stmt_bind_param($stat, 's', $user);
            // mysqli_stmt_execute($stat);
            // $result = mysqli_stmt_get_result($stat);
            // echo $result;

            
            header("Location: red.html");
            exit();

        ?>
