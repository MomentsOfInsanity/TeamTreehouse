<?php

$name = 'Mike';
$greet = function() use ($name) {
    return "Hello, $name!";
};

$greet();

?>