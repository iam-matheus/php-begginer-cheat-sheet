<?php

function registerUser($name)
//  To use a global variable, you need toto prefix it with the keyword 'global'
{
    echo $name . " is registered";
}

// registerUser('Ping');


function add($num1, $num2)
{
    return $num1 + $num2;
}

function minus($num1 = 45, $num2 = 50)  //this function is using default values. the values are initiated at declraction
{
    return $num2 - $num1;
}

// $sum = add(7, 3);
// echo $sum;
// $substraction = minus();
// echo $substraction;

/* We can aslo have anonimous functions. They are anonimous because they are not named at declraction */

$full_name = function ($f_name, $l_name) {
    $name = $f_name . ' ' . $l_name;
    return $name;
};
echo $full_name('John', 'Doe');
