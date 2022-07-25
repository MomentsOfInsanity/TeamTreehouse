<?php

// function hello($name) {
//     if($name == 'Mike') {
//         return "Hello, World!";
//     }
//     else {
//         return "Hello, stranger!";
//     }
// }

// $greeting = hello();

// echo $greeting;

function answer() {
    return 42;
}

function add_up($a,$b) {
    return $a + $b;
}

$func = 'add_up';
$result = $func(5,10);
echo $result;

// $value = add_up(5,10);
// echo $value[2];

?>