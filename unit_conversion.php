<?php
// A unit conversion tool for converting pounds and kilograms, miles and kilometers, farenheigt and celsius

//  number in pounds that we want to convert to kilograms
$pounds = 140; // Set to the amount of pounds you wish to convert
  
// floating point value for the pound to kilgram conversion
$lb_to_kg = 0.43592;

// variables above to calculate pounds multiplied by the kilgram conversion
$kilograms = $pounds * $lb_to_kg;

// display the pounds to kilograms
// Uncomment to show result
//echo "Weight: ";
//echo $pounds;
//echo " lb = ";
//echo $kilograms;
//echo " kg";

// number in miles we want to convert to kilometers
$miles = 2.5;
// floating point value for the mile to kilometer conversion
$mile_to_km = 1.60934;
// use the variable above to calculate miles multiplied by the kilmeter conversion
$kilometers = $miles * $mile_to_km;

// display miles to kilometers
// Uncomment to show result
//echo 'Distance: ';
//echo $miles;
//echo ' miles = ';
//echo $kilometers;
//echo ' km';

//  number in farenheit that we want to convert to celsius
$fahrenheit = 53; // Set to the amount of fahrenheit you wish to convert
  
// floating point value for the farenheit to celsius conversion
//$lb_to_kg = 0.43592;

// use variable above to calculate fahrenheit subtract 32 divided by 1.8
$celsius = ($fahrenheit - 32) / 1.8;

// display the fahrenheit to celsius
// Uncomment to show result
//echo 'Fahrenheit: ';
//echo $fahrenheit;
//echo ' degrees f = ';
//echo $celsius;
//echo ' degrees c';

?>