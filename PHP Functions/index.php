<?php 

function hello($arr) {
    if(is_array($arr)) {
        foreach($arr as $name) {
            echo "Hello, $name, How's it going!<br>";
        }
    } else {
        echo "Hello, friends!";
    }
}   

$names = array(
    "John",
    "Jane",
    "Bob"
);
hello($names);

// $current_user = 'Mike';

// function is_mike() {
//     global $current_user;
//     if ($current_user == 'Mike') {
//         echo "You are Mike!";
//     } else {
//         echo "You are not Mike!";
//     }
// }

// is_mike();

?>