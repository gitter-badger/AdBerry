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
  <link rel="stylesheet" href="../plugins/chartist/chartist.min.css">
  <script src="../plugins/chartist/chartist.min.js"></script>
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
  <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="../plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
  <link href="../plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
  <link href="../plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
  
  <link href="../../css/simple-sidebar.css" rel="stylesheet" type="text/css" />
  <link href="../../css/sidebar.css" rel="stylesheet" type="text/css" />
  <link href="../../css/header.css" rel="stylesheet" type="text/css" />
  <link href="../../css/components.css" rel="stylesheet" type="text/css" />
  <link href="../../css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
  <link href="../../css/index.css" rel="stylesheet" type="text/css" />
  
  
  <link rel="shortcut icon" href="favicon.ico" />
</head>

<body class="page-header-fixed page-sidebar-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">
  <!-- include the header-->
  <?php include("header.php"); ?>
  <!-- begin page container-->
  <div class="page-container">
    <!-- include the sidebar -->
    <?php include("sidebar.php");?>
    <!-- begin main content -->
    <div class="page-content-wrapper">
      <!-- begin content body -->
      <div class="page-content">
        <!-- begin page header -->
        <h1 class="page-title"> Overview
          <small>A quick overview </small>
        </h1>
        <!-- end page header -->
        <!-- Begin quick stats -->
        <div class="row">
          <div class="col-lg-2  col-sm-4 col-xs-6">
            <a class="stats-box red" href="views.php">
              <div class="visual">
                <i class="fa fa-eye"></i>
              </div>
              <div class="details">
                <div class="number">
                  <span>
                  <?php 
                      include("../../config.php");
                      $conn =  mysql_connect($dbhost, $dbuser, $dbpass) or  
                      die("Could not connect: " . mysql_error());  ;
                      mysql_select_db($dbname);
                      $sql = mysql_query("SELECT COUNT(View_ID) AS count FROM Views");
                      $row = mysql_fetch_assoc($sql);
                      $Views = $row['count'];
                      echo $Views;
                      mysql_close($conn);
//                    test();
                      ?></span>
                </div>
                <div class="desc"> Views today </div>
              </div>
            </a>
          </div>

          <div class="col-lg-2  col-sm-4 col-xs-6">
            <a class="stats-box red" href="clicks.php">
              <div class="visual">
                <i class="fa fa-hand-pointer-o"></i>
              </div>
              <div class="details">
                <div class="number">
                  <span><?php
                      $conn =  mysql_connect($dbhost, $dbuser, $dbpass) or  
                      die("Could not connect: " . mysql_error());  ;
                      mysql_select_db($dbname);
                      $sql = mysql_query("SELECT COUNT(Click_ID) AS count FROM Clicks");
                      $row = mysql_fetch_assoc($sql);
                      $Cliks = $row['count'];
                      echo $Cliks;
                      mysql_close($conn);
//                       test();
                       ?> </span>
                </div>
                <div class="desc">clicks today</div>
              </div>
            </a>
          </div>

          <div class="col-lg-2  col-sm-4 col-xs-6">
            <a class="stats-box red" href="#">
              <div class="visual">
                <i class="fa fa-shopping-cart"></i>
              </div>
              <div class="details">
                <div class="number">
                  <span><?php $CRT = 100 / $Views * $Cliks;
                    echo $CRT."%"; ?></span>
                </div>
                <div class="desc">CRT</div>
              </div>
            </a>
          </div>

          <div class="col-lg-2  col-sm-4 col-xs-6">
            <a class="stats-box red" href="#">
              <div class="visual">
                <i class="fa fa-globe"></i>
              </div>
              <div class="details">
                <div class="number"> 125
                  <span> &euro; </span></div>
                <div class="desc"> Earnings today </div>
              </div>
            </a>
          </div>

          <div class="col-lg-2  col-sm-4 col-xs-6">
            <a class="stats-box red" href="#">
              <div class="visual">
                <i class="fa fa-globe"></i>
              </div>
              <div class="details">
                <div class="number">
                  <span><?php
                      $conn =  mysql_connect($dbhost, $dbuser, $dbpass) or  
                      die("Could not connect: " . mysql_error());  ;
                      mysql_select_db($dbname);
                      $sql = mysql_query("SELECT COUNT(Ad_ID) AS count FROM Ads");
                      $row = mysql_fetch_assoc($sql);
                      $count = $row['count'];
                      echo $count;
                      mysql_close($conn);
//                       test();
                       ?></span> </div>
                <div class="desc"> Active ads </div>
              </div>
            </a>
          </div>

          <div class="col-lg-2  col-sm-4 col-xs-6">
            <a class="stats-box red" href="#">
              <div class="visual">
                <i class="fa fa-globe"></i>
              </div>
              <div class="details">
                <div class="number"> 
                  <span><?php
                      $conn =  mysql_connect($dbhost, $dbuser, $dbpass) or  
                      die("Could not connect: " . mysql_error());  ;
                      mysql_select_db($dbname);
                      $sql = mysql_query("SELECT COUNT(Campain_ID) AS count FROM Campains");
                      $row = mysql_fetch_assoc($sql);
                      $count = $row['count'];
                      echo $count;
                      mysql_close($conn);
//                       test();
                       ?></span> </div>
                <div class="desc"> Active campains </div>
              </div>
            </a>
          </div>
        </div>
        <!-- end quick stats -->

        <div class="row">
          <div class="col-lg-12 col-xs-12 col-sm-12">
            <div class="portlet light">
              <div class="portlet-title tabbable-line">
                <div class="caption">
                  <span>Quick Actions</span>
                </div>
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a href="#tab_All" data-toggle="tab"> All </a>
                  </li>
                  <li>
                    <a href="#tab_campains" data-toggle="tab"> Campains </a>
                  </li>
                  <li>
                    <a href="#tab_ads" data-toggle="tab"> Ads </a>
                  </li>
                </ul>
              </div>
              <div class="portlet-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="">
                    <!-- BEGIN: Actions -->
                    <div class="mt-actions">
                      <div class="mt-action">
                        <div class="mt-action-body">
                          <div class="mt-action-row">
                            <div class="mt-action-info ">
                              <div class="mt-action-icon ">
                                <i class="icon-magnet"></i>
                              </div>
                              <div class="mt-action-details ">
                                <span class="mt-action-author">Natasha Kim</span>
                                <p class="mt-action-desc">Dummy text of the printing</p>
                              </div>
                            </div>
                            <div class="mt-action-datetime ">
                              <span class="mt-action-date">3 jun</span>
                              <span class="mt-action-dot bg-green"></span>
                              <span class="mt=action-time">9:30-13:00</span>
                            </div>
                            <div class="mt-action-buttons ">
                              <div class="btn-group btn-group-circle">
                                <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END: Actions -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
              <div class="portlet-title">
                <div class="caption font-dark">
                  <i class="icon-settings font-dark"></i>
                  <span class="caption-subject bold uppercase"> Managed Table</span>
                </div>
                
              </div>
              <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                  <thead>
                    <tr>
                      <th>
                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                          <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                          <span></span>
                        </label>
                      </th>
                      <th> Username </th>
                      <th> Email </th>
                      <th> Status </th>
                      <th> Joined </th>
                      <th> Actions </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd gradeX">
                      <td>
                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                          <input type="checkbox" class="checkboxes" value="1" />
                          <span></span>
                        </label>
                      </td>
                      <td> shuxer </td>
                      <td>
                        <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                      </td>
                      <td>
                        <span class="label label-sm label-success"> Approved </span>
                      </td>
                      <td class="center"> 12 Jan 2012 </td>
                      <td>
                        <div class="btn-group">
                          <button class="btn btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                            <i class="fa fa-angle-down"></i>
                          </button>
                          <ul class="dropdown-menu pull-left" role="menu">
                            <li>
                              <a href="javascript:;">
                                <i class="icon-docs"></i> New Post </a>
                            </li>
                            <li>
                              <a href="javascript:;">
                                <i class="icon-tag"></i> New Comment </a>
                            </li>
                            <li>
                              <a href="javascript:;">
                                <i class="icon-user"></i> New User </a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                              <a href="javascript:;">
                                <i class="icon-flag"></i> Comments
                                <span class="badge badge-success">4</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
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
    2016 &copy; AdBerry
  </div>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    <script src="../plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="../../js/dashboard.js" type="text/javascript"></script>
</body>

</html>