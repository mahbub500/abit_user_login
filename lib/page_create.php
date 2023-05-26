<?php 

include( 'database.php' );

/**
 * Page Related Class
 */
class Page extends Database{
	
	// Create Page
	public function addPageData( $data ){

		$name 		= $data['name'];
		$title 		= $data['title'];
		$description= $data['description'];
		$content 	= $data['content'];
		$thumb_name = $_FILES['thumbnail']['name'];
		$thumb_tmp 	= $_FILES['thumbnail']['tmp_name'];

		$sql 		= "INSERT INTO `page`( `name`, `title`, `description`, `content`, `thumbnail`) VALUES ( '$name','$title','$description','$content', '$thumb_name' )";
		$result 	= $this->con->query( $sql );

		if ( $result ) {
			echo "Data Insert Successfully";
			move_uploaded_file( $thumb_tmp,"image/".$thumb_name );
			header("Location: ../create_page.php");
		}
		else{
			echo "Error";
		} 

		// return $sql;


	}
}

 ?>