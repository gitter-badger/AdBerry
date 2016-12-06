<!-- 
Name: AdBerry - A free and opensource ad server
Version: 0.0.1 Beta
Author: Matthijs Zondervan
Website: http://www.squareberry.nl/
License: Free and opensource not yet under a licene
-->
<html>
<head>
  <title>Adspace Overview</title>
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
        <h1 class="page-title"> Adspace
          <small>A quick overview </small>
        </h1>
        <div class="row">
          <div class="col-md-12">
            <!-- portlet start -->
            <div class="portlet light ">
              <div class="portlet-title">
                <div class="caption font-dark">
                  <i class="icon-settings font-dark"></i>
                  <span class="caption-subject bold uppercase"> Adspace</span>
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
                      <th> Name</th>
                      <th> Mobile </th>
                      <th> Tablet</th>
                      <th> Desktop </th>
                      <th> views </th>
                      <th> Clicks </th>
                      <th> Linked ads</th>
                      <th> Get code</th>
                      <th> Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    
                    include("../../config.php");
                    // Create connection
                    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
                    $msql = "SELECT AdSpace_ID, AdSpace_Name, AdSpace_Mobile_High, AdSpace_Mobile_Width, AdSpace_Tablet_Width, AdSpace_Tablet_High, AdSpace_Desktop_Width, AdSpace_Desktop_High FROM AdSpaces";
                    $result = $conn->query($msql);

                     if ($result->num_rows > 0) {
                      // output data of post
                      while($row = $result->fetch_assoc()) {
                        echo '<tr>
                                <td>'.$row["AdSpace_Name"].'</td>
                                <td>'.$row["AdSpace_Mobile_Width"] ."X". $row["AdSpace_Mobile_High"].'</td>
                                <td>'.$row["AdSpace_Tablet_Width"] ."X". $row["AdSpace_Tablet_High"].'</td>
                                <td>'.$row["AdSpace_Desktop_Width"] ."X". $row["AdSpace_Desktop_High"].'</td>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td>
                                  <button class="btn btn-xs" data-clipboard-text="AdCode">
                                      Copy to clipboard
                                  </button>
                                </td>

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
                  <span class="caption-subject bold uppercase"> Add Adspace</span>
                </div>
              </div>
              <div class="portlet-body form">
                <form role="form">
                  <div class="form-body">
                   
                   <div class="row">
                     <div class="col-md-4">
                       <div class="form-group form-line-input form-floating-label">
                        <input type="text" class="form-control" id="AdSpace_Name" value="">
                        <label for="AdSpace_Name">Adspace name</label>
                        <span class="help-block">Some Help</span>
                      </div>
                     </div>
                     <div class="col-md-6">
                       <div class="form-group form-line-input form-floating-label">
                        <input type="text" class="form-control" id="AdSpace_Desctiption" value="">
                        <label for="AdSpace_Desctiption">Adspace Desctiption</label>
                        <span class="help-block">Some Help</span>
                      </div>
                     </div>
                     <div class="col-md-2">
                       <div class="form-group form-line-input form-floating-label has-info">
                        <select class="form-control edited" id="Campain_Status">
                          <option value="0" selected>Active</option>
                          <option value="1">Pauzed</option>
                         </select>
                        <label for="Campain_Status">Campain status</label>
                       </div>
                     </div>
                    </div>
                    
                    <div class="row">
                     <div class="col-md-1">
                       <div class="form-group form-line-input form-floating-label has-info">
                        <select class="form-control edited" id="Allow_Mobile">
                          <option value="0" selected>Yes</option>
                          <option value="1">No</option>
                         </select>
                        <label for="Allow_Mobile">Allow on mobile</label>
                       </div>
                     </div>
                     <div class="col-md-3">
                       <div class="form-group form-line-input form-floating-label has-info">
                        <select class="form-control edited" id="Mobile_Size">
                          <option value="0" selected></option>
                          <option value="1">Full Banner 468 x 60</option>
                          <option value="2">skyscraper 120 x 600</option>
                          <option value="3">Leaderboard 728 x 90</option>
                          <option value="4">Full Banner 468 x 60</option>
                          <option value="5">Medium rightangle 300 x 250 </option>
                          <option value="6">Button 120 x 90</option>
                          <option value="7">Button 2 120 x 60</option>
                          <option value="8">wide skyscraper 600 x 120</option>
                          <option value="9">Full width</option>
                          <option value="10">Custom</option>
                         </select>
                        <label for="Mobile_Size">Mobile size</label>
                       </div>
                     </div>
                     <div class="col-md-1">
                       <div class="form-group form-line-input form-floating-label has-info">
                        <select class="form-control edited" id="Allow_Tablet">
                          <option value="0" selected>Yes</option>
                          <option value="1">No</option>
                         </select>
                        <label for="Allow_Tablet">Allow on tablet</label>
                       </div>
                     </div>
                     <div class="col-md-3">
                       <div class="form-group form-line-input form-floating-label has-info">
                        <select class="form-control edited" id="Tablet_Size">
                          <option value="0" selected></option>
                          <option value="1">Full Banner 468 x 60</option>
                          <option value="2">skyscraper 120 x 600</option>
                          <option value="3">Leaderboard 728 x 90</option>
                          <option value="4">Full Banner 468 x 60</option>
                          <option value="5">Medium rightangle 300 x 250 </option>
                          <option value="6">Button 120 x 90</option>
                          <option value="7">Button 2 120 x 60</option>
                          <option value="8">wide skyscraper 600 x 120</option>
                          <option value="9">Full width</option>
                          <option value="10">Custom</option>
                         </select>
                        <label for="Tablet_Size">tablet size</label>
                       </div>
                     </div>
                     <div class="col-md-1">
                       <div class="form-group form-line-input form-floating-label has-info">
                        <select class="form-control edited" id="Allow_Desktop">
                          <option value="0" selected>Yes</option>
                          <option value="1">No</option>
                         </select>
                        <label for="Allow_Desktop">Allow on Desktop</label>
                       </div>
                     </div>
                     <div class="col-md-3">
                       <div class="form-group form-line-input form-floating-label has-info">
                        <select class="form-control edited" id="Desktop_Size">
                          <option value="0" selected></option>
                          <option value="1">Full Banner 468 x 60</option>
                          <option value="2">skyscraper 120 x 600</option>
                          <option value="3">Leaderboard 728 x 90</option>
                          <option value="4">Full Banner 468 x 60</option>
                          <option value="5">Medium rightangle 300 x 250 </option>
                          <option value="6">Button 120 x 90</option>
                          <option value="7">Button 2 120 x 60</option>
                          <option value="8">wide skyscraper 600 x 120</option>
                          <option value="9">Full width</option>
                          <option value="10">Custom</option>
                         </select>
                        <label for="Desktop_Size">Desktop size</label>
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
    <!-- include some more things-->
    <script src="../plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="../plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="../../js/datatable.js" type="text/javascript"></script>
</body>
</html>