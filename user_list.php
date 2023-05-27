<?php 
	// include_once( 'Session.php' );
	include( 'inc/Header.php' );
	include( 'lib/User.php' );
	$user_list 	= new User();
	$users 	= $user_list->UserList();

	if ( isset( $_POST['delete_user'] ) ) {
		$user_delete = $user_list->deleteUser( $_POST );
	}
	$isAdmin = $user_list->isAdmin();
	
	?>

<div class="row">
      <div class="col-md-8">
      	<?php 
      	if ( isset( $isAdmin ) && $isAdmin == true ) { ?>
      		<a href="registration.php"><button class="btn btn-sm btn-primary">Create User</button></a>
      	<?php } ?>
      	<?php if ( isset( $users ) && gettype( $users ) != 'object' ){
      		print_r( $users );
      	}else{
      		if ( $users->num_rows == 0 ) {
      			echo $msg = "<div class='alert alert-warning'><strong>Error !</strong>User List Empty</div>";
      		}
      	}
      	if ( isset( $user_delete ) && gettype( $user_delete ) == 'object' ) {
      		print_r( $user_delete );
      	}
      	?>
      	<h4>User list</h4>
      	<table class="table">
		<thead>
	    	<tr>
	    	  <th scope="col">#</th>
	    	  <th scope="col">First</th>
	    	  <th scope="col">Email</th>
	    	  <th scope="col">Admin / Editor</th>
	    	  <?php if ( isset( $isAdmin ) && $isAdmin == true ) { ?>
	    	  	<th scope="col">Action</th>
	    	  <?php } ?>
	    	</tr>
		</thead>
	 	 <tbody>
		  	<?php 
		  		$sl = 1;
		  		foreach ( $users as $key => $user ) {
		  		?>
					<tr>
				    	<th scope="row"> <?php echo $sl++ ?> </th>
				    	<td> <?php echo $user['name']; ?> </td>
				    	<td> <?php echo $user['email']; ?> </td>
				    	<td> <?php echo $user['status']; ?> </td>
				    	<td>
				    		<form method="POST">
				    			<input type="hidden" name="delete_id" value="<?php echo $user['id'] ?>">
				    			<?php if ( isset( $isAdmin ) && $isAdmin == true ) { ?>
					      		<button  name="delete_user" class="btn btn-sm btn-danger">
					    				<i class="fa-solid fa-trash"></i>
					    			</button>
					      	<?php } ?>				    			
				    		</form>				    		
				    	</td>
				    </tr>   
		  		<?php
		  		}
		  	 ?>   
		  </tbody>
		</table>        
      </div>  
      <div class="col-md-4"></div>  
    </div>
  </div>


<?php 
include( 'inc/Footer.php' );
 ?>