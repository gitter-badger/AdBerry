<?php

// convert a diget to a status button
function GetStatus ($var) {
  switch ($var) {
    case "0":
        echo "<a class=\"btn btn-xs green default\"> Active
                <i class=\"fa fa-play\"></i>
              </a>";
        break;
    case "1":
        echo "<a class=\"btn btn-xs yellow default\"> Pauzed
                <i class=\"fa fa-pause\"></i>
              </a>";
        break;
    case "2":
        echo "<a class=\"btn btn-xs red default\"> Stoped
                <i class=\"fa fa-stop\"></i>
              </a>";
        break;
    case "3":
        echo "<a class=\"btn btn-xs red default\"> Banned
                <i class=\"fa fa-ban\"></i>
              </a>";
        break;
     case "4":
        echo "<a class=\"btn btn-xs blue default\"> Waiting for aproval
                <i class=\"fa fa-ban\"></i>
              </a>";
        break;
    default:
        echo "";
  }
}

// convert a diget to a browser icon
function GetBrowser ($var) {
  switch ($var) {
    case "0":
        echo "<i class=\"fa fa-lg fa-chrome\">";
        break;
    case "1":
        echo "<i class=\"fa fa-lg fa-firefox\">";
        break;
    case "2":
        echo "<i class=\"fa fa-lg fa-safari\">";
        break;
    case "3":
        echo "<i class=\"fa fa-lg fa-opera\">";
        break;
     case "4":
        echo "<i class=\"fa fa-lg fa-internet-explorer\">";
        break;
    default:
        echo "";
  }
}

// convert a diget to a OS icon
function GetOS ($var) {
  switch ($var) {
    case "0":
        echo "<i class=\"fa fa-lg fa-windows\">";
        break;
    case "1":
        echo "<i class=\"fa fa-lg fa-linux\">";
        break;
    case "2":
        echo "<i class=\"fa fa-lg fa-apple\">";
        break;
    case "3":
        echo "<i class=\"fa fa-lg fa-android\">";
        break;
     case "4":
        echo "<i class=\"fa fa-apple fa-stack-1x\"></i>
              <i class=\"fa fa-mobile fa-stack-2x\"></i>";
        break;
    default:
        echo "";
  }
}

// convert a diget to a Device icon
function GetDevice ($var) {
  switch ($var) {
    case "0":
        echo "<i class=\"fa fa-lg fa-desktop\">";
        break;
    case "1":
        echo "<i class=\"fa fa-lg fa-tablet\">";
        break;
    case "2":
        echo "<i class=\"fa fa-lg fa-mobile\">";
        break;
    default:
        echo "";
  }
}

function CRT (){
  if(Views() == 0 or Clicks() == 0 ){
    echo "No data";
  }else{
    $CRT = 100 / $Views * $Cliks;
    echo $CRT."%";   
  }
}

function Views(){
  include("../../config.php");
  $conn =  mysql_connect($dbhost, $dbuser, $dbpass) or  
  die("Could not connect: " . mysql_error());  ;
  mysql_select_db($dbname);
  $sql = mysql_query("SELECT COUNT(View_ID) AS count FROM Views");
  $row = mysql_fetch_assoc($sql);
  $Views = $row['count'];
  return $Views;
  mysql_close($conn);
}

function Clicks(){
  include("../../config.php");
  $conn =  mysql_connect($dbhost, $dbuser, $dbpass) or  
  die("Could not connect: " . mysql_error());  ;
  mysql_select_db($dbname);
  $sql = mysql_query("SELECT COUNT(Click_ID) AS count FROM Clicks");
  $row = mysql_fetch_assoc($sql);
  $Cliks = $row['count'];
  return $Cliks;
  mysql_close($conn);
}

function Ads(){
  include("../../config.php");
  $conn =  mysql_connect($dbhost, $dbuser, $dbpass) or  
  die("Could not connect: " . mysql_error());  ;
  mysql_select_db($dbname);
  $sql = mysql_query("SELECT COUNT(Ad_ID) AS count FROM Ads");
  $row = mysql_fetch_assoc($sql);
  $Ads = $row['count'];
  return $Ads;
  mysql_close($conn); 
}

function Campains(){
  include("../../config.php");
  $conn =  mysql_connect($dbhost, $dbuser, $dbpass) or  
  die("Could not connect: " . mysql_error());  ;
  mysql_select_db($dbname);
  $sql = mysql_query("SELECT COUNT(Campain_ID) AS count FROM Campains");
  $row = mysql_fetch_assoc($sql);
  $count = $row['count'];
  echo $count;
  mysql_close($conn);
}

function Earnings(){

}

function Logger ($content) {
  // file location
  $file = '../../data/logs/log.txt';
  // get curent time
  $time = date('G:i:s d:n:Y');
  // Open the file to get existing content
  $current = file_get_contents($file);
  // Append a new person to the file
  $current .= $time." ".$content."\n";
  // Write the contents back to the file
  file_put_contents($file, $current);
}
?>