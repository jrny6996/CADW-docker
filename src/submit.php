<?php
include "include/db_connect.php";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$name=trim($_POST["name"]);
	$message=trim($_POST["message"]);

	if ($name !="" && $message !="") {
		$stmt=$conn->prepare("INSERT INTO feedback (name, message) VALUES(?,?)");
		$stmt->bind_param("ss", $name, $message);
		$stmt->execute();
		$stmt->close();
	}
}
?>