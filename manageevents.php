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
	 <form class="col-sm-4 offset-sm-4 text-center">
    <div class="">
    <label for="exampleFormControlInput1">Contact Email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@rgu.ac.uk">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Building</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Sir Ian Wood Building</option>
      <option>Ishbel Gordon Building</option>
      <option>Aberdeen Business School</option>
      <option>Gray's School of Art</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Enter Room</label>
    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="N100">
  </div>
      <select class="form-control" id="exampleFormControlSelect2">
      <option>StaffExample@rgu.ac.uk</option>
      <option>StaffExample2@rgu.ac.uk</option>
      <option>StaffExample3@rgu.ac.uk</option>
      <option>StaffExample4@rgu.ac.uk</option>
    </select>
     <br />
    <button type="submit" class="btn btn-primary" id="staffInputBtn">Add Another Staff Member</button>
       <br />
       <br />
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description of event</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    <br />
    <button type="submit" class="btn btn-primary" id="staffInputBtn">Save Event</button>
  </div>
</form>


</body>

</html>
