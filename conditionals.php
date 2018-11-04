<?php 

$a = 10;
$b = 5;

//if ($a == $b){
//  echo 'Values are equal' . "\n";
//} elseif ($a < $b){
//  echo 'A is less than B' . "\n";
//} elseif ($a > $b){
//  echo 'A is greater than B' . "\n";
//} else {
//  echo 'Values are not equal' . "\n";
//}

// Using an if statement to tell a player if they have passed a level
// Pass if they score 60

$score = 22;
//if($score >= 59){
//  echo 'You completed the level!' . "\n";
//} elseif($score <= 30 ){
//  echo 'You should practice a bit more.' . "\n";
//}
//else {
//  echo 'Please try again' . "\n";
//}

// Also use conditionals to check for non-equality

//if($a == $b) {
//  // Checks to see if a and b are equal
//  echo 'Values are equal';
//} elseif($a <> $b) {
//  // The <> checks to see if a and b are tell than or greater than, e.g. not equal
//  echo 'Values are NOT equal';
//}

//if($a != $b){
//  echo 'Values are not equal';
//}

// Nested if statements can check for multiple conditions
// Here used to check if a number is within a range

$num = 900;

//if($num >= 10){
//  if($num <= 1000){
//    echo 'Your number is within the range' . "\n";
//  } else {
//    echo 'Your number is NOT within the range' . "\n";
//  } 
//}

// Instead use logical operators to combine conditionals
// && means and

//if($num >= 10 && $num <=1000){
//    echo 'Your number is within the range.';
//} else {
//    echo 'Your number is NOT within the range.';
//}

// || means or

if ($num == 10 || is_string($num)){
  echo '10 or string';
} else {
  echo 'NOT 10 or string';
}

?>