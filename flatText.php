<?PHP
	// file from which to pull unchanging text
	// such as maybe the navbar

	// function to spawn the header css & js contents
	function getHeader($pageName){
		echo '
			<!DOCTYPE html>
			<html lang="en">

			<head>

			<meta charset = "UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE-edge">
			<meta name="viewport" content="width = device-width, initial-scale = 1">

			<title> RGU Events | '.$pageName.' </title>

			<!-- Importing bootstrap stylesheets from cdns
			CSS elements can be changed/overwritten by making own css file -->
			<link rel="stylesheet" href="customCSS.css">
			<link rel="stylesheet" href="css/bootstrap.css" >
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

			</head>
		';
	}

	// function to create top of user/staff container

	function getContainerTop(){
		//code here will echo out the top half of the container which contains user or staff details
	}

	// function to spawn bottom of user/staff container
	function getContainerBottom(){
      
    }

	// function to get the navbar
	function getNavBar($page){
      	if($page == 'index'){
         	$index = " active"; 
        }elseif($page == "events"){
        	$events = " active";
        }else{
        	$management = " active";
              if($page == "manage_events"){
              	$manage_events = " active";
              }elseif($page == "manage_staff"){
               	$manage_staff = " active"; 
              }
        }
		
    	echo '<div class="container-fluid">

        <div class="row">

                        <!-- Left side image and text nav bar, img will be changed to our own rgu logo-->
                         <nav class="navbar fixed-top navbar-light bg-light">
                             <a class="navbar-brand" href="index.php">
                                 <img src="img/rgu.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                                 RGU Events 
                             </a>
                             <!--Nav links, includes drop down (could used for events and staff creation) -->
                             <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                     
                                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                       <span class="navbar-toggler-icon"></span>
                                     </button>
                                   
                                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                       <ul class="navbar-nav mr-auto">
                                         <li class="nav-item'.$index.'">
                                           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                         </li>
                                         <li class="nav-item'.$events.'">
                                           <a class="nav-link" href="events.php">Events</a>
                                         </li>
             
                                         <!--Drop down items start here-->
                                         <li class="nav-item dropdown">
                                           <a class="nav-link dropdown-toggle'.$management.'" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             Management
                                           </a>
                                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                             <a class="dropdown-item'.$manage_events.'" href="manageevents.php">Manage Events</a>
                                             <a class="dropdown-item'.$manage_staff.'" href="managestaff.php">Manage Staff</a>
                                             <div class="dropdown-divider"></div>
                                             <a class="dropdown-item" href="#">Something else here</a>
                                           </div>
                                         </li>
                                         <li class="nav-item">
                                                 <a class="nav-link" href="logout.php">Sign Out</a>
                                               </li>
                                       </ul>
                                       
                                     </div>
                                   </nav>
             

        </div>
     
     

    </div>'
    	;
    }


?>



