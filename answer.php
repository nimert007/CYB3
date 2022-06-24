<html>
    <title>
        Результат рассмотрения заявки
    </title>
    <meta charset="UTF-8">
    <body>
        <h1 style="color:green">Ваша заявка рассмотрена</h1>
        <h2 style="color:red">
        <?php
            $x = $_REQUEST['num1'];
            $y = $_REQUEST['num2'];
            $result = $x + $y;

            echo("Результат сложения: " . $result);
        ?>
        </h2>
    </body>
</html>