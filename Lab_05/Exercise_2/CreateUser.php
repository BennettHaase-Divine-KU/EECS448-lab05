<html>
<head></head>
<body>

<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$userID=$_POST["UserID"];
if($userID == ""){
	echo "ERROR User name cannot be blank<br>";
	exit();
}
$mysqli = new mysqli("mysql.eecs.ku.edu", "b450h626", "wu4phei3", "b450h626");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "INSERT INTO `Users`(`user_id`) VALUES ('{$userID}');";
if($mysqli->query($query)){
	echo "User created";
}
else{
	 echo "Error User already exsists";
}


$mysqli->close();
?>
<form action="./CreateUser.html">
    <input type="submit" value="Back" />
</form>
</body>
</html>