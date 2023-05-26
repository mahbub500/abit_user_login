<?php 

/**
 * Database Class
 */
class Database {

	private $servername = "localhost";
	private $username 	= "root";
	private $password 	= "337338";
	private $dbname 	= "abit.wp";
	public 	$pdo;

	public function __construct(){
		$servername = "localhost";
		$username 	= "root";
		$password 	= "337338";

		try {
		  $conn = new PDO("mysql:host=$servername;dbname=abit.wp", $username, $password);
		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $this->pdo = $conn;
		  echo "Connected successfully";
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
	}

		
}

// $db = new Database();

