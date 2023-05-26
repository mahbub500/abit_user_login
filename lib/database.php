<?php 

/**
 * Database Class
 */
class Database {

	public $servername 	= "localhost";
	public $username 	= "root";
	public $password 	= "337338";
	public $dbname 		= "abit.wp";
	public 	$db_conn;

	public function __construct(){
		$servername = "localhost";
		$username 	= "root";
		$password 	= "337338";
		$dbname 	= "abit.wp";

		// Create a new mysqli instance
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check the connection
		if ( $conn->connect_error ) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$this->db_conn = $conn;
	}

		
}

// $db = new Database();

