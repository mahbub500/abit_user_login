<?php 

/**
 * Database Class
 */
class Database {

	private $servername = "localhost";
	private $username 	= "root";
	private $password 	= "337338";
	private $dbname 	= "abit.wp";
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

