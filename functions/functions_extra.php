<?php

// ***********************************************************************************
// A function that uses the return keyword to generate content for a string
// ***********************************************************************************

function hello($name){
  if($name == 'Mike'){
    return 'Hello, Mike!';
  } else {
    return 'Hello, friend!';
  }
}

$greeting = hello('Dave');

//echo $greeting;


// ***********************************************************************************
// A function that uses an internal array to work with multiple values
// ***********************************************************************************

function add_up2($a, $b){
  $arr = array(
    $a,
    $b,
    $a + $b
  );
  return $arr;
}

$value = add_up2(2, 4);

// Now we are returning an array, print_r can be used to display the contents
  

// Or we can access a particular item within the array
//echo $value[2];


// ***********************************************************************************
// Variable functions - ooooooooooooooooooooh!
// ***********************************************************************************

function answer(){
  return 42;
}

function add_up($a, $b){
  return $a + $b;
}

// Function declared named for the above function, calls that function
// This doesn't output anything, however, as not arguments have been passed in
// (If named answer, this would work and return 42
$func = 'add_up';

// Here a second function is declared referencing the first, enabling us to pass in arguments.
$num = $func(5, 10);
             
//echo $num;


// ***********************************************************************************
// Closures
// ***********************************************************************************

// A variable is declared to access from within the closure
$name = 'Mike';

// A closure is an anonymous function that is capable of accessing variables outside of the function scope
// Note that it ends in a semi-colon
// The use keyword allows us to pass in an existing variable from the global scope
$greet = function() use($name){
  echo "Hello there $name!";
};

$greet();

?>