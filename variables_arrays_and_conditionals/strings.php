<?php

$name = 'Paul';

// Within double quotes you can include other variables and the value of that variable will be displayed
// You can also use use escape sequences before special characters to make them parse in that location or before letters to have other effects, such as \n, which will return to a new line
$string_one = "Learning to display \"Hello $name!\" to the screen.\n";

// escape sequences do not work on strings formed using single quotes (and variables included will not show the value)

$string_two = 'Learning to display \"Hello $name!\" to the screen.\n';

//echo $string_one;
//echo $string_two;

// Another was strings can be combined...
// variable containing string separated by single line (.) or multiple line (=) concatination operators 

$string_three = 'Learning to display "Hello ' .$name. '!" to the screen.' . "\n";
$string_four = "Oh what a lovely ";
$string_four .="teaparty.\n";

echo $string_three;
echo $string_four;

?>