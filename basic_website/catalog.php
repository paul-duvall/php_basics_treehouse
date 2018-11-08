<?php 
include("data.php");
include("inc/functions.php");
// Declare variables for the page title and the section (section variable will be populated by if / if else statements below)
$pageTitle = "Full Catalog";
$section = null;

// This outer if statement checks to see if the URL includes a category and only executes if this is the case
// If this wasn't done, typing in the url without a category would result in errors.
if (isset($_GET["cat"])) {
  // Page title is changed depending on the category included within the URL selected to reach the page
  // E.g."catalog.php?cat=books" Would then display a title of "Books"
  if($_GET["cat"] == "books"){
    $pageTitle = "Books";
    $section ="books";
  } else if ($_GET["cat"] == "movies"){
    $pageTitle = "Movies";
    $section ="movies";
  } else if ($_GET["cat"] == "music"){
    $pageTitle = "Music";
    $section = "music";
  }
}

include("inc/header.php"); ?>

<div class="section catalog page">
  <div class="wrapper">
    <h1><?php echo $pageTitle; ?></h1>

    <ul class="items">
      <?php 
      // Loops through and generates each item on the page using data from the data.php file
      foreach($catalog as $id => $item){
        echo get_item_html($id, $item);
      }
      ?>
    </ul>

  </div>
</div>

<?php include("inc/footer.php"); ?>