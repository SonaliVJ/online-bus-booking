<?php

$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "";
$dbname = "busbooking_ezfare";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
else{
	//echo "connected";//
}
?>