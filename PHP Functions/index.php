<?php 

function get_info($name, $title = Null) {
    if ($title) {
        echo "$name has arrived, they are with us as a $title";
    } else {
        echo "$name had arrived, welcome!";
    }
}

get_info('Mike', 'frog');

// function hello($arr) {
//     if(is_array($arr)) {
//         foreach($arr as $name) {
//             echo "Hello, $name, How's it going!<br>";
//         }
//     } else {
//         echo "Hello, friends!";
//     }
// }   

// $names = array(
//     "John",
//     "Jane",
//     "Bob"
// );
// hello($names);

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