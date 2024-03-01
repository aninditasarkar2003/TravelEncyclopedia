<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'travelencyclopedia';

$conn = mysqli_connect($hostname , $username, $password, $dbname);



if(!$conn){
	echo "error" .mysqli_error($conn);
}


?>