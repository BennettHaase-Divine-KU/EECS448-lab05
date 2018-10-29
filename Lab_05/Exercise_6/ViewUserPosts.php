<html>
<head></head>

<body>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$mysqli = new mysqli("mysql.eecs.ku.edu", "b450h626", "wu4phei3", "b450h626");
$name=$_POST["users"];
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$query = "SELECT * FROM `Posts` WHERE `author_id`='$name';";
if($results=$mysqli->query($query)){
	echo "id &#9 content<br>";
	while($row = $results->fetch_assoc()) {
        echo $row["post_id"]."&#9".$row["content"] . "<br>";
    }}

$mysqli->close();
?>
</body>

</html>