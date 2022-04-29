<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "lesson";

	// Create connection
	$mysqlicon = new mysqli($servername, $username, $password, $dbname);
	$mysqlicon->set_charset("utf8");
?>