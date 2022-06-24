<?php

$numbers = [1, 2, 3, 44, 5];
// echo $numbers[4];

foreach($numbers as $x) {
    echo "$x <br />";
}

// $people = [
//     ["Yuri", "Moscow"],
//     ["Eugene", "Kaliningrad"],
//     ["Aleksey", "London"], 
//     ["Daniil", "Moscow"]  
//     ];

// $i = 1;

// foreach($people as $person) {
//     $name = $person[0];
//     $city = $person[1];
//     echo("$i. $name from $city <br />");
//     $i = $i + 1;
// }
// $person1 = array("FirstName" => "Yuri", "LastName" => "Andrienko", "City" => "Moscow",  "Salary" => 123456);

// echo $person1['FirstName'].$person1['LastName'].$person1['City'].$person1['Salary'];

$people = [
    array("FirstName" => "Yuri", "LastName" => "Andrienko", "City" => "Moscow",  "Salary" => 123456),
    array("FirstName" => "Vasjz", "LastName" => "Pupkin", "City" => "Uevo-Kuruevo",  "Salary" => 333433),
    array("FirstName" => "Andi", "LastName" => "Johnson", "City" => "Saratov",  "Salary" => 32477245)
];

foreach($people as $person) {
    echo $person['FirstName']." ".$person['LastName']." ".$person['City']." ".$person['Salary'];
}

