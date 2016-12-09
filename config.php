<?php
//----------------------------------------------------------------------------
// AdBerry config file
// For support
// Github: 
//----------------------------------------------------------------------------

// Database settings
$dbhost="localhost";
$dbuser="root";
$dbpass="usbw";
$dbname="test";
$dblink = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("Error " . mysqli_connect_error($dblink));

// General settings
// there are non at this moment
// 
date_default_timezone_set('UTC');
global $dbhost;
global $dbuser;
global $dbpass;
global $dbname;
global $dblink;
?>