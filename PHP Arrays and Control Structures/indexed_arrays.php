<?php 

$learn = array('Conditionals', 'Loops', 'Arrays');
$learn[] = 'Build something awesome!';
array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'HTML', 'CSS');
var_dump($learn);
// var_dump($learn);
// echo $learn[1];
// echo $learn;
echo implode('\n', $learn);
?>