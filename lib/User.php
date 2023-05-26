<?php 

// include( 'Session.php' );
include( 'database.php' );

/**
 * User Class
 */
class User extends Database{

	// private $servername = "localhost";
	// private $username 	= "root";
	// private $password 	= "337338";
	// private $dbname 	= "abit.wp";
	// public $con;

	// public function __construct(){
				
	// 	$this->con = new mysqli( $this->servername, $this->username, $this->password, $this->dbname );
	// 	if ( $this->con ) {
	// 		echo "Seccess";
	// 	}
	// }

	

	// Add User
	public function addUser( $data ){

		$name 		= $data['name'];
		$email 		= $data['email'];
		$status 	= $data['editor_status'];
		$password 	= md5( $data['password'] );

		// $sql 		= "INSERT INTO `user`(`name`,`email`, `status`,`password`, ) VALUES ( '$name', '$email', '$status', '$password', ) ";
		$sql 		= "INSERT INTO `user` (`id`, `name`, `email`, `status`, `password`) VALUES (NULL, '$name', '$email', '$status', '$password'); ";
		$result 	= $this->con->query( $sql );

		if ( $result ) {
			echo "Data Insert Successfully";
			header("Location: ../index.php");
		}
		else{
			echo "Error";
		}
	}
}
