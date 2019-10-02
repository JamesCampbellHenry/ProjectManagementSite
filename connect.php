<?PHP
	// establish session to access user credentials
	session_start();

	// variables required for the connection
	$serverName = "db5000176649.hosting-data.io"; 
	$userName = "dbu269065";
	$password = "UrquhartGroupPassword_12";
	$database = "dbs171471";
	
	// establish connection object
	$conn = new mysqli($serverName,$userName,$password,$database);
	
	// the following commented out lines can, if needs be, be used to test the connection

	//if($conn->connect_error){
		//die("Connection Failed " . $conn->connect_errno . $conn ->connect_error);
	//}else{
		//echo "Successful Connection";
	//}
?>