<?PHP
	// start the session to access user details
	session_start();

	// validate login to restrict user access
	if($_SESSION['loggedIn'] != true){
    	header('Location: login.php'); 
    }

	// import file to load blocks of html
	include 'flatText.php';

	// function pulls in everything from <!DOCTYPE html> to </head>
	getHeader('Events');
?>

<body>
    <!--container fluid uses 100% width of screen-->
    <?PHP
  		// function pulls in nav bar
  		getNavBar('events');
  	?>

    <!-- This is a basic idea of what the events could be stored in, there's a lot of custom options for list groups 
    Clicking on the list group items can actually href you to other pages, could link to a page with more info on the event or expand the item
    link: https://getbootstrap.com/docs/4.3/components/list-group/ -->
    <div class="container-fluid">

        <div class = "row">

            <div class = "col">

                    <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                              <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small>
                              </div>
                              <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                              <small>Donec id elit non mi porta.</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                              <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small class="text-muted">3 days ago</small>
                              </div>
                              <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                              <small class="text-muted">Donec id elit non mi porta.</small>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                              <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small class="text-muted">3 days ago</small>
                              </div>
                              <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                              <small class="text-muted">Donec id elit non mi porta.</small>
                            </a>
                          </div>  


            </div>


            
        </div>

    </div>

    

</body>

</html>
