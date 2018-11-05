<?php

$task1 = array(
  'title' => 'Laundry',
  'priority' => 2,
  'due' => '',
  'complete' => true,
);

$task2 = array(
  'title' => 'Clean out refridgerator',
  'priority' => 3,
  'due' => '07/07/2019',
  'complete' => false,
);

// Once these arrays are created separately, they can be added to a multi-dimensional array:

$list = array($task1, $task2);
// This line is not neccessary if the individual arrays are declared like this:
// $list[] = array(items in here);
// It is then automatically added to the $list array
// Keys can then be specified for each item in the outer array:
// $list[Task 1];

var_dump($list);

// It is possible to access individual values within one of the nested arrays:

echo $list[0]['title'];

?>