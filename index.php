<?php 
	// include_once( 'Session.php' );
	include( 'inc/Header.php' );
	include( 'lib/User.php' );

	$users 			= new User();
	if ( isset($_POST['login']) ) {
		$user_login = $users->login( $_POST );
	}	

	if ( isset( $_COOKIE['user_id'] ) ) {
		// print_r( $_COOKIE['user_id'] );
		header("Location: user_list.php");
	}

	// setcookie("user_id", "", time() - 3600);
?>

<div class="row">
    <div class="col-md-6">
    	<?php     	
			if ( isset( $user_login ) ) { 
    				print_r( $user_login );
    		 }
    	 ?>
      <form action="" method="POST">
				<div class="form-group">
					<label for="InputEmail1">Email address</label>
					<input type="email"name="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="InputPassword1">Password</label>
					<input type="password" name="password" class="form-control" id="InputPassword1" placeholder="Password">
				</div>				
			<button type="submit" name="login" class="btn btn-primary">Login</button>
      </form>
    </div>  
    <div class="col-md-6"></div>  
  </div>
 </div>


<?php 
include( 'inc/Footer.php' );
 ?>