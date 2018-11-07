<?php

  $iceCream = array('Paul' => 'Chocolate',
                    'Lexi' => 'Coffee',
                    'Russell' => 'vanilla');

// ksort() allows us to sort alphabetically by key
ksort($iceCream);

// NB You wouldn't want to use sort() in any situation here as it would reindex the values, removing the names and assigning numbers

  var_dump($iceCream);

  // We can now access specific values by using the name of that value (rather than a number):

//  echo "Paul's favourite ice-cream is " . $iceCream['Paul'] . "\n";

// Consider some other possible keys:
// These will all result in a key of 1 and therefore only the final entry is displayed in the array

$keys = array( 
  1 => 'a', 
  '1' => 'b', 
  1.5 => 'c', 
  true => 'd'
  );

//var_dump($keys);
?>