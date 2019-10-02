<?PHP
	// code to query the database and validate the login

	// brings in database connection code
	require 'connect.php';
	
	// variable setup for SQL query
	// escape string function used to escape dangerous characters
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);	

	// these two lines build the relevant SQL query
	$sql = "select * from user_table where email = '" . $email;
	$sql = $sql . "' and password = '" . $password . "';";

	// select database and query with $sql
	mysqli_select_db($serverName,$result = $conn -> query($sql));
	
	// if more than one row is returned, details are valid, and login proceeds
	if($result->num_rows > 0){
      	// assign the result to variable $row
		$row = $result -> fetch_assoc();
      
      	// set status as logged in
		$_SESSION['loggedIn'] = true;
      
      	// log personal details in $_SESSION for later use
		$_SESSION['firstName'] = $row[first_name];
		$_SESSION['lastName'] = $row[last_name];
		$_SESSION['userType'] = $row[user_type];		
		// note -  if needs be, other data can be stored for usage
		
      	// redirect user to the home page
		header('Location: index.php');
		
    // if no rows are returned, login is invalid and user is returned
	}else{
      // ensures user doesn't somehow have status set to logged in
      unset($_SESSION['loggedIn']);
      
      // sets error so message can be displayed on login screen
      $_SESSION['error'] = 'yes';
      
      // redirects user back to login screen
      header('Location: login.php');
	}
?>