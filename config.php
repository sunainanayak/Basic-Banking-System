<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Elite_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could'nt connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
