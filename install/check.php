<?php
include("../config.php");
function checkfile($filename){
  if (file_exists($filename)) {
    echo "YES";
  } else {
    echo "NO";
  }
}

function checkphpverion(){
  echo phpversion();
}

function checkphpmem(){
  echo ini_get('memory_limit');
}

function checksqlversion(){
  if ($dblink) {
    die('Could not connect: ' . mysql_error());
  }
    echo mysql_get_server_info();
  }

function sqlinstall(){
  include("../config.php");
  // Create connection
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  // Check connection

  $sql = file_get_contents("install.sql");

  if ($conn->multi_query($sql) === TRUE) {
      echo "SQL has run with out any errors";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  }

function insertuser($username, $password){
  include("../config.php");
  // Create connection
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "INSERT INTO users (Username, Password)
  VALUES ('". $username ."','". $password . "')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

}
?>