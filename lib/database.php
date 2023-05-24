<?php 

/**
 * Database Class
 */
class Database {

	private $servername = "localhost";
	private $username 	= "root";
	private $password 	= "337338";
	private $dbname 	= "abit.wp";
	
	public function __construct()
	{

		$con = new mysqli( $servername, $username, $password, $dbname );
		// Check connection
		if ( $conn->connect_error ) {
		  die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully";	
	}
}

// $db = new Database();

