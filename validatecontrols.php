<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/program-07.css">
	<title>Welcome to Validate Controls</title>
</head>
<body>
<?php

$valid = true;
$nameError = "";
$emailError = "";
$radioError = "";
$submitError = "";
$siteError = "";


if (empty($_POST["name"])) {
	$name = "";
	$valid = false;
} else {
	$name = validate_input($_POST["name"]);

	if (ctype_alpha(str_replace(' ', '', $name)) === false) {
	  $nameError = '<font color="red"> Name must contain letters and spaces only! </font> ';
	  $valid = false;
	}
}

if (empty($_POST["email"])) {
	$email = "";
	$valid = false;
} else {
	$email = validate_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailError = '<font color="red"> Email must be valid! </font> ';
    $valid = false;
   }
}

if (empty($_POST["site"])) {
	$site = "";
	$valid = false;
} else {
	$site = validate_input($_POST["site"]);
	if (!filter_var($site, FILTER_VALIDATE_URL)) {
    $siteError = '<font color="red"> Website must be valid! </font> ';
    $valid = false;
   }
}

if ($_SERVER['REQUEST_METHOD']=='POST' && @$_POST['dev'] == null) {
	$radioError = '<font color="red"> Please Select a radio button</font> ';
	$valid = false;
}else {
	//$dev = $_POST["dev"];
}



function validate_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//pattern="[a-zA-Z\s]*"
?>
<h2>Welcome to Validate Controls</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	
	<strong>Name:</strong> <input type="text" name="name"  value="<?php echo $name; ?>" ><?php echo $nameError?>*required<br>

	<strong>Email:</strong> <input type="text" name="email"  value="<?php echo $email; ?>" ><?php echo $emailError?>*required<br>

	<strong>Website:</strong> <input type="text" name="site"  value="<?php echo $site; ?>" ><?php echo $siteError?>*required<br>

	<h3>Developer Type:</h3> 
 	<input type="radio" name="dev" value="Front End" <?php if (isset($_POST['dev']) and $_POST['dev'] == 'Front End')echo ' checked'; ?>>Front End<br>
 	<input type="radio" name="dev" value="Server Side" <?php if (isset($_POST['dev']) and $_POST['dev'] == 'Server Side')echo ' checked'; ?>>Server Side<br>
 	<input type="radio" name="dev" value="Full Stack" <?php if (isset($_POST['dev']) and $_POST['dev'] == 'Full Stack')echo ' checked'; ?>>Full Stack<br><?php echo $radioError?>
	<br>
	<input type="submit" name="submit">
  	<br>
  	<br>
  	<?php 
  	echo $submitError;
  	echo '<br><a href="index.php">BACK TO INDEX</a><br>';

  	if ($_SERVER['REQUEST_METHOD']=='POST'  && $valid == false) {
	$submitError = '<font color="red"> PLEASE FILL IN ALL FIELDS</font> ';
	echo $submitError;
	} else if ($_SERVER['REQUEST_METHOD']=='POST'  && $valid == true){
		echo "<h4>Thank You for Your Information!</h4>";
		echo "<strong>NAME:</strong> ";
		echo $name;
		echo "<br>";
		echo "<strong>EMAIL:</strong> ";
		echo $email;
		echo "<br>";
		echo "<strong>WEBSITE:</strong> ";
		echo $site;
		echo "<br>";
		echo "<strong>Developer Type:</strong> ";
		echo $_POST["dev"];
		echo "<br>";
	}else if ($valid == false) {
		$submitError = '<font color="red"> PLEASE FILL IN ALL FIELDS</font> ';
		//echo $submitError;
	}
  	?>
  	<br>

</form>
</body>
</html>
