<?PHP
	// start the session to access user details
	session_start();
	
	// unset all logged user details
	// note - if more details are saved at login, they must also be unset here
	unset($_SESSION['loggedIn']);
	unset($_SESSION['firstName']);
	unset($_SESSION['lastName']);
	unset($_SESSION['user_type']);
	
	// redirect to login
	header('Location: login.php');
?>
