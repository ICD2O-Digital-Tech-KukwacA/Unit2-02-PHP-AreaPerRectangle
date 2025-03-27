// Unit2-02-PHP-AreaPerRectangle
<!DOCTYPE html>
<html lang="en">
	<head>
// This is the metadata
    <meta charset="utf-8">
    <meta name="description" content="My first webpage, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    language = "php7"
    run = "php -S 0.0.0.0:8000 -t ."
    entrypoint = "index.php"

// This is the section for Favicons
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/favicon-16x16.png">
    <link rel="manifest" href="./Favicons/site.webmanifest">
// This is the stylesheet
    <link rel="stylesheet" href="./css/style.css">
    <title>Area & Perimeter of Rectangle in PHP</title>
	</head>
// This section contains the web page content
	<body>
    <h1><?php echo 'Area & Perimeter of a Rectangle'; ?></h1>
		<?php 
			$length = 2;
			$width = 3;
			echo "<p>Length = $length cm<br>Width = $width cm</p>"; ?>		
		<?php 
		 echo "<p>The area of a rectangle with dimensions $length cm x $width cm = " . ($length * $width) . "cm<sup>2</sup></p>";
		?>  
	</body>
</html>