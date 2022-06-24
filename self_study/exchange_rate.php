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
    function CBR_XML_Daily_Ru(rates) {
        function trend(current, previous) {
            if (current > previous) return ' ▲';
            if (current < previous) return ' ▼';
            return '';
        }
        
    var USDrate = rates.Valute.USD.Value.toFixed(4).replace('.', ',');
    var USD = document.getElementById('USD');
    USD.innerHTML = USD.innerHTML.replace('00,00', USDrate);
    USD.innerHTML += trend(rates.Valute.USD.Value, rates.Valute.USD.Previous);

    var AZNrate = rates.Valute.AZN.Value.toFixed(4).replace('.', ',');
    var AZN = document.getElementById('AZN');
    AZN.innerHTML = AZN.innerHTML.replace('00,00', AZNrate);
    AZN.innerHTML += trend(rates.Valute.AZN.Value, rates.Valute.AZN.Previous);
    }
    </script>
    <script src="//www.cbr-xml-daily.ru/daily_jsonp.js"></script>
</body>
</html>