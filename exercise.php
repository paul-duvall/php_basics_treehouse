<?php
// Prints out a different coding exercise depending on the day of the week

// store each exercise in a string variable
$exercise1 = 'Display "Hello World!"';
$exercise2 = 'Convert pounds to kilograms';
$exercise3 = 'Convert kilograms to pounds';
$exercise4 = 'Convert miles to kilometers';
$exercise5 = 'Convert kilometers to miles';
$exercise6 = 'Month long string of the day';
$exercise7 = 'String of the day with levels';

// create a variable containing the day of the week
$day = date('N'); // Returns a numeric representation of the day of the week - e.g. 7 for sunday

// use an if statement to test for the day of the week
if ($day == 1) {
  // display the corresponding exercise string
  echo $exercise1 . "\n";
} elseif ($day == 2) {
  echo $exercise2 . "\n";
} elseif ($day == 3) {
  echo $exercise3 . "\n";
} elseif ($day == 4) {
  echo $exercise4 . "\n";
} elseif ($day == 5) {
  echo $exercise5 . "\n";
} elseif ($day == 6) {
  echo $exercise6 . "\n";
} elseif ($day == 7) {
  echo $exercise7 . "\n";
}

?>