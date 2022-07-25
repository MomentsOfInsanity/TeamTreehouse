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

function add_up($a,$b) {
    $arr = array(
        $a,
        $b,
        $a + $b
    );
    return $arr;
    
}

$value = add_up(5,10);
echo $value[2];

?>