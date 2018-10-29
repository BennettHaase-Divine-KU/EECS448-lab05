<html>
<head></head>
<body>

<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$post=$_POST["Post"];
$userID=$_POST["UserID"];
if($userID == ""){
	echo "ERROR User name cannot be blank<br>";
	exit();
}
if($post == ""){
	echo "ERROR Post cannot be blank<br>";
	exit();
}
$mysqli = new mysqli("mysql.eecs.ku.edu", "b450h626", "wu4phei3", "b450h626");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$search = "SELECT * FROM `Users` WHERE user_id = '$userID';";
if(mysqli_num_rows($mysqli->query($search))>0){
	$query = "INSERT INTO  `b450h626`.`Posts` (`post_id` ,`content` ,`author_id`)VALUES (NULL ,  '$post',  '$userID');";
	if($mysqli->query($query)){
		echo "Post Added";
	}
	else{
		echo "Error adding post";
	}
}
else{
	echo "User not found";
}
/*
mysql_num_rows($query)
$query = "INSERT INTO `b450h626`.`Posts` (`post_id` ,`content` ,`author_id`) VALUES (NULL,'{$Posts}','{$userID}');";
if($mysqli->query($query) === TRUE){
	echo "User created";
}
else{
	 echo "Error: " . $query . "<br>" . $mysqli->error;
}
*/

$mysqli->close();
?>
<form action="./CreatePosts.html">
    <input type="submit" value="Back" />
</form>
</body>
</html>