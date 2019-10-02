<?PHP
	// start the session to access user details
	session_start();

	// login verificaiton to control page access
	if($_SESSION['loggedIn'] != true){
    	header('Location: login.php'); 
    }

	// include file to import blocks of html, such as the header
	include 'flatText.php';

	// function imports entire top of docment, from <!DOCTYPE html> to </head>
	getHeader('Home');
?>

<!-- the class in the body tag is to disable scrolling around the image slideshow (see custom CSS files) -->
<body class = "homePageFix">

    <!--container fluid uses 100% width of screen
    **Putting a single row inside a fluid container without any columns will span the row 100%-->
	
    <?PHP
  		// function inserts nav bar
  		getNavBar('index');
  	?>

            <!-- image slideshow (carousel) will add more images and content to this in later sprints, just here to look nice and separate the pages a bit more
            link: https://getbootstrap.com/docs/4.3/components/carousel/ -->
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active embed-responsive-item" style="background-image: url('img/homeimg1.jpg') no-repeat 0 0;" >
                        <!--adding min-vw-100 and min-vh-100 makes the items responsive-->
                        <img src="img/homeimg3.png" class="d-block min-vw-100 min-vh-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/homeimg3.png" class="d-block min-vw-100 min-vh-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/homeimg3.png" class="d-block min-vw-100 min-vh-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

  


</body>

</html>
