<?php

$a = 10;
$b = 5;

// if ($a == $b) {
//     echo "values are equal";
// } else {
//     echo "values are not equal";
// }
// if (($a == $b) == false) {
//     echo "values are equal";
// }
// if ($a <> $b) {
//     echo "values are equal";
// }
// if ($a != $b) {
//     echo "values are NOT equal";
// }
// if ($a !== $b) {
//     echo "NOT identical";
// }

// if ($a) {
//     echo 'true';
// }
// if (!$a) {
//     echo 'false';
// }
// if ($a == false) {
//     echo 'false';
// }
// if ($a != true) {
//     echo 'false';
// }

// if ($a== $b) {
//     echo 'values are equal';
// } 
// elseif ($a < $b) {
//     echo '$a is less than $b';
// } 
// elseif ($a > $b) {
//     echo '$a is greater than $b';
// } 
// else {
//     echo 'values are not equal';
// }

// $score = 60;
// if ($score >= 60) {
//     echo 'You completed the level!';
// } 
// elseif ($score <= 30) {
//     echo 'You should practice some more before trying this level again';
// }
// else {
//     echo 'Please try again!';
// }

$num = 10000;

if ($num == 10 || is_string($num)) {
    echo '10 or string'; 
}
else {
    echo 'not 10 or string';
}

$var1 = (true && false);
$var2 = true and false;

var_dump($var1, $var2);

// if ($num >= 10 && $num <= 1000) {
//         echo 'your number is within the range';
//     }
// else {
//     echo 'your number is NOT within the range';
// }
?>