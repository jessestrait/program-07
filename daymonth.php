<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/program-07.css">
	<title>Welcome to FORM Processor</title>
</head>
<body>

<?php
echo "<h1>Welcome to FORM Processor</h1>";

$days = $_GET["days"];
$months = $_GET["months"];

function validate_input ($days,$months) {

	if(isset($_GET['submit'])) {
   		$checkDay = array('Monday','Tuesday', 'Wednesday', 'Thursday','Friday');
   		$checkMonth = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
   		//echo "TESTER";

	if(in_array($_GET['days'], $checkDay) && in_array($_GET['months'], $checkMonth)){
	  	// Code to be execute. 
		echo "<br>";
		echo "YOU ENTERED(for DAY): ";
		echo test_input($days);
		echo "<br>YOU ENTERED(for MONTH): ";
		
		echo test_input($months);
		echo "<br>";
		echo '<a href="index.php">BACK TO INDEX</a>';

		} else{
	   		echo 'Select something from the datalist!';
	   		echo "<br>";
	   		echo '<a href="index.php">BACK TO INDEX</a>';
		}

	 } else{
	   echo 'Select something from the datalist!';
	   echo "<br>";
	   echo '<a href="index.php">BACK TO INDEX</a>';
	 }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

validate_input($days,$months);


?>
</body>
</html>