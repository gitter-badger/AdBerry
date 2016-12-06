<!-- 
Name: AdBerry - A free and opensource ad server
Version: 0.0.1 Beta
Author: Matthijs Zondervan
Website: http://www.squareberry.nl/
License: Free and opensource not yet under a licene
-->
<html>

<head>
  <title>AdBerry Cliks</title>
  <link rel="stylesheet" href="../plugins/chartist/chartist.min.css">
  <script src="../plugins/chartist/chartist.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
  <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="../plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
  <link href="../plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
  <link href="../plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
  <link href="../../css/sidebar.css" rel="stylesheet" type="text/css" />
  <link href="../../css/header.css" rel="stylesheet" type="text/css" />
  <link href="../../css/components.css" rel="stylesheet" type="text/css" />
  <link href="../../css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
  <link href="../../css/custom.css" rel="stylesheet" type="text/css" />

  <link rel="shortcut icon" href="favicon.ico" />
  <?php include("../functions.php");?>
</head>
<!-- the body tag includes some of the basic settings -->
<body class="page-sidebar-fixed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">
  <?php include("header.php"); ?>
  <!-- begin container -->
  <div class="page-container">
    <?php include("sidebar.php");?>
    <!-- begin content -->
    <div class="page-content-wrapper">
      <!-- begin content body -->
      <div class="page-content">
        <!-- begin page header -->
        <h1 class="page-title"> Clicks
          <small>A quick overview </small>
        </h1>
        <div class="row">
          <div class="col-md-12">
            <!-- portlet start -->
            <div class="portlet light ">
              <div class="portlet-title">
                <div class="caption font-dark">
                  <i class="icon-settings font-dark"></i>
                  <span class="caption-subject bold uppercase"> Clicks</span>
                </div>
              </div>
              <div class="portlet-body">
                
                <div class="ct-chart ct-major-eleventh"></div>
                
                <script>
                  var data = {
                  // A labels array that can contain any sort of values
                  labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
                  // Our series array that contains series objects or in this case series data arrays
                  series: [
                    [5, 2, 4, 2, 0]
                  ]
                    
                };

                // Create a new line chart object where as first parameter we pass in a selector
                // that is resolving to our chart container element. The Second parameter
                // is the actual data object.
                new Chartist.Line('.ct-chart', data);
                </script>
              </div>
            </div>
            <!-- end portlet -->
            <!-- portlet start -->
            <div class="portlet light ">
              <div class="portlet-title">
                <div class="caption font-dark">
                  <i class="icon-settings font-dark"></i>
                  <span class="caption-subject bold uppercase"> Clicks</span>
                </div>
              </div>
              <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                  <thead>
                    <tr>
                      <th> Time</th>
                      <th> Ad</th>
                      <th> AdSpace</th>
                      <th> Browser </th>
                      <th> Platform </th>
                      <th> Device Type </th>
                      <th> IP </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include("../../config.php");
                    // Create connection
                    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
                    $msql = "SELECT Click_ID, Click_Time, Click_Platform, Click_Browser, Click_Device, Click_IP, Ads.Ad_Name, AdSpaces.AdSpace_Name FROM Clicks JOIN Ads ON Clicks.Clicked_Banner_ID=Ads.Ad_ID Join AdSpaces ON Clicks.Clicked_AdSpace_ID=AdSpaces.AdSpace_Name;";
                    $result = $conn->query($msql);

                     if ($result->num_rows > 0) {
                      // output data of post
                      while($row = $result->fetch_assoc()) {
                        echo '<tr class="odd gradeX">
                                <td width="150">'.$row["Click_Time"].'</td>
                                <td>'.$row["Ad_Name"].'</td>
                                <td>'.$row["AdSpace_Name"].'</td>
                                <td>'; GetBrowser($row["Click_Browser"]);
                                echo '</td>
                                <td>'; GetOS($row["Click_Platform"]);
                                echo '</td>
                                <td>';
                                  GetDevice($row["Click_Device"]);
                                echo'</td>
                                <td>'.$row["Click_IP"].'</td>
                              </tr>';
                      }
                     }
                    $conn->close();
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- end container -->
  <!-- begin footer -->
  <div class="page-footer">
    <div class="page-footer-inner"> 2016 &copy; AdBerry
  </div>
    <!-- include some more things-->
    <script src="../plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="../plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../../js/datatable.js" type="text/javascript"></script>
</body>
</html>