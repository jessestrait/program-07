<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/program-07.css">
	<title>Welcome to FORM Processor</title>
</head>
<body>

<?php


echo "<h1>Welcome to FORM Processor</h1>";


$name = $_POST["name"];
$movie = $_POST["movie"];
$food = $_POST["food"];
$season = $_POST["season"];
$comments = $_POST["comments"];

function validate_input ($name,$movie,$food,$season,$comments) {

	echo "<br>";
	echo "<h2>YOU ENTERED:</h2>";
	echo "<br>";
	echo "Name: ";
	echo test_input($name);
	echo "<br>";
	echo "Movie: ";
	echo test_input($movie);
	echo "<br>";
	echo "Food: ";
	echo test_input($food);
	echo "<br>";
	echo "Season: ";
	echo test_input($season);
	echo "<br>";
	echo "Comments: ";
	echo test_input($comments);
	echo "<br>";
	echo "<br>";
	echo '<h3><a href="index.php">BACK TO INDEX</a></h3>';

}







function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


validate_input ($name,$movie,$food,$season,$comments);
?>
</body>
</html>
