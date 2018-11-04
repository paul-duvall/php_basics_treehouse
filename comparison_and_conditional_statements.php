<?php

// Can add an integer to a string containing an integer
//var_dump(1 + "2");

// Similarly can compare an integer and a string containing that value and will return true
$a = 10;
$b = '10';

//var_dump($a == $b);

// Can check to see if both value and variable type are equal using ===
//var_dump($a === $b);

// Can also compare strings
$c = 'teaparty';
$d = 'lovely';

// Will return false
//var_dump($c == $d);
// Will return true
//var_dump($c != $d);

// If statements can be used to test conditions
// elseif statements can be used to check alternative conditions 
// else statements use for other situations
if($c == 'teapartys') {
  echo "The values match\n";
} elseif ($c == "") {
  echo "The string was empty.\n";
} else {
  echo "The values do not match.\n";
}

// Demo that prints out information about two student's GPAs:

$studentOneName = 'Dave';
$studentOneGPA = 3.8;

$studentTwoName = 'Treasure';
$studentTwoGPA = 4.0;

//Place your code below this comment

if($studentOneGPA >= 4.0){
  echo $studentOneName . " made the Honor Roll";
} else {
	echo $studentOneName . " has a GPA of " . $studentOneGPA . "\n";
}

if($studentTwoGPA >= 4.0){
  echo $studentTwoName . " made the Honor Roll";
} else {
	echo $studentTwoName . " has a GPA of " . $studentOneGPA;
}

?>