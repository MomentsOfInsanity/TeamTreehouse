<?php
$name = 'Raj Bedi';
$string_one = "Learning to display \"Hello $name!\" to the screen.\n";
$string_one = 'Learning to display ';
$string_one .= '"Hello ';
$string_one .= $name;
$string_one .= '!" to the screen.';
// $string_one = $string_one . "\n";
//prepend to the string
// $string_one = 'I am ' . $string_one;
// echo $string_one;

$isReady = true;
// var_dump($isReady);
$isReady = false;
// var_dump($isReady);

var_dump(1 + "2");

$a = 10;
$b = "10";

// var_dump($a == $b);
// var_dump($a === $b);

// var_dump($string_one === 'Learning to display "Hello Raj Bedi!" to the screen.');
if ($string_one === 'Learning to display "Hello Raj Bedi!" to the screen.') {
    echo 'the values match';
} else {
    echo 'the values do not match';
}
?>

