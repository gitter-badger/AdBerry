<!-- 
Name: AdBerry - A free and opensource ad server
Version: 0.0.1 Beta
Author: Matthijs Zondervan
Website: http://www.squareberry.nl/
License: Free and opensource not yet under a licene
-->
<html>

<head>
  <title>AdBerry Overview</title>
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
        <h1 class="page-title"> Users
          <small>A quick overview </small>
        </h1>
        <div class="page-bar">
          <ul class="page-breadcrumb">
            <li>
              <i class="icon-home"></i>
              <a href="index.html">Home</a>
              <i class="fa fa-angle-right"></i>
            </li>
            <li>
              <span>Dashboard</span>
            </li>
          </ul>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN DASHBOARD STATS 1-->

        <div class="clearfix"></div>

        <div class="row">
          <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
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
                        <button id="sample_editable_1_new" class="btn sbold green"> Add New
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="btn-group pull-right">
                        <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                        <ul class="dropdown-menu pull-right">
                          <li>
                            <a href="javascript:;">
                              <i class="fa fa-print"></i> Print </a>
                          </li>
                          <li>
                            <a href="javascript:;">
                              <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                          </li>
                          <li>
                            <a href="javascript:;">
                              <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                  <thead>
                    <tr>
                      <th>
                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                          <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                          <span></span>
                        </label>
                      </th>
                      <th> User ID</th>
                      <th> Username </th>
                      <th> Email </th>
                      <th> Type </th>
                      <th> Status </th>
                      <th> Active campains </th>
                      <th> Active Ads</th>
                      <th> Last Login</th>
                      <th> Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    
                    include("../../config.php");
                    // Create connection
                    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
                    $msql = "SELECT User_ID, Username, Email, User_Status, Last_Login FROM Users";
                    $result = $conn->query($msql);

                     if ($result->num_rows > 0) {
                      // output data of post
                      while($row = $result->fetch_assoc()) {
                        echo '<tr class="odd gradeX">
                                <td>
                                  <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                   </label>
                                </td>
                                <td>'.$row["User_ID"].'</td>
                                <td>'.$row["Username"].'</td>
                                <td>'.$row["Email"].'</td>
                                <td> </td>
                                <td>'; GetStatus($row["User_Status"]); echo'</td>
                                <td>'.$row["Last_login"].'</td>
                                <td> </td>
                                <td> </td>
                                <td>  
                                  <div class="btn-group">
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
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
            <!-- END EXAMPLE TABLE PORTLET-->
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
              <div class="portlet-title">
                <div class="caption font-dark">
                  <i class="icon-settings font-dark"></i>
                  <span class="caption-subject bold uppercase"> Add New User</span>
                </div>
              </div>
              <div class="portlet-body">
              </div>
              <div class="portlet-body form">
                <form role="form">
                  <div class="form-body">
                   
                   <div class="row">
                     <div class="col-md-5">
                       <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" id="form_control_1" value="">
                        <label for="form_control_1">First Name</label>
                        <span class="help-block">Some Help</span>
                      </div>
                     </div>
                     
                     <div class="col-md-5">
                       <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" id="form_control_1" value="">
                        <label for="form_control_1">Last Name</label>
                        <span class="help-block">Some Help</span>
                      </div>
                     </div>
                     
                     <div class="col-md-2">
                       <div class="form-group form-md-line-input form-md-floating-label has-info">
                        <select class="form-control edited" id="form_control_1">
                          <option value="0" selected>Dont know</option>
                          <option value="1">Male</option>
                          <option value="2">Female</option>
                        </select>
                        <label for="form_control_1">Gender</label>
                       </div>
                     </div>
                   </div>
                    
                    <div class="row">
                     <div class="col-md-6">
                       <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" id="form_control_1" value="">
                        <label for="form_control_1">Telephone number</label>
                        <span class="help-block">Some Help</span>
                      </div>
                     </div>
                     
                     <div class="col-md-6">
                       <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" id="form_control_1" value="">
                        <label for="form_control_1">Mobile number</label>
                        <span class="help-block">Some Help</span>
                      </div>
                     </div> 
                   </div>
                    
                   <div class="row">
                     <div class="col-md-4">
                       <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" id="form_control_1" value="">
                        <label for="form_control_1">Post code</label>
                        <span class="help-block">Some Help</span>
                      </div>
                     </div>
                     
                     <div class="col-md-4">
                       <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" id="form_control_1" value="">
                        <label for="form_control_1">Place</label>
                        <span class="help-block">Some Help</span>
                      </div>
                     </div>
                     
                      <div class="col-md-4">
                       <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" id="form_control_1" value="">
                        <label for="form_control_1">Country</label>
                        <span class="help-block">Some Help</span>
                      </div>
                     </div> 
                   </div>
  
                   <div class="row">
                     <div class="col-md-10">
                       <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" id="form_control_1" value="">
                        <label for="form_control_1">Street name</label>
                        <span class="help-block">Some Help</span>
                      </div>
                     </div>
                     
                     <div class="col-md-2">
                       <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" id="form_control_1" value="">
                        <label for="form_control_1">House Number</label>
                        <span class="help-block">Some Help</span>
                      </div>
                     </div>
                   </div>
                   
                   <div class="row">
                     <div class="col-md-5">
                       <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" id="form_control_1" value="">
                        <label for="form_control_1">Email adress</label>
                        <span class="help-block">Some Help</span>
                      </div>
                     </div>
                     
                     <div class="col-md-5">
                       <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" id="form_control_1" value="">
                        <label for="form_control_1">Password</label>
                        <span class="help-block">Some Help</span>
                      </div>
                     </div>
                     
                     <div class="col-md-2">
                       <div class="form-group form-md-line-input form-md-floating-label has-info">
                        <select class="form-control edited" id="form_control_1">
                          <option value="0" selected>Advertiser</option>
                          <option value="1">Ad Mangeger</option>
                          <option value="2">Admin</option>
                        </select>
                        <label for="form_control_1">User Role</label>
                       </div>
                     </div>
                   </div>                     

                </form>
              </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
          </div>
        </div>


      </div>
    </div>
  </div>
  <!-- END CONTENT BODY -->
  </div>
  <!-- END CONTENT -->
  </div>
  <!-- END CONTAINER -->
  <!-- BEGIN FOOTER -->
  <div class="page-footer">
    <div class="page-footer-inner"> 2016 &copy; AdBerry
      <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
      </div>
    </div>
    <!-- END FOOTER -->
    <!-- BEGIN CORE PLUGINS -->
    <script src="../plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="../plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="../plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="../plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../../js/datatable.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="../../js/app.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="../../js/dashboard.js" type="text/javascript"></script>
    <script src="../../js/table-datatables-managed.js" type="text/javascript"></script>
    <script src="../../js/components-bootstrap-switch.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="../../js/layout.js" type="text/javascript"></script>
    <script src="../../js/demo.js" type="text/javascript"></script>
    <script src="../../js/quick-sidebar.js" type="text/javascript"></script>
    <script src="../../js/quick-nav.js" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>