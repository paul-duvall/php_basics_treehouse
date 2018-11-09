<?php 

// This function generates the html code necessary to display an item from the data.php
function get_item_html($id, $item){
  $output = "<li><a href='details.php?id=" . $id . "'><img src='"
        .$item["img"] . "' alt='"
        .$item["title"] . "' />" 
        . "<p>View Details</p>"
        ."</a></li>";
  return $output;
}

// Generates an array of ids for the given category
function array_category($catalog, $category){
  // Declare an empty array to hold keys for given category
  $output = array();

  // Loop through the $catalog, adding item's ids to the array if they match the given category
  foreach ($catalog as $id => $item){
    // Checks to see if the passed in $category matches the category value for the current item from $catelog
    if ($category == null OR strtolower($category) == strtolower($item["category"])) {
      // In order to sort items, a variable is created containing the current item's title
      $sort = $item["title"];
      // ltrim is used to remove the,a or an from the start of any title where these words appear
      $sort = ltrim($sort,"The ");
      $sort = ltrim($sort,"A ");
      $sort = ltrim($sort,"An ");
      // Title of current item is placed in $output array at the position $id
      $output[$id] = $sort;
    }
  }

  // asort is used to sort items in $output alphabetically
  asort($output);
  // return an array of the keys of the $output items
  return array_keys($output);
}

?>