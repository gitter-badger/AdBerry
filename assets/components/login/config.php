<?php
//----------------------------------------------------------------------------
// AdBerry config file
// For support
// Github: 
//----------------------------------------------------------------------------

// Database settings
$dbhost="rdbms.strato.de";
$dbuser="U2710596";
$dbpass="y06p8a5oYBnSHXnAd3jD";
$dbname="DB2710596";
$dblink = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Error " . mysqli_connect_error($dblink));

// General settings
// there are non ad this moment

include("functions.php");
?>