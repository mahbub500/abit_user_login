<?php 
include( 'inc/Header.php' );
include( 'lib/User' );

$users = new User();
$users->logout();

// if ( isset( $_POST['logout'] ) ) {
// }

