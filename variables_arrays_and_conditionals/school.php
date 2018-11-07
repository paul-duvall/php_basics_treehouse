<?php

// Returns a message to the user, a high school student, that varies depending upon their final grade and which grade (year) they are currently in

// Declare variables for first name, last name, their current grade, their final average (float representing percentage) and a blank string to hold the message body
$firstName = 'Paul';
$lastName = 'Duvall';
$currentGrade = 12;
$finalAverage = .88;
$messageBody = '';

if(!$firstName || !$lastName){
  // Checks to see if a name has been entered
  echo 'Please enter a student name.';
} elseif ($currentGrade < 9 || $currentGrade > 12){
  // Checks to see if the child is high school age
  echo 'This is only for high school students.';
} else {
  if($finalAverage < .70) {
    // Set the message for someone without a passing grade
    $messageBody = 'We look forward to seeing you at summer school, beginning July 1st!';
  } else {
    switch ($currentGrade) {
      // Set a message for someone with a passing grade depending upon what grade they are in
      case 9:
        $messageBody = 'Congratulations on completing your freshman year in High School! We’ll see you on September 1st for the start of your sophomore year!';
        break;
      case 10:
        $messageBody = 'Congratulations on completing your sophomore year in High School! We’ll see you on September 1st for the start of your junior year!';
        break;
      case 11:
        $messageBody = 'Congratulations on completing your junior year in High School! We’ll see you on September 1st for the start of your senior year!';
        break;
      case 12:
        $messageBody = 'Congratulations! You’ve graduated High School! Don’t forget to come back and visit.';
        break;
      default:
        $messageBody = 'Error - Grade level is not 9-12.';
    }
  }
  
  // Print the message to the console
  echo "Dear $firstName $lastName,\n";
  echo $messageBody;
}

?>