<?php

// ***********************************************************************************
// Basic function
// ***********************************************************************************

function hello(){
  echo 'Hello, World!';
}

//hello();


// ***********************************************************************************
// Function that uses a global variable
// ***********************************************************************************

$current_user = 'Mike';

// Note that the global variable needs to be announced within the function using global

function is_mike(){
  global $current_user;
  if($current_user == 'Mike'){
    echo 'It is Mike';    
  } else {
    echo 'Nope, it is not Mike';
  }
}

//is_mike();


// ***********************************************************************************
// A function with an argument passed in
// ***********************************************************************************

function hello2($name){
  echo "Hello, $name, how's it going?";
}

//hello2('Mike');


// ***********************************************************************************
// A function with an array passed in
// ***********************************************************************************

function hello3($arr){
  // Check if the argument is an array
  if(is_array($arr)){
    // Loop through array with foreach
    foreach($arr as $name){
      echo "Hello, $name, how's it going?<br>";
    }
  } else {
    // If not an array, print the following
    echo 'Hello, friends!';
  }
}

$names = array(
  'Hampton',
  'Mike',
  'Charley',
);

//hello3($names);

// ***********************************************************************************
// A function with a default argument
// ***********************************************************************************

// Here, if nothing is passed in for the title variable, a default has been set

function get_info($name, $title = 'friend') {
  echo "$name has arrived, they are with us as a $title";
}

//get_info('Mike');


// ***********************************************************************************
// A function with a default argument set to NULL
// ***********************************************************************************

// Here, if nothing is passed in for the title variable, a default has been set to NULL, enabling the use of an else statement with an alternative action

function get_info2($name, $title = null) {
  if($title){
    echo "$name has arrived, they are with us as a $title";
  } else {
    echo "$name has arrived. Welcome!";
  }
}

get_info2('Mike');
?>
