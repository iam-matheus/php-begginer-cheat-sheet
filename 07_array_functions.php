<?php

$fruits = ['apples', 'pears', 'oranges', 'grapes'];

//get array length
// echo count($fruits);

//search in array
//this functiontakes in the value in search and the array
// echo in_array('grapes', $fruits);


//add to array
$fruits[] = 'mangos';
array_push($fruits, 'banana', 'kiwi');

array_unshift($fruits, 'strawberries');     //adds to the beginning of the array


// remove from array
array_pop($fruits);
array_shift($fruits);   // removes element at the beginning of the array
// unset($fruits[0]);  //removes specific element


//  split the array ino specific chunks
// $chunked_array = array_chunk($fruits, 3); 

//  concat arrays

$arr1 = [1, 2, 3, 4];
$arr2 = [5, 6, 7, 8];

// $merged_array = array_merge($arr1, $arr2);
// $arr4 = [...$arr1, ...$arr2 ];
// print_r($arr4);

// print_r($fruits);

$a = ['green', 'orange', 'blue', 'black'];
$b = ['apples', 'aranges', 'roses', 'berries'];

$c = array_combine($a, $b); //it combines arrays in a key: value pair

print_r($c);

// Array of keys
$keys = array_keys($c);

// Flip keys with values
$flipped = array_flip($c);
// var_dump($flipped);

// Create array of numbers with range()
$numbers = range(1, 20);

// print_r($numbers);

// Map through array and create a new one
$newNumbers = array_map(function ($number) {
    return "Number ${number}";
}, $numbers);

print_r($newNumbers);
// Filter array
$lessThan10 = array_filter($numbers, fn ($number) => $number <= 10);
$greaterThan10 = function ($numbers) {
    return array_filter($numbers, fn ($number) => $number > 10);
};

echo "Numbers lessThan10";
print_r($lessThan10);

echo "Numbers greaterThan10";
print_r($greaterThan10($numbers));


// Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);
var_dump($sum);
