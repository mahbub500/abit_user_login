<?php 

/**
 * Session Class
 */
class Session {

	private $username;
    public $loggedIn = false;

	function __construct()
	{
		session_start();
        if (isset( $_SESSION['username']) ) {
            $this->username = $_SESSION['username'];
            $this->loggedIn = true;
        }
	}
}