<?php 
	// include_once( 'Session.php' );
	include( 'inc/Header.php' );
	include( 'lib/User.php' );
	$user_list 	= new User();
	$users 	= $user_list->UserList();
	?>

<div class="row">
      <div class="col-md-8">
      	<?php if ( isset( $users ) && gettype( $users ) != 'object' ){
      		print_r( $users );
      		
      	}?>
      	<h4>User list</h4>
      	<table class="table">
	<thead>
    	<tr>
    	  <th scope="col">#</th>
    	  <th scope="col">First</th>
    	  <th scope="col">Email</th>
    	  <th scope="col">Admin / Editor</th>
    	  <th scope="col">Action</th>
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