<?php
 header('Content-Type: text/html; charset=iso-8859-1');
 //include 'daymonth.php';
 ?>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="css/program-07.css">
		<title>
			ITSE 2302 Program-07: Jesse Strait
		</title>
	</head>
<body>
<h1>ITSE 2302 Program-07: Jesse Strait</h1>
<hr>
<p>#1., #2, #3. Days of Weeks, and monthes of Year.</p>
<form action="daymonth.php" method="get" >
	Enter a day of the Week<br>
  <input type="text" list="daysOfWeek" name="days" required>
  <datalist id="daysOfWeek">
    <option value="Monday">
    <option value="Tuesday">
    <option value="Wednesday">
    <option value="Thursday">
    <option value="Friday">
  </datalist>
  <br>
  Enter a month of the Year<br>
  <input type="text" list="monthsYear" name="months" required>
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
  <input type="submit" name="submit">
  <br>
  <a href="selfprocessor.php">#8. Self Processor</a>
  <br>
  <a href="validatecontrols.php">#9. Validate Controls</a>
</form>
<hr>
<p>#4., #5. Favorites!</p>
<form action="favorites.php" method="post">
	Name: <input type="text" name="name" required><br>
	Favorite Movie: <input type="text" name="movie" required><br>
	Favorite Food: <input type="text" name="food" required><br>
	Favorite Season:<br>
    <input type="radio" name="season" value="Summer" checked="checked">Summer
    <input type="radio" name="season" value="Spring">Spring
    <input type="radio" name="season" value="Fall">Fall
    <input type="radio" name="season" value="Winter">Winter
    <br>
    <br>
    Comments:<br>
    <textarea rows="4" cols="50" name="comments">
	Comments are Optional
	</textarea>
	<br>
	<input type="submit" name="submit">
  	<br>
</form>
<hr>
<p>#6., #7. New HTML5 Elements!</p>
<form action="html.php" method="post">
	1. Select your favorite color:
  	<input type="color" name="favcolor">
  	<br>
  	2. Birthday:
  	<input type="date" name="bday">
  	<br>
  	3. E-mail:
  	<input type="email" name="email" placeholder="name@name.com" required>
  	<br>
  	4. Select a week:
  	<input type="week" name="week_year">
  	<br>
  	5. Select a Range:
  	<input type="range" name="points" min="0" max="10" step="3">
  	<br>
	<input type="submit" name="submit">
  	<br>
</form>
<hr>
</body>
</html>
