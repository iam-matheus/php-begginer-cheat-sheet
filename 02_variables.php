<?php

/* --------- PHP Data Types --------- */

/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - Special variable that holds a resource
*/

/* --------- Variable Rules --------- */

/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = "Dynasty"; //string
$age = 21;  //integer
$has_cash = false;  //boolean
$status = "unkown"; //string

//echo 'Age for ' . $name . ' is ' . $age . '';
//echo "Age for $name is $age";
// echo "Age for ${name} is ${age}";


$x = 5 + 5;

// var_dump($x);
// echo $x - 5;
// echo 5 * 4;
// echo $x / 3;
// echo 6 % 2.3;


define('HOST', 'localhost');
define('DB_NAME', 'mysql');
define('COMPANY', 'loop');

echo HOST;
