<html>
<head></head>

<body>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$mysqli = new mysqli("mysql.eecs.ku.edu", "b450h626", "wu4phei3", "b450h626");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$query = "SELECT * FROM `Users` WHERE 1;";
if($results=$mysqli->query($query)){
	while($row = $results->fetch_assoc()) {
        echo $row["user_id"] . "<br>";
    }}

$mysqli->close();
?>
</body>

</html>