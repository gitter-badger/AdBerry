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

?>