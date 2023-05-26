<?php 
	// include_once( 'Session.php' );
	include( 'inc/Header.php' );
	include( 'lib/User.php' );
	// include( 'lib/database.php' );
	$user = new User();
	$users = $user->users();
?>

<div class="row">
      <div class="col-md-6">
      	<h4>User list</h4>

      	<table class="table">
	<thead>
    	<tr>
    	  <th scope="col">#</th>
    	  <th scope="col">First</th>
    	  <th scope="col">Email</th>
    	  <th scope="col">Admin / Editor</th>
    	</tr>
	</thead>
  <tbody>
  	<?php 
  		foreach ( $users as $key => $user ) {
  			echo "<pre>";
  			var_dump( $users );
  			echo "</pre>";
  		?>
			 
  		<?php
  		}
  	 ?>
   
  </tbody>
</table>
        
      </div>  
      <div class="col-md-6"></div>  
    </div>
  </div>


<?php 
include( 'inc/Footer.php' );
 ?>