<?php

// The array is included from a separate document
include 'list.php';

// $status should be set to true (to display complete tasks), false (to display incomplete tasks) or 'all' to display all
$status = false;
$filter = array();

// A foreach loop can access both the key and the value as follows:
foreach($list as $key => $item){
  if($status === 'all' || $item['complete'] == $status) {
    $filter[] = $key;
  }
}

//echo '<pre>';
//var_dump($filter, $list);
//echo '</pre>';

// Here, a foreach loop is used in conjunction with a table to produce the information in the array on a page

echo '<table>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
foreach($filter as $id){
  echo '<tr>';
  echo '<td>' . $list[$id]['title'] . "</td>\n";
  echo '<td>' . $list[$id]['priority'] . "</td>\n";
  echo '<td>' . $list[$id]['due'] . "</td>\n";
  echo '<td>';
  if($list[$id]['complete']){
    echo 'Yes';
  } else {
    echo 'No';
  }
  echo "</td>\n";
  echo '</tr>';
}
echo '</table>';

// If arrays are created separately, they can be added to a multi-dimensional array:

//$list = array($task1, $task2);
// This line is not neccessary if the individual arrays are declared like this:
// $list[] = array(items in here);
// Each array is then automatically added to the $list array
// Keys can then be specified for each item in the outer array:
// $list[Task 1];

//var_dump($list);

// It is possible to access individual values within one of the nested arrays:

//echo $list[0]['title'];

?>