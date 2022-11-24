<?php

/**
 *           ---------operators-------
 *  < less than
 *  > greater than
 *  >= greater than or equal to
 *  <= less than or equal to
 *  == equal to
 *  ===identical to     (value and also type is identical)
 *  != not equal to
 *  !== not identical to
 * 
 */

/* -------------------------------- If statements -------------------------------- */

/*
 ** if statement syntax
 if (condition) {
    // code to be executed if true
 }
 */

// $age =  17;

// if ($age >= 18) {
//     echo "You are old enough to drink a beer";
// } else {
//     echo "Sorry, not today kiddo!";
// }

// $date = date("F j, Y");

// echo $date;


$posts = ["Post 1", "Post 2", "Post 3", "Post 4", "Post 5"];

// if ($posts[0] == $posts[3]) {
//     echo "Posts are equal to each other!";
// } else if ($posts[0] !== $posts[3]) {
//     echo "Posts are not equal to each other!";
// } else {
//     echo "Where in the world are the posts?";
// }

// if (!empty($posts)) {
//     echo "There are posts in the array!";
// } else {
//     echo "There are no posts in the array!";
// }

// echo !empty($posts) ? "There are " . implode(", ", $posts) . " posts" : "There are no  posts in the array!";

// $display_posts = implode(", ", $posts) ?? "There are no posts in the array!";

// echo $display_posts;

/* Swicth cases */

$day = "";

switch ($day) {
    case 'Sun':
        echo "Today is " . $day;
        break;
    case 'Mon':
        echo "Today is " . $day;
        break;
    case 'Tue':
        echo "Today is " . $day;
        break;
    case 'Wed':
        echo "Today is " . $day;
        break;
    case 'Thurs':
        echo "Today is " . $day;
        break;
    case 'Fri':
        echo "Today is " . $day;
        break;
    case 'Sat':
        echo "Today is " . $day;
        break;
    default:
        echo "Today is " . date('F j, Y');
}
