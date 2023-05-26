<?php 

include_once( 'Session.php' );
include( 'database.php' );

/**
 * User Class
 */
class User {
	
	private $db;

	public function __construct(){
		$this->db = new Database();
	}

	public function userRegistration( $data ){	

		$name 		= $data['name'];
		$email 		= $data['email'];
		$status 	= $data['editor_status']; 
		$password 	= md5( $data['Password'] );

		if ( $name == '' || $email == '' || $status == '' || $password == '') {
			$msg = "<div class='alert alert-danger'>Field Must Not Be Empty </div>";
			return $msg;
		}

		// Construct the SQL SELECT statement
		$sql = "INSERT INTO user (id, name, email, status, password, date) VALUES (NULL, :name, :email, :status, :password, date() )";

		// Execute the query
		$query = $this->db->pdo->prepare($sql);
		// $query->bindValue( ':name', $name );
		// $query->bindValue( ':email', $email );
		// $query->bindValue( ':status', $status );
		// $query->bindValue( ':password', $password );
		// $result = $query->execute();

		// if ( $result ) {
		// 	$msg = "<div class='alert alert-success'>Success ! </div>";
		// 	return $msg;
		// } else {
		//    	$msg = "<div class='alert alert-danger'>Error !</div>";
		// 	return $msg;
		// }

		// // Close the database connection
		// $conn->close();

		return $query;
	}

	public function users(){

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

		// Construct the SQL SELECT statement
		$sql = "SELECT  * FROM `user`";

		// Execute the query
		$result = $conn->query($sql);

		$user_list = [];

		// Check if any rows are returned
		if ($result->num_rows > 0) {
		    // Process and display the data
		    while ( $row = $result->fetch_assoc() ) {
		    	// $user_list =  sprintf( "Name is %s And email is : %s <br>" , $row['name'], $row['email'] );

		    	$user_list[] = $row;	      
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
