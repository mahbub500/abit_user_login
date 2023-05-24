<?php 

include_once( 'Session.php' );
include( './database.php' );

/**
 * User Class
 */
class User {
	
	private $db;

	public function __construct(){
		$this->db = new Database();
	}

	public function userRegistration(  ){
		// $name 		= $data['name'];
		// $email 		= $data['email'];
		// $status 	= $data['editor_status'];

		// $password 	= md5( $data['Password'] );

		// $email_check = $this->emailCheck( $email );

		// if ( $name == '' || $email == '' || $status == '' || $password == '' ) {
		// 	$msg = "<div class='alert alert-danger'> <strong>Error ! </strong> Field Must Not Be Empty </div>";
		// 	return $msg;
		// }

		// if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) === false ) {
		// 	$msg = "<div class='alert alert-danger'> <strong>Error ! </strong>The Email address is not valid</div>";
		// 	return $msg;
		// }

		// if( $email_check == true ){
		// 	$msg = "<div class='alert alert-danger'> <strong>Error ! </strong>Duplicate Email</div>";
		// 	return $msg;
		// }

		 $sql = "INSERT INTO 'user' ( 'name', 'email', 'status', 'password', 'date' ) VALUES ( 'rahil', 'rahil@gmail.com', '1', '1234', '2023-05-03') " ;
		 $result = $conn->query( $sql );
			if ($result->num_rows > 0) {
				$msg = "<div class='alert alert-success'> <strong>Success ! </strong>Data Inserted</div>";
				return $msg;
			}
			else{
				$msg = "<div class='alert alert-danger'> <strong>Error ! </strong>Data Not Inserted</div>";
				return $msg;
			}

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
