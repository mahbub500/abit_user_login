<?php

namespace Abit;
use Abit\Lib\Database;
// use Abit\Lib;

class User{


	private static $_instance;

	
	/**
	 * Includes files
	 * 
	 * @access private
	 * 
	 * @uses composer
	 * @uses psr-4
	 */
	// private function include() {
	// 	require_once( dirname( __FILE__ ) . '/vendor/autoload.php' );
	// }

	public static function get_users(){
		$users = [ 'Mahbub', 'Maruf', 'Mesbah' ];
		return $users;
	}

	/*
	 * User Login
	 */
	public function login( $data ){
		$connection = new Database();

		$email 		= $data['email'] ;
		$password 	= md5 ( $data['password'] ) ;
		$sql 		= " SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password' ";
		$result 	= $connection->con->query( $sql );

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
}
