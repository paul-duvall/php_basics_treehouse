<?php

// The array is included from a separate document
include 'list.php';


// A foreach loop can access both the key and the value as follows:
foreach($list as $key => $item){
  echo $key . " = " . $item['title'] . "<br />\n";
}

// Here, a foreach loop is used in conjunction with a table to produce the information in the array on a page

echo '<table>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
foreach($list as $item){
  echo '<tr>';
  echo '<td>' . $item['title'] . "</td>\n";
  echo '<td>' . $item['priority'] . "</td>\n";
  echo '<td>' . $item['due'] . "</td>\n";
  echo '<td>';
  if($item['complete']){
    echo 'Yes';
  } else {
    echo 'No';
  }
  echo "</td>\n";
  echo '</tr>';
}
echo '</table>';

// Once these arrays are created separately, they can be added to a multi-dimensional array:

//$list = array($task1, $task2);
// This line is not neccessary if the individual arrays are declared like this:
// $list[] = array(items in here);
// It is then automatically added to the $list array
// Keys can then be specified for each item in the outer array:
// $list[Task 1];

//var_dump($list);

// It is possible to access individual values within one of the nested arrays:

//echo $list[0]['title'];

?>