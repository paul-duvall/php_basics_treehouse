<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="./">Personal Media Library</a></h1>

			<ul class="nav">
                <!-- The is statements here add the class 'on' to underline the header link for the current page.
                If statements use the variable $section to determine current page, which is defined within catelog.php, suggest.php and index.php  -->
                <li class="books <?php if($section == "books"){echo " on";} ?>"><a href="catalog.php?cat=books">Books</a></li>
                <li class="movies <?php if($section == "movies"){echo " on";} ?>"><a href="catalog.php?cat=movies">Movies</a></li>
                <li class="music <?php if($section == "music"){echo " on";} ?>"><a href="catalog.php?cat=music">Music</a></li>
                <li class="suggest <?php if($section == "suggest"){echo " on";} ?>"><a href="suggest.php">Suggest</a></li>
            </ul>

		</div>

	</div>

	<div id="content">