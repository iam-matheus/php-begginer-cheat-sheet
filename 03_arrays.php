<?php
//simple array

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$soccer_teams = array('man_u', 'man_city', 'leeds', 'chelsea');

// print_r($soccer_teams);
// echo $numbers[3];


//associative array

$hex = [
    "red" => '#f00',
    "blue" => '#0f0',
    "green" => '#00f'
];

// echo $hex["red"];
// var_dump($hex);
// echo $hex[0]; //this won't work because the indeces of array 'hex' are hardcoded as re, blue and green.

$colors = [
    1 => 'blue',
    2 => 'green',
    3 => 'red',
    4 => 'purple',
    5 => 'orange',
    6 => 'being',
    7 => 'yellow'
];

// print $colors['4'];

$person = [
    "fist_name" => "Matheus",
    "last_name" => "Mulundu",
    "age" => 21,
    "completed_school" => false
];

$people = [
    [
        "fist_name" => "John",
        "last_name" => "Doe",
        "age" => 54,
        "completed_school" => true
    ],
    [
        "fist_name" => "Marx",
        "last_name" => "Kamati",
        "age" => 22,
        "completed_school" => false
    ],
    [
        "fist_name" => "Eus",
        "last_name" => "Morlon",
        "age" => 34,
        "completed_school" => true
    ],
    [
        "fist_name" => "Jance",
        "last_name" => "Doe",
        "age" => 18,
        "completed_school" => false
    ]
];

var_dump(json_encode($people));
// print_r($people[3]['last_name']);
