<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/program-07.css">
	<title>Welcome to FORM Processor</title>
</head>
<body>

<?php
echo "<h1>Welcome to HTML5 New Elements Chosen</h1>";

echo "<br>";
echo "YOUR Color: ";
echo $_POST["favcolor"];
echo "<br>";

echo "YOUR Birthday: ";
echo $_POST["bday"];
echo "<br>";

echo "YOUR E-mail: ";
echo $_POST["email"];
echo "<br>";

echo "YOUR Week: ";
echo $_POST["week_year"];
echo "<br>";

echo "YOUR Range: ";
echo $_POST["points"];
echo "<br>";

echo '<h3><a href="index.php">BACK TO INDEX</a></h3>';



?>
</body>
</html>




