<?php 
namespace Abit\Lib;
/**
 * Database Class
 */
class Database {

	private $servername = "localhost";
	private $username 	= "root";
	private $password 	= "337338";
	private $dbname 	= "abit.wp";
	// public 	$conection;

	public function __construct(){
				
		$this->con = new \mysqli( $this->servername, $this->username, $this->password, $this->dbname );
		if ( $this->con ) {
			echo "Seccess";
		}
	}

	// public function con(){
	// 	$conection = new \mysqli( $this->servername, $this->username, $this->password, $this->dbname );
	// 	return $conection;
	// }		
}
