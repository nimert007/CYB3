<?php

// Симуляция: обычно список данных извлекается программным кодом, например, из БД

$people = [
    array("FirstName" => "Yuri", "LastName" => "Andrienko", "City" => "Moscow",  "Salary" => 123456),
    array("FirstName" => "Vasja", "LastName" => "Pupkin", "City" => "Uevo-Kuruevo",  "Salary" => 333433),
    array("FirstName" => "Andi", "LastName" => "Johnson", "City" => "Saratov",  "Salary" => 32477245),
    array("FirstName" => "Ivan", "LastName" => "Andreev", "City" => "New York",  "Salary" => 234345)
];

//фильтруем данные по первым буквам фамилии
$letters = strtolower($_REQUEST["letters"]) ;

$results = [];
foreach($people as $person) {
    if (str_starts_with(strtolower($person["LastName"]), $letters)) {
        array_push($results, $person);
    }
}

// Отправим извлечённые данные в формате JSON
echo json_encode($results);
