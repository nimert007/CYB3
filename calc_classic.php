

<html>
	<head>
		<title>Калькулятор на  PHP</title>
		<meta charset="utf-8">
		
		<style> 
			input, button {
				margin: 6px;
			}
			button {
				width: 65px;
			}
		</style>
		
	</head>

	<body>
		<a href="index1.html">Домашняя страница</a>
		<h1>Калькулятор на классическом PHP</h1>
        <?php 
            if (isset($_REQUEST["num1"])) {
                $x = $_REQUEST["num1"];
                $y = $_REQUEST["num2"];
                $z = $x + $y;
            }
            else {
                $x = ""; $y = ""; $z = "";
            }
            
        ?>
        <form>
            <input type="text" name="num1" value="<?=$x?>" /> <br />
		    <input type="text" name="num2" value="<?=$y?>" /> <br />
		    <button >+</button>
		    <button >-</button> <br />
		    <input type="text" value="<?=$z?>" />  <br/>
            <textarea></textarea>
        </form>
		
	</body>
</html>