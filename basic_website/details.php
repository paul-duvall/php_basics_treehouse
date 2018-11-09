<?php 
include("data.php");
include("inc/functions.php");

// isset() and $_GET[] used to check if there is an id present in the url
if (isset($_GET["id"])) {
  // The id from the url is assigned to a variable
  $id = $_GET["id"];
  // If statement used to check if the id is present in the catalog
  if (isset($catalog[$id])){
    // Variable declared holding the current item
    $item = $catalog[$id];
  }
}

// Checks to see if $item has been set and, if it has not, redirects page to catalog.php
if (!isset($item)){
  header("location:catalog.php");
  exit;
}

// Declare variables for the page title and the section (section variable will be populated by if / if else statements below)
$pageTitle = $item["title"];
$section = null;

include("inc/header.php"); ?>

<div class="section page">
  <div class="wrapper">

    <div class="breadcrumbs">
      <a href="catalog.php">Full Catalog</a>
      &gt; <a href="catalog.php?cat=<?php echo strtolower($item['category']); ?>"><?php echo $item['category']; ?></a>
      &gt; <?php echo $item['title']; ?></a>
    </div>

    <div class="media-picture">  
      <span>
        <img src="<?php echo $item['img']?>" alt="<?php echo $item['title']; ?>">    
      </span>
    </div>
    <div class="media-details">
      <h1><?php echo $item['title']; ?></h1>
      <table>
        <tr>
          <th>Category</th>
          <td><?php echo $item['category']; ?></td>
        </tr>
        <tr>
          <th>Genre</th>
          <td><?php echo $item['genre']; ?></td>
        </tr>
        <tr>
          <th>Format</th>
          <td><?php echo $item['format']; ?></td>
        </tr>
        <tr>
          <th>Year</th>
          <td><?php echo $item['year']; ?></td>
        </tr>
        <!-- Now add elements that are unique to each category -->
        <?php if(strtolower($item['category']) == "books") { ?>
          <!-- Elements for book items -->
          <tr>
            <th>Authors</th>
            <td><?php echo implode(", ", $item['authors']); ?></td>
          </tr>
          <tr>
            <th>Publisher</th>
            <td><?php echo $item['publisher']; ?></td>
          </tr>
          <tr>
            <th>ISBN</th>
            <td><?php echo $item['isbn']; ?></td>
          </tr>
        <?php } else if(strtolower($item['category']) == "movies") { ?>
          <!-- Elements for movie items -->
          <tr>
            <th>Director</th>
            <td><?php echo $item['director']; ?></td>
          </tr>
          <tr>
            <th>Writers</th>
            <td><?php echo implode(", ", $item['writers']); ?></td>
          </tr>
          <tr>
            <th>Stars</th>
            <td><?php echo implode(", ", $item['stars']); ?></td>
          </tr>
          <?php } else if(strtolower($item['category']) == "music") { ?>
            <!-- Elements for music items -->
          <tr>
            <th>Artists</th>
            <td><?php echo $item['artist']; ?></td>
          </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</div>