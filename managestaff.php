<?PHP
	// start session to access user data
	session_start();

	// check user is logged in to restrict page access
	if($_SESSION['loggedIn'] != true){
    	header('Location: login.php'); 
    }

	// include functions to dump blocks of HTML
	include 'flatText.php';

	// function places everything from <!DOCTYPE html> to </head>
	getHeader('Manage Staff');
?>


<body>
    <!--container fluid uses 100% width of screen-->
    <?PHP
  		// function places the nav bar on the page
  		getNavBar('manage_staff');
  	?>



</body>

</html>
