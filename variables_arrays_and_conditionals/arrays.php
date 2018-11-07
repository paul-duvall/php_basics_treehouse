<?php 

// Declare an array
$learn = array('Conditionals', 'arrays', 'loops');

// Add a value to the array
$learn[] = 'Build something awesome!';

// Add some more new values using push()
array_push($learn, 'Functions', 'Forms', 'objects');

// Add multiple values to the start of an array using array_unshift()
array_unshift($learn, 'html', 'css');

// Remove a value from the start using array_shift()
//array_shift($learn);

// When using array_shift, can do other things with the value removed, for example, display it to the user:
//echo 'You removed ' . array_shift($learn) . "\n";

// array_pop() works in the same way, removing values from the end of the array and returning the removed item for use:
//echo 'You removed ' . array_pop($learn) . "\n";

// unset can be used to remove specific values in the array. This will leave the keys related to those values blank:
//unset($learn[1],$learn[2]);

// If the values in your array have gaps, and you are performing a task that requires there to be no gaps between values, you can use the array_values method to reset those values by reassigning the values back to the array:
//$learn = array_values($learn);

// Update a particular element in an array:
$learn[0] = 'Email';

var_dump($learn);
//echo $learn[1];

//echo implode("\n", $learn);

?>