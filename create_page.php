<?php 
	// include_once( 'Session.php' );
	include( 'inc/Header.php' );
?>
    <div class="row">
      <div class="col-md-6">
      	<h1>Create Page</h1>
        <form action="" method="post">
						<div class="form-group">
							<label for="InputName">Name :</label>
							<input type="text" class="form-control" name="page_name" id="InputName" placeholder="Page Name">
						</div>					
						<div class="form-group">
							<label for="InputMetaTitle">Meta Title :</label>
							<input type="text" class="form-control" name="page_meta_title" id="InputMetaTitle" placeholder="Meta Title">
						</div>
						<div class="form-group">
							<label for="InputMetaDescription">Description :</label>
							<input type="text" class="form-control" name="page_meta_title" id="InputMetaDescription" placeholder="Page Meta Description">
						</div>
						<div class="form-group">
							<label for="InputMetaContent">Content :</label>							
							<textarea name="page_content" rows="5" cols="56" placeholder="Enter Your Content"></textarea>
						</div>
						<div class="form-group">
							<label for="PageThumbnail">Page Thumbnail :</label>
							<input type="file" class="form-control-file" id="PageThumbnail">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>  
      <div class="col-md-6"></div>  
    </div>
  </div>

<?php 
include( 'inc/Footer.php' );
 ?>