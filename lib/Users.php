<?php 

// include( 'Session.php' );
include( 'database.php' );

/**
 * User Class
 */
class User extends Database{

	/*
	 * User Registration
	 */
	public function addUser( $data ){

		$name 		= $data['name'];
		$email 		= $data['email'];
		$status 	= $data['editor_status'];
		$password 	= md5( $data['password'] );

		if ( $name == '' || $email == '' || $status == '' || $password == '') {
			$msg = "<div class='alert alert-danger'>Field must Not Be Empty </div>";
			return $msg;
		}
		
		$sql 		= "INSERT INTO `user` (`id`, `name`, `email`, `status`, `password`) VALUES (NULL, '$name', '$email', '$status', '$password'); ";
		$result 	= $this->con->query( $sql );

		if ( $result ) {
			$msg = "<div class='alert alert-success'>Data Inserted</div>";
			return $msg;
			header("Location: ../ragistration.php");
		}
		else{
			echo "Error";
		}
	}

	/*
	 * User List
	 */
	public function UserList(){
		$sql 		= "SELECT * FROM `user`";
		$result 	= $this->con->query( $sql );

		if ( $result ) {
			return $result;
		}
		elseif( $result == "" ){
			$msg = "<div class='alert alert-danger'><strong>Error !</strong> No Data Found</div>";
			return $msg;
		}
		else{
			$msg = "<div class='alert alert-danger'> <strong>Error !</strong> Some Things Wrong</div>";
			return $msg;
		}
	}

	/*
	 * User List
	 */
	public function deleteUser( $data ){
		$delete_id 	= $data['delete_id'];
		$sql 		= "DELETE FROM `user` WHERE `user`.`id` = '$delete_id'";
		$result 	= $this->con->query( $sql );

		if ( $result ) {
			$msg = "<div class='alert alert-success'><strong>Success !</strong> User Removed</div>";
			// return $sql;
			header("Location: /user_list.php");
		}
	}

	/*
	 * User Login
	 */
	public function login( $data ){

		$email 		= $data['email'] ;
		$password 	= md5 ( $data['password'] ) ;
		$sql 		= " SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password' ";
		$result 	= $this->con->query( $sql );

		if ( $result->num_rows > 0) {

			foreach ( $result as $value ) {
				$cookie_name 	= "user_id";
				$cookie_value 	= $value['id'];
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			}			

			header("Location: user_list.php");

			// return $result;
		}
		elseif ( $result->num_rows == 0 ) {
			$msg = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
					  <strong>Hi Dear !</strong> You should check Your Email and Password.
					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					    <span aria-hidden='true'>&times;</span>
					  </button>
					</div>";
			return $msg;
		}
	}

	/*
	 * User Logout
	 */
	public function logout(){
		setcookie("user_id", "", time() - 3600);
		header("Location: index.php");
	}

	/*
	 * User IsAdmin
	 */
	public function isAdmin(){

		if ( isset( $_COOKIE['user_id'] ) ) {
			$User_id 	= $_COOKIE['user_id'];
			$sql 		= " SELECT * FROM `user` WHERE `id` = '$User_id' ";
			$result 	= $this->con->query( $sql );

			if ( $result->num_rows > 0) {

			foreach ( $result as $value ) {
				if ( $value['status'] == 2 ) {
					return true;
				}
				else{
					return false;
				}
			}			
		}
			
		}
	}

}
