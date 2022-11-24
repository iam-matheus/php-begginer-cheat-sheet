<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for ($x = 0; $x <= 10; $x++) {
//     echo $x;
// }

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$x = 1;

// while ($x <= 5) {
//     echo "Number: " . $x . "<br>";
//     $x++;
// }

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);
do...while loop will always execute the block of code once, even if the condition is false.
*/

// do {
//     echo "Number: $x <br>";
//     $x++;
// } while ($x <= 5);


$posts = ["Post 1", "Post 2", "Post 3", "Post 4", "Post 5", "Post 6", "Post 7", "Post 8", "Post 9", "Post 10"];

// for ($x = 0; $x < count($posts); $x++) {
//     // print_r(implode(" , ", $posts));
//     echo $posts[$x];
// }

// foreach ($posts as $post) {
//     print_r($post);
// }

// foreach ($posts as $index => $post) {
//     echo $index . " - " . $post . " <br> ";
// }

$person = [
    "fist_name" => "Matheus",
    "last_name" => "Mulundu",
    "age" => 21,
    "completed_school" => false
];

foreach ($person as $key => $value) {
    echo "$key - $value <br>";
}
