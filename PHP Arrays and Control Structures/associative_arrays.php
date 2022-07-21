<?php

$iceCream = array(
    'Alena' => 'Black Cherry', 
    'Treasure' => 'Chocolate', 
    'Dave McFarland' => 'Cookies and Cream', 
    'Rialle' => 'Strawberry');

$iceCream['Alena'] = 'Pistachio';
$iceCream['Dave Thomas'] = 'Cookies and Cream';
$iceCream[] = 'Vanilla';
// var_dump($iceCream);
$iceCream['Andrew'] = true;
$keys = array(
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd',
)
var_dump($keys);
?>