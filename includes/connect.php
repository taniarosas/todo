<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'todo');
//$mysqli->connection_error then we want it to die and have this message
if ($mysqli->connect_error){
	die('Connect Error(' . $mysqli->connect_errno . ')'
		. $mysqli->connect_error);
}
else{
	echo "Connection made";
}
$mysqli->close();
?>