<?PHP
	// start the session to access user data
	session_start();

	// login verification to restrict page access
	if($_SESSION['loggedIn'] != true){
    	header('Location: login.php'); 
    }

	// includes functions which place blocks of HTML
	include 'flatText.php';

	// function to get everything from <!DOCTYPE html> to </head>
	getHeader('Manage Events');
?>


<body>
    <!--container fluid uses 100% width of screen-->
    <?PHP
  		// function to load in nav bar
  		getNavBar('manage_events');
  	?>



</body>

</html>
