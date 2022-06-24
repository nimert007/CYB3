<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Текущий курс валют</title>  

</head>
<body>
<h1>Курс валют</h1>
    <?php			
		date_default_timezone_set("Europe/Kaliningrad");
		$now = date("H:i:s");
        $day = date("d.m.Y");
		echo "<h3>Текущий курс на  $now $day</h3>";
	?>
    
    <div id="USD">Американский доллар USD - 00,00 руб</div>
    <div id="AZN">Азербайджанский манат AZN - 00,00 руб</div>
    <script>
        var Valute = document.getElementById("Valute").value;
        var url = "//www.cbr-xml-daily.ru/daily_jsonp.js" + Valute;
        var xhr = new XMLHttpRequest();
        xhr.open("GET", url);
        xhr.onload = function() {
                var result = xhr.responseText;
                alert(result)
    </script>
    <script src="//www.cbr-xml-daily.ru/daily_jsonp.js"></script>
</body>
</html>