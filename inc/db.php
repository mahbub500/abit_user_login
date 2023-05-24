<?php 

namspace ABIT;
/**
 * Connect Database
 */
class Database {
	
	function __construct()
	{
		$servername = "localhost";
		$username 	= "root";
		$password 	= "337338";
		$dbname 	= "abit.wp";

		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully";		
	}
}

echo $Database = new Database();