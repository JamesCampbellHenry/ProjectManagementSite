<?PHP
	// start the session to access user data
	session_start();
	
	// check user is signed in to restrict page access
	if($_SESSION['loggedIn'] == true){
    	header('Location: index.php'); 
    }

	// file to allow dumping of blocks of HTML
	include 'flatText.php';

	// function places everything from <!DOCTYPE html> to <./head>
	getHeader('Login');
?>

<body>

  <!-- i think a simple nav with no links looks nice on the login page, it doesn't have any functionality though-->
    <div class ="container-fluid">

        <div class = "row">

                <nav class="navbar fixed-top navbar-light bg-light">
                        <a class="navbar-brand" href="">
                            <img src="img/rgu.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                            RGU Events 
                        </a>


        </div>


    </div>

    <!-- a simple placeholder for what the log in could look like, we should ad a lot more styling to this 
    link: https://getbootstrap.com/docs/4.3/components/forms/-->
    <div class = "container">

    <div class = "row justify-content-center">
			
            <form action="validateLogin.php" method="post">
                    <div class="form-group loginFormStyle">
                      <?PHP
                      	//temporary message, this can be used to display a login error
      					if(isset($_SESSION['error'])){
                			unset($_SESSION['error']);
                			echo '<br /><h1><b>Login Failed</b></h1><br />';
                		}
      				?>
                      <label for="exampleInputEmail1">Email address</label>
                      <input name ="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      <small id="emailHelp" class="form-text text-muted">Please enter your RGU email </small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary ">Submit</button>
                  </form>
      


    </div>


    </div>



</body>

</html>