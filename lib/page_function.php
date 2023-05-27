<?php 

include( 'database.php' );

/**
 * Page Related Class
 */
class Page extends Database{
	
	/**
	 * Add page
	 */
	public function addPageData( $data ){

		$name 		= $data['name'];
		$title 		= $data['title'];
		$description= $data['description'];
		$content 	= $data['content'];
		$active 	= 1;
		$thumb_name = $_FILES['thumbnail']['name'];
		$thumb_tmp 	= $_FILES['thumbnail']['tmp_name'];

		$sql 		= "INSERT INTO `page`( `name`, `title`, `description`, `content`, `thumbnail`, `active` ) VALUES ( '$name','$title','$description','$content', '$thumb_name', '$active' )";
		$result 	= $this->con->query( $sql );

		if ( $result ) {
			echo "Data Insert Successfully";
			move_uploaded_file( $thumb_tmp,"image/".$thumb_name );
			header("Location: ../create_page.php");
		}
		else{
			echo "Error";
		} 
	}

	/**
	 * Active Page List
	 */
	public function pageList(){
		$sql 	= "SELECT * FROM `page` WHERE `active` = '1'";
		$result = $this->con->query( $sql );

		if ( $result ) {
			return $result;
		}
		elseif( $result == "" ){
			$msg = "<div class='alert alert-danger'><strong>Error !</strong> No Data Found</div>";
			return $msg;
		}
		else{
			$msg = "<div class='alert alert-danger'> <strong>Error !</strong> Some Things Wrong</div>";
			return $msg;
		}
	}

	/**
	 * Deactive Page List
	 */
	public function deactivePageList(){
		$sql 	= "SELECT * FROM `page` WHERE `active` = '0'";
		$result = $this->con->query( $sql );

		if ( $result ) {
			return $result;
		}
		elseif( $result == "" ){
			$msg = "<div class='alert alert-danger'><strong>Error !</strong> No Data Found</div>";
			return $msg;
		}
		else{
			$msg = "<div class='alert alert-danger'> <strong>Error !</strong> Some Things Wrong</div>";
			return $msg;
		}
	}

	/**
	 * Page Edit
	 */
	public function editPage( $id ){
		
	}

	/**
	 * Page Delete
	 */
	public function deletetPage( $id ){
		$sql 		= "DELETE FROM `page` WHERE `page`.`id` = '$id'";
		$result 	= $this->con->query( $sql );

		if ( $result ) {
			// $msg = "<div class='alert alert-success'><strong>Success !</strong> Page Removed</div>";
			// return $msg;
			header("Location: page.php");
		}
	}
	/**
	 * Page Deactive
	 */
	public function deactivePage( $id ){
		$sql 		= "UPDATE `page` SET `active` = '0' WHERE `page`.`id` = '$id'";
		$result 	= $this->con->query( $sql );

		if ( $result ) {			
			header("Location: page.php");
		}
	}

	/**
	 * Page Active
	 */
	public function activePage( $id ){
		$sql 		= "UPDATE `page` SET `active` = '1' WHERE `page`.`id` = '$id'";
		$result 	= $this->con->query( $sql );

		if ( $result ) {			
			header("Location: page.php");
		}
	}

}

 ?>