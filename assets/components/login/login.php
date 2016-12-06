<?php
session_start();
require_once '../../../config.php';

if(isset($_POST['btn-login']))
{
  $user_email = trim($_POST['user_email']);
  $user_password = trim($_POST['password']);
  $password = $user_password;
}

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$msql = "SELECT User_ID, Email, Password FROM Users WHERE Email='".$user_email."'";
$result = $conn->query($msql);
$row = $result->fetch_assoc();

if($row['Password']=="$password")
{
  echo "ok"; // log in
  $_SESSION['user_session'] = $row['User_ID'];
}
else
{
  echo "notok"; // wrong details 
}

$conn->close();
?>