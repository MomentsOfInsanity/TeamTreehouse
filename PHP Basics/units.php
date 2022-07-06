<?php 
// number in pounds we want to convert to kilograms
$pounds = 140;
// floating point value for the pound to kilogram conversion
$pounds_to_kilograms = 0.45359237;
// use the variables above to calculate pounds to multiplied by the kilogram conversion
$kilograms = $pounds * $pounds_to_kilograms;
// display the pounds to kilograms
echo "pounds is " . $pounds . "kilograms is " . $kilograms;

// nummber in miles we want to convert to kilometers
$miles = 100;
// floating point value for the mile to kilometer conversion
$miles_to_kilometers = 1.60934;
// use the variables above to calculate miles to multiplied by the kilometer conversion
$kilometers = $miles * $miles_to_kilometers;
// display the miles to kilometers
echo $miles . " miles is " . $kilometers . " kilometers.";
?>