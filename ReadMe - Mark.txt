customCSS file is for overwriting the bootstrap css, dont change anything in the bootstrap css files
just use it for reference, the only important file in the css folder is the first boostrap one, use that
to look at any elements, but dont hard code anything in.

the images in the img folder are just placeholders now, i'll find better ones later on for the homepage.

--------------------------------------------------------------------------------------------------------

PHP NOTES

i changed the head section a bit, will need to update the getheader function in PHP - head

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset = "UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width = device-width, initial-scale = 1">

<title> RGU Events | Home </title>

<!-- Importing bootstrap stylesheets from cdns
CSS elements can be changed/overwritten by making own css file -->
<link rel="stylesheet" href="customCSS.css">
<link rel="stylesheet" href="css/bootstrap.css" >
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

</head>