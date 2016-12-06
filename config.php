<?php
//----------------------------------------------------------------------------
// AdBerry config file
// For support
// Github: 
//----------------------------------------------------------------------------

// Database settings
$dbhost="";
$dbuser="";
$dbpass="";
$dbname="";
$dblink = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Error " . mysqli_connect_error($dblink));

// General settings
// there are non at this moment
include("functions.php");
?>