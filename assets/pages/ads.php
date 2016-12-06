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
        <h1 class="page-title"> Ads
          <small>A quick overview </small>
        </h1>
        <div class="row">
          <div class="col-md-12">
            <!-- portlet start -->
            <div class="portlet light ">
              <div class="portlet-title">
                <div class="caption font-dark">
                  <i class="icon-settings font-dark"></i>
                  <span class="caption-subject bold uppercase"> Ads</span>
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
                      <th>Ad Name</th>
                      <th> Prieview</th>
                      <th> Made by </th>
                      <th> Type </th>
                      <th> Status </th>
                      <th> Campain </th>
                      <th> Stats </th>
                      <th> Views</th>
                      <th> Clicks</th>
                      <th> Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include("../../config.php");
                    // Create connection
                    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
                    $msql = "SELECT Ad_Name, Ad_Owner_ID, Ad_Type, Ad_Status, Campain_ID FROM Ads";
                    $result = $conn->query($msql);

                     if ($result->num_rows > 0) {
                      // output data of post
                      while($row = $result->fetch_assoc()) {
                        echo '<tr>
                                <td>'.$row["Ad_Name"].'</td>
                                <td> 
                                  <a href="javascript:;" class="btn btn-xs default">
                                    <i class="fa fa-mobile fa-2x"></i>
                                  </a>
                                  <a href="javascript:;" class="btn btn-xs default">
                                    <i class="fa fa-mobile fa-2x"></i>
                                  </a>
                                  <a href="javascript:;" class="btn btn-xs default">
                                    <i class="fa fa-mobile fa-2x"></i>
                                  </a>
                                </td>
                                <td>'.$row["Ad_Owner_ID"].'</td>
                                <td>'.$row["Ad_Type"].'</td>
                                <td>'; 
                                  GetStatus($row["Ad_Status"]);
                                echo '</td>
                                <td>'.$row["Campain_ID"].'</td>
                                <td> 
                                  <a href="javascript:;" class="btn btn-xs default"> Default
                                    <i class="fa fa-user"></i>
                                  </a>
                                </td>
                                <td> </td>
                                <td> </td>
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
            <!-- begin portlet -->
            <div class="portlet light ">
              <div class="portlet-title">
                <div class="caption font-dark">
                  <i class="icon-settings font-dark"></i>
                  <span class="caption-subject bold uppercase"> Ads</span>
                </div>
              </div>
              <div class="portlet-body">
              </div>
              <div class="portlet-body form">
                <form role="form">
                  <div class="form-body">
                    <div class="row">
                     <div class="col-md-4">
                       <div class="form-group form-line-input form-floating-label">
                        <input type="text" class="form-control" id="Ad_Name" value="">
                        <label for="Ad_Name">Ad name</label>
                        <span class="help-block">Some Help</span>
                      </div>
                    </div>
                     <div class="col-md-4">
                       <div class="form-group form-line-input form-floating-label">
                        <input type="text" class="form-control" id="Ad_user" value="">
                        <label for="Ad_user">Ad user</label>
                        <span class="help-block">Some Help</span>
                      </div>
                    </div>
                    <div class="col-md-2">
                       <div class="form-group form-line-input form-floating-label has-info">
                        <select class="form-control edited" id="Campain_Status">
                          <option value="">Flash</option>
                          <option value="">HTML</option>
                          <option value="">IMG</option>
                          <option value="">Video</option>
                        </select>
                        <label for="Campain_Status">Ad type</label>
                       </div>
                     </div>
                     <div class="col-md-2">
                       <div class="form-group form-line-input form-floating-label has-info">
                        <select class="form-control edited" id="Campain_Status">
                          <option value="0">active</option>
                          <option value="1">pauzed</option>
                        </select>
                        <label for="Campain_Status">Ad status</label>
                       </div>
                     </div>
                    </div>                    
                    
                    </div>                    
                    
                    <ul class="nav nav-tabs">
                      <li class="active">
                        <a href="#Desktop" data-toggle="tab"> Desktop(Main) </a>
                      </li>
                      <li>
                        <a href="#Tablet" data-toggle="tab"> Tablet </a>
                      </li>
                      <li>
                        <a href="#Mobile" data-toggle="tab"> Mobile </a>
                      </li 
                    </ul>
                   </div>
                      <div class="tab-content">
                        <!-- Desktop(main) tab-->
                        <div class="tab-pane fade active in" id="Desktop">
                          <div class="form-group form-line-input form-floating-label form-md-floating-label has-info">
                            <select class="form-control edited" id="form_control_1">
                                <option value="0">Yes</option>
                                <option value="1">NO</option>
                               </select>
                            <label for="form_control_1">Show on desktop</label>
                          </div> 
                          
                          <!-- Tablet Tab -->
                          <div class="tab-pane fade" id="Tablet">
                            <div class="form-group form-line-input form-floating-label form-md-floating-label has-info">
                              <select class="form-control edited" id="form_control_1">
                                  <option value="0">Yes</option>
                                  <option value="1">NO</option>
                                 </select>
                              <label for="form_control_1">Show on tablet</label>
                            </div>
                          </div>
                          
                          <!-- Mobile Tab -->
                          <div class="tab-pane fade" id="Mobile">
                            <div class="form-group form-line-input form-floating-label form-md-floating-label has-info">
                              <select class="form-control edited" id="form_control_1">
                                  <option value="0">Yes</option>
                                  <option value="1">NO</option>
                                 </select>
                              <label for="form_control_1">Show on mobile</label>
                            </div>                          
                          </div>
                          
                        </div>
                      </div>
                </form>
              </div>
            </div>
            <!-- en portlet -->
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