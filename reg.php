<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <style> 
    * {box-sizing: border-box}
    .container {
    padding: 16px;
    }

    input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    }

    input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
    }

    hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
    }


    .registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    }

    .registerbtn:hover {
    opacity:1;
    }

    a {
    color: dodgerblue;
    }

    .signin {
    background-color: #f1f1f1;
    text-align: center;
    }
    </style>
</head>
<body>
    <a href="index1.html">Домашняя страница</a>
    <form action="new_user.php" method="POST">
    <div class="container">
        <h1>Регистрация нового пользователя</h1>
        <h3><p>Для создания аккаунта заполните форму</p></h3>
        <hr>

        <label for="email"><b>Ваше имя</b></label>
        <input type="text" placeholder="Enter name" name="name" min="1" max="16" value="16" pattern="^[a-zA-Z\s]+{1,16}$" required title="Не больше 16 знаков, буквы латинского алфавита и пробелы."> 

        <label for="email"><b>Ваш Email</b></label>
        <input type="text" placeholder="Enter valid Email" name="email" required pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$" title="Enter valid email- name@mail.ru"> 

        <label for="login"><b>Ваш логин</b></label>
        <input type="text" placeholder="Enter login" name="login" required pattern="[a-zA-Z]{1,8}" title="Не более 8 знаков, только буквы латинского алфавита и цифры."> 

        <label for="psw"><b>Ваш пароль</b></label>
        <input type="password" placeholder="Enter password" name="psw" min="1" max="8" value="8" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="8 или более символов, в том числе по меньшей мере, одну цифру,  одну прописную, одну строчные буквы">
        
        <button type="submit" class="registerbtn">Зарегистрироваться!</button>
        <hr>

        
        <div class="container signin">
        <p>Уже есть аккаунт? <a href="login.php">Войти в аккаунт</a>.</p>
        </div>
    </form>
    <p><h3 style="color: red; font-style: italic" align="right">Разработан Евгением Заболотским</h3></p>
	
</body>
</html>
