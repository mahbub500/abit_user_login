<?php 
	// include_once( 'Session.php' );
	include( 'inc/Header.php' );
	include( 'lib/page_function.php' );

	$pages 				= new Page();
	$page_list 		= $pages->pageList();
	$deactivelist	= $pages->deactivePageList();

	if ( isset( $_POST['edit_page'] ) ) {
		$pages->editPage( $_POST['delete_page_id'] );
	}
	elseif ( isset( $_POST['delete_page'] ) ) {
		$pages->deletetPage( $_POST['delete_page_id'] );
	}
	elseif ( isset( $_POST['deactive_page'] ) ) {
		$pages->deactivePage( $_POST['delete_page_id'] );
	}
	elseif ( isset( $_POST['active_page'] ) ) {
		var_dump( $_POST['deactive_id'] );
		$pages->activePage( $_POST['deactive_id'] );
	}
?>

<div class="row">
    <div class="col-md-12">
    	<a href="create_page.php"><button class="btn btn-sm btn-primary">Create New Page</button></a>
    	<?php 
    	if ( $page_list->num_rows == 0 ) {
      		echo $msg = "<div class='alert alert-warning'><strong>Error !</strong>No Active Page Found</div>";
      	}

    	 ?>
      <h3>Active Page List</h3>
      <table class="table">
			<thead>
		    	<tr>
		    	  <th scope="col">Sl</th>
		    	  <th scope="col">Name</th>
		    	  <th scope="col">Title</th>
		    	  <th scope="col">description</th>
		    	  <th scope="col">Content</th>
		    	  <th scope="col">Image</th>
		    	  <th scope="col">action</th>
		    	</tr>
			</thead>
		 	 <tbody>
			  	<?php 
			  		$sl = 1;
			  		foreach ( $page_list as $key => $page ) {
			  		?>
						<tr>
					    	<th scope="row"> <?php echo $sl++ ?> </th>
					    	<td> <?php echo $page['name']; ?> </td>
					    	<td> <?php echo $page['title']; ?> </td>
					    	<td> <?php echo $page['description']; ?> </td>
					    	<td> <?php echo $page['content'] ;?> </td>
					    	<td> <img src="image/<?php echo $page['thumbnail'] ;?>" alt="" height="50px";  width="60px";> </td>
					    	<td>
					    		<form method="POST">
					    			<div class="btn-group btn-group-toggle" >
						    			<input type="hidden" name="delete_page_id" value="<?php echo $page['id'] ?>">
						    			<button  name="edit_page" class="btn btn-sm btn-primary">
						    				<i class="fa-solid fa-pen-to-square"></i>
						    			</button>
						    			<button  name="delete_page" class="btn btn-sm btn-danger">
						    				<i class="fa-solid fa-trash"></i>
						    			</button>
						    			<button  name="deactive_page" class="btn btn-sm btn-primary">
						    				<i class="fa-solid fa-xmark"></i> Deactive
						    			</button>				    			
					    			</div>
					    		</form>
					    	</td>
					    </tr>   
			  		<?php
			  		}
			  	 ?>   
			  </tbody>
			</table>
			<h3>Deactivate Page List</h3>
      <table class="table">
			<thead>
		    	<tr>
		    	  <th scope="col">Sl</th>
		    	  <th scope="col">Name</th>
		    	  <th scope="col">Title</th>
		    	  <th scope="col">description</th>
		    	  <th scope="col">Content</th>
		    	  <th scope="col">Image</th>
		    	  <th scope="col">action</th>
		    	</tr>
			</thead>
		 	 <tbody>
			  	<?php 
			  		$sl = 1;
			  		foreach ( $deactivelist as $key => $page ) {
			  		?>
						<tr>
					    	<th scope="row"> <?php echo $sl++ ?> </th>
					    	<td> <?php echo $page['name']; ?> </td>
					    	<td> <?php echo $page['title']; ?> </td>
					    	<td> <?php echo $page['description']; ?> </td>
					    	<td> <?php echo $page['content'] ;?> </td>
					    	<td> <img src="image/<?php echo $page['thumbnail'] ;?>" alt="" height="50px";  width="60px";> </td>
					    	<td>
					    		<form method="POST">
					    			<div class="btn-group btn-group-toggle" >
						    			<input type="hidden" name="deactive_id" value="<?php echo $page['id'] ?>">
						    			<button  name="active_page" class="btn btn-sm btn-primary">
						    				<i class="fa-solid fa-check"></i> Active
						    			</button>				    			
					    			</div>
					    		</form>
					    	</td>
					    </tr>   
			  		<?php
			  		}
			  	 ?>   
			  </tbody>
			</table>  
    </div>  
    <!-- <div class="col-md-6"></div>   -->
  </div>
 </div>

<?php 
include( 'inc/Footer.php' );
 ?>