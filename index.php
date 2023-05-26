<?php 
	// include_once( 'Session.php' );
	include( 'inc/Header.php' );
	// include( 'lib/database.php' );

// Database connection parameters
				// $servername = "localhost";
				// $username = "root";
				// $password = "337338";
				// $dbname = "abit.wp";

				// // Create a new mysqli instance
				// $conn = new mysqli($servername, $username, $password, $dbname);

				// // Check the connection
				// if ($conn->connect_error) {
				//     die("Connection failed: " . $conn->connect_error);
				// }

				// // Construct the SQL SELECT statement
				// $sql = "SELECT * FROM `user`";

				// // Execute the query
				// $result = $conn->query($sql);

				// // Check if any rows are returned
				// if ($result->num_rows > 0) {
				//     // Process and display the data
				//     while ($row = $result->fetch_assoc()) {
				//     	echo $user_list =  sprintf( "Name is %s And email is : %s <br>" , $row['name'], $row['email'] );	
				//     }
				// } else {
				//     echo "No data found.";
				// }

				// // Close the database connection
				// $conn->close();
?>

<div class="row">
      <div class="col-md-6">
        <form action="lib/login.php" method="post">
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		</div>
		<div class="form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Check me out</label>
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