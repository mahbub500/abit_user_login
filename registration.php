<?php 
	// include_once( 'Session.php' );
	include( 'inc/Header.php' );
	include( 'lib/User.php' );
	include( 'lib/database.php' );
?>

<?php 
// $db = new Database();
$user = new User();
$userList = $user->userList();

if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['register'] )) {
	// echo $name 					= $_POST['name'];
	// echo $email 				= $_POST['email'];
	// echo $editor_status = $_POST['editor_status'];
	// echo $Password 			= $_POST['Password'];
	$userRegi = $user->userRegistration( $_POST );

	

}
 ?>
    <div class="row">
      <div class="col-md-6">
      	<?php 
      	if ( isset( $userRegi ) ) {
      		// var_dump( $userRegi );

      		// $user_list =  sprintf( "Name is %s And email is : %s <br>" , $userRegi['name'], $row['email'] );
      		// echo $user_list	;

      	}
      	 ?>
      	<h1>User Registration</h1>
        <form action="" method="POST">
						<div class="form-group">
							<label for="exampleInputName">Name</label>
							<input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Enter Your Name">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="editor_status">Select User Type</label>
							<select name="editor_status" class="form-control" id="editor_status">
							<option value="1" selected>Editor</option>
							<option value="2">Admin</option>							
						</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>
						
					<button type="submit" name="register" class="btn btn-primary">Submit</button>
        </form>
      </div>  
      <div class="col-md-6"></div>  
    </div>
  </div>
<?php 
include( 'inc/Footer.php' );
 ?>