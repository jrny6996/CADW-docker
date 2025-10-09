<?php
session_start();

include "include/db_connect.php";

//random user
if (!isset($_SESSION['user_id'])) {
	$_SESSION['user_id'] = rand(1000, 9999);
}
$user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html>

<head>
	<title>Feedback </title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<h1>Feedback App</h1>
	<div class="form-container">

		<form action="submit.php" method="POST">
			<label>Name* </label> <input type="text" name="name" id="name" required placeholder="John Doe">
			<label>Message* </label> <textarea name="message" id="message" required
				placeholder="I love panda"></textarea>
			<button type="submit">Submit Feedback</button>
		</form>
	</div>
	


</body>

</html>