<?php 

function hello() {
    echo "Hello World!";
}   

$current_user = 'Mike';

function is_mike() {
    global $current_user;
    if ($current_user == 'Mike') {
        echo "You are Mike!";
    } else {
        echo "You are not Mike!";
    }
}

is_mike();

?>