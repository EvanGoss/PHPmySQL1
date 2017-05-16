<?php
	DEFINE ('DB_USER', 'birdsuser');
	DEFINE ('DB_PASSWORD', 'dCSDC0TMrHvbY0JU');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'birdsdb');

	$dbcon = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error());
	mysqli_set_charset($dbcon, 'utf8');
?>