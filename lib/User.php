<?php 

include_once( 'Session.php' );
include( './database.php' );

/**
 * User Class
 */
class User {
	
	private $db;
	public $pdo;

	public function __construct(){
		// $this->db = new Database();
		// $this->dbConnection();
	}

	public function dbConnection (){
		$servername = "localhost";
		$username 	= "root";
		$password 	= "337338";
		
		try {
		  $conn = new PDO("mysql:host=$servername;dbname=abit.wp", $username, $password);
		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $this->$pdo = $conn;
		  echo "Connected successfully";
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}
	}

	public function userRegistration( $data ){

		$servername = "localhost";
		$username 	= "root";
		$password 	= "337338";
		$dbname 	= "abit.wp";

		// Create a new mysqli instance
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check the connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}


		// $name 		= $data['name'];
		// $email 		= $data['email'];
		// $status 	= $data['editor_status']; 
		// $password 	= md5( $data['Password'] );

		// if ( $name == '' || $email == '' || $status == '' || $password == '') {
		// 	$msg = "<div class='alert alert-danger'>Field must Not Be Empty </div>";
		// 	return $msg;
		// }

		// Construct the SQL SELECT statement
		$sql = "SELECT * FROM `user`";

		// Execute the query
		$result = $conn->query($sql);

		// Check if any rows are returned
		if ($result->num_rows > 0) {
		    // Process and display the data
		    while ($row = $result->fetch_assoc()) {
		    	$user_list =  sprintf( "Name is %s And email is : %s <br>" , $row['name'], $row['email'] );		      
		    }
		} else {
		    echo "No data found.";
		}

		// Close the database connection
		$conn->close();

		return $user_list;
	}

	public function emailCheck( $email ){
		$sql = "SELECT 'email' FROM 'user' WHERE email = $email ";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			return true;
		}
		else{
			return false;
		}

	}
}
