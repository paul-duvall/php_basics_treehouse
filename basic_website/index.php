<?php 
include("data.php");
include("inc/functions.php");

$pageTitle = "Personal Media Library";
// NB even though there is no section for the index page, the variable must to declared as null to avoid errors
$section = null;

include("inc/header.php"); ?>
		<div class="section catalog random">

			<div class="wrapper">

				<h2>May we suggest something?</h2>
					<ul class="items">
						<?php 
							// Generates an array of the keys of four random items from data.php
							$random = array_rand($catalog,4);
							// Loops through and generates each item on the page using data from the data.php file and a function from functions.php
							foreach($random as $id){
							echo get_item_html($id, $catalog[$id]);
							}
						?>
					</ul>
			</div>

		</div>

<?php include("inc/footer.php"); ?>