<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/program-07.css">
	<title>Welcome to SELF Processor</title>
</head>
<body>
<?php

$valid = true;

if (empty($_POST["days"])) {
	$days = " ";
	//$valid = false;
} else {
	$days = validate_input($_POST["days"]);
}

if (empty($_POST["months"])) {
	$months = " ";
	//$valid = false;
} else {
	$months = validate_input($_POST["months"]);
}

if (empty($_POST["name"])) {
	$name = "";
	$valid = false;
} else {
	$name = validate_input($_POST["name"]);
}

if (empty($_POST["movie"])) {
	$movie = "";
	$valid = false;
} else {
	$movie = validate_input($_POST["movie"]);
}

if (empty($_POST["food"])) {
	$food = "";
	$valid = false;
} else {
	$food = validate_input($_POST["food"]);
}

if (empty($_POST["season"])) {
	$season = " ";
	//$valid = false;
} else {
	$season = validate_input($_POST["season"]);
}

if (empty($_POST["comments"])) {
	$comments = " ";

} else {
	$comments = validate_input($_POST["comments"]);
}

if (empty($_POST["favcolor"])) {
	$favcolor = " ";
	//$valid = false;
} else {
	$favcolor = validate_input($_POST["favcolor"]);
}

if (empty($_POST["bday"])) {
	$bday = " ";
	//$valid = false;
} else {
	$bday = validate_input($_POST["bday"]);
}

if (empty($_POST["email"])) {
	$email = " ";
	//$valid = false;
} else {
	$email = validate_input($_POST["email"]);
}

if (empty($_POST["week_year"])) {
	$week_year = " ";
	//$valid = false;
} else {
	$week_year = validate_input($_POST["week_year"]);
}

if (empty($_POST["points"])) {
	$points = " ";
	//$valid = false;
} else {
	$points = validate_input($_POST["points"]);
}




function validate_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

Enter a day of the Week<br>
  <input type="text" list="daysOfWeek" name="days" >
  <datalist id="daysOfWeek">
    <option value="Monday">
    <option value="Tuesday">
    <option value="Wednesday">
    <option value="Thursday">
    <option value="Friday">
  </datalist>
  <br>
  Enter a month of the Year<br>
  <input type="text" list="monthsYear" name="months" >
  <datalist id="monthsYear">
    <option value="January">
    <option value="February">
    <option value="March">
    <option value="April">
    <option value="May">
    <option value="June">
    <option value="July">
    <option value="August">
    <option value="September">
    <option value="October">
    <option value="November">
    <option value="December">
  </datalist>
  <br>
  <br>
  Name: <input type="text" name="name" value="<?php echo $name; ?>" > *required<br>
	Favorite Movie: <input type="text" name="movie" value="<?php echo $movie; ?>" > *required<br>
	Favorite Food: <input type="text" name="food" value="<?php echo $food; ?>" > *required<br>
	Favorite Season:<br>
    <input type="radio" name="season" value="Summer" checked="checked" <?php if (isset($_POST['season']) and $_POST['season'] == 'Summer')echo ' checked'; ?>>Summer
    <input type="radio" name="season" value="Spring" <?php if (isset($_POST['season']) and $_POST['season'] == 'Spring')echo ' checked'; ?>>Spring
    <input type="radio" name="season" value="Fall" <?php if (isset($_POST['season']) and $_POST['season'] == 'Fall')echo ' checked'; ?>>Fall
    <input type="radio" name="season" value="Winter" <?php if (isset($_POST['season']) and $_POST['season'] == 'Winter')echo ' checked'; ?>>Winter
    <br>
    <br>
    Comments:<br>
    <textarea rows="4" cols="50" name="comments">
	<?php echo $comments; ?>
	</textarea>
	<br>
	
  	<br>

  	1. Select your favorite color:
  	<input type="color" name="favcolor" value="<?php echo $favcolor; ?>">
  	<br>
  	2. Birthday:
  	<input type="date" name="bday" value="<?php echo $bday; ?>">
  	<br>
  	3. E-mail:
  	<input type="email" name="email" value="<?php echo $email; ?>">
  	<br>
  	4. Select a week:
  	<input type="week" name="week_year" value="<?php echo $week_year; ?>">
  	<br>
  	5. Select a Range:
  	<input type="range" name="points" min="0" max="10" value="<?php echo $points; ?>">
  	<br>
  	<br>
	<input type="submit" name="submit">
  	<br>
  	<br>

</form>
<?php

echo '<a href="index.php">BACK TO INDEX</a>';


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	echo "<h3><strong>PLEASE SUBMIT FORM, THANKS</strong></h3>";
	
} else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $valid == false){

	echo "<h3><strong>PLEASE SUBMIT ALL REQUIRED INFORMATION</strong></h3>";
}else {
	echo "<h3><strong>THANK YOU FOR YOUR SUBMISSION</strong></h3>";
	echo "<h2>YOU ENTERED:</h2>";
	echo "<strong>";
	echo "<br>";
	echo "<br>";
	echo "YOU ENTERED(for DAY): ";
	echo $days;
	echo "<br>YOU ENTERED(for MONTH): ";	
	echo $months;
	echo "<br>";

	echo "<br>";
	
	echo "Name: ";
	echo $name;
	echo "<br>";
	echo "Movie: ";
	echo $movie;
	echo "<br>";
	echo "Food: ";
	echo $food;
	echo "<br>";
	echo "Season: ";
	echo $season;
	echo "<br>";
	echo "Comments: ";
	echo $comments;
	echo "<br>";
	echo "<br>";

	echo "<br>";
	echo "YOUR Color: ";
	echo $favcolor;
	echo "<br>";

	echo "YOUR Birthday: ";
	echo $bday;
	echo "<br>";

	echo "YOUR E-mail: ";
	echo $email;
	echo "<br>";

	echo "YOUR Week: ";
	echo $week_year;
	echo "<br>";

	echo "YOUR Range: ";
	echo $points;
	echo "<br>";
	echo "</strong>";

}

//echo $valid;

?>

	
</body>
</html>