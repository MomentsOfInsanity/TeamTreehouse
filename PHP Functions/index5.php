<?php

$names = array(
    'Mike' => 'Frog',
    'John' => 'Teacher',
    'Jane' => 'Teacher',
);

//foreach (array_keys($names) as $name) {
// echo "hello, $name</br>";
//}

function print_info($value, $key) {
    echo "Hello, $key. You are a $value.</br>";
}

array_walk($names, 'print_info');

?>