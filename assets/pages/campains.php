<!-- 
Name: AdBerry - A free and opensource ad server
Version: 0.0.1 Beta
Author: Matthijs Zondervan
Website: http://www.squareberry.nl/
License: Free and opensource not yet under a licene
-->
<html>

<head>
  <title>AdBerry Campains</title>
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
        <h1 class="page-title"> Campains
          <small>A quick overview </small>
        </h1>
        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12">
            <!-- portlet start -->
            <div class="portlet light ">
              <div class="portlet-title">
                <div class="caption font-dark">
                  <i class="icon-settings font-dark"></i>
                  <span class="caption-subject bold uppercase"> Users</span>
                </div>
              </div>
              <div class="portlet-body">
                <div class="table-toolbar">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="btn-group">
                        <button id="sample_editable_1_new" class="btn sbold red"> Add New
                          <i class="fa fa-plus"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                  <thead>
                    <tr>
                      <th> Name</th>
                      <th> Manager </th>
                      <th> Start date </th>
                      <th> End date</th>
                      <th> Status </th>
                      <th> Max views </th>
                      <th> Max Clicks</th>
                      <th> Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    
                    include("../../config.php");
                    // Create connection
                    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
                    $msql = "SELECT Campain_Name, Campain_User_ID, Campain_Start_Date, Campain_End_Date, Campain_Status FROM Campains";
                    $result = $conn->query($msql);

                     if ($result->num_rows > 0) {
                      // output data of post
                      while($row = $result->fetch_assoc()) {
                        echo '<tr class="odd gradeX">
                                <td>'.$row["Campain_Name"].'</td>
                                <td>'.$row["Campain_User_ID"].'</td>
                                <td>'.$row["Campain_Start_Date"].'</td>
                                <td>'.$row["Campain_End_Date"].'</td>
                                <td>'; GetStatus($row["Campain_Status"]); echo'</td>
                                <td>'.$row["Campains_Max_Views"].'</td>
                                <td>'.$row["Campains_Max_Clicks"].'</td>
                                <td>  
                                  <div class="btn-group">
                                    <button class="btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                      <i class="fa fa-angle-down"></i>
                                   </button>
                                   <ul class="dropdown-menu pull-left" role="menu">
                                    <li>
                                      <a href="javascript:;">
                                        <i class="icon-docs"></i>Edit</a>
                                    </li>
                                    <li>
                                      <a href="javascript:;">
                                        <i class="icon-tag"></i> Delete </a>
                                    </li>
                                  </ul>
                        </div> </td>
                              </tr>';
                      }
                     }
                    $conn->close();
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- end portlet -->
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <!-- portlet start -->
            <div class="portlet light ">
              <div class="portlet-title">
                <div class="caption font-dark">
                  <i class="icon-settings font-dark"></i>
                  <span class="caption-subject bold uppercase"> Add New Campain</span>
                </div>
              </div>
              <div class="portlet-body form">
                <form role="form">
                  <div class="form-body">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group form-line-input form-floating-label">
                          <input type="text" class="form-control" id="Campain_Name" value="">
                          <label for="form_control_1">Campain name</label>
                          <span class="help-block">Some Help</span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group form-line-input form-floating-label">
                          <input type="text" class="form-control" id="Campain_User_ID" value="">
                          <label for="form_control_1">Assign to user</label>
                          <span class="help-block">Some Help</span>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group form-line-input form-floating-label">
                          <input type="datetime" class="form-control" id="Campain_Start_Date" value="">
                          <label for="form_control_1">Campain start date</label>
                          <span class="help-block">Some Help</span>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group form-line-input form-floating-label">
                          <input type="datetime" class="form-control" id="Campain_End_Date" value="">
                          <label for="form_control_1">Campain end date</label>
                          <span class="help-block">Some Help</span>
                        </div>
                      </div>
                    </div>
                        <h4>
                        Set a limit for this campain (when limit reached campain is pauzed)
                      </h4>
                    <div class="row">
                  
                      <div class="col-md-4">
                        <div class="form-group form-line-input form-floating-label has-info">
                          <select class="form-control edited" id="Campain_Limit_Type">
                          <option value="0" selected>Clicks</option>
                          <option value="1">Views</option>
                          <option value="2">Euro Spent</option>
                        </select>
                          <label for="form_control_1">limit type</label>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="form-group form-line-input form-floating-label">
                          <input type="number" class="form-control" id="form_control_1" value="">
                          <label for="form_control_1">Amount</label>
                          <span class="help-block">Some Help</span>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            <!-- end portlet -->
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
    <script src="../plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="../plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../../js/datatable.js" type="text/javascript"></script>
</body>
</html>