<!DOCTYPE html>
<html>
<head>
<title>Sample Data </title>
</head>
<body>
<?php
include "include/db_connect.php";
$sampledata="SELECT * FROM feedback";
$result= mysqli_query($conn, $sampledata);
if (!$result) {
	die("Query failed: " . mysqli_error($conn));
}
echo "Data from feedback entity";
while ($row=mysqli_fetch_assoc($result)) {
	echo $row["name"]. ", ";
	echo $row["message"]. "<br>";
}
//close the connection
mysqli_close($conn);
?>
</body>
</html>