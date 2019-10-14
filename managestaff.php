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
  

<div class="container-fluid">
	
		<form class="staffInput" action="#" style="margin-top: 100px;" id="customFormSize">
		
			<div class="form-row">
			
				<div class="form-group col-md-6">
				
					<label for="fname">First Name</label>
				  
					<input type="text" class="form-control" id="fname" required>
					
				</div>
				
				
				<div class="form-group col-md-6">
				
					<label for="lname">Last Name</label>
					
					<input type="text" class="form-control" id="lname" required>
					
				</div>
				
				
			</div>
			
			<div class="form-group">
			
				<label for="staffEmail">Email</label>
				
				<input type="email" class="form-control" id="staffEmail" placeholder="you@example.com" required>
				
			</div>
			
			<div class="form-group">
			
				<label for="staffPassword">Password</label>
				
				<input type="password" class="form-control" id="staffPassword" required>
				
			</div>
			
			<div class="form-group">
			
				<label for="staffBio">Biography</label>
				
				<textarea class="form-control" id="staffBio" rows="2" placeholder="Experience / Skills"></textarea>
				
			</div>
			
			<!-- button is styled in css to match the RGU purple theme -->
			<button type="submit" class="btn btn-primary" id="staffInputBtn">Add Staff</button>
			
		</form>
	
	</div>

</body>

</html>
