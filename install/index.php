<html>
  <?php
  include("check.php");
  include("../config.php");
  ?>
<head>
  <link href="install.css" rel="stylesheet" type="text/css" />
  <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
    <div class="row">
      <!-- Step 1-->
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            Step 1: Check requerments
          </div>
          <div class="panel-body">
            <ul>
              <li>Config.php exists: <?php checkfile("../config.php"); ?></li>
              <li>Php version: <?php checkphpverion()?></li>
              <li>MySql version: <?php checksqlversion() ?></li>
              <li>Php menory: <?php checkphpmem()?></li>
              <li>Php max execution time:</li>
              <li>Php version:</li>
              <li>Php version:</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- end step 1-->

      <!-- step 2 -->
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            Step 2 set up the databse
          </div>
          <div class="panel-body">
            <?php
            if (isset($_POST['run'])){
              sqlinstall(); 
            }else{
              ?>
              <form method="post" action="index.php">
                <input type="submit" name="run" value="RUN">
              </form> 
              <?php
            }
            
            ?>
          </div>
        </div>
      </div>
      <!-- end step 2 -->

      <!-- step 3 -->
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            Step 3 inster main admin user
          </div>
          <div class="panel-body">
            <?php 
            if (isset($_POST['instert'])){
              insertuser($_POST['username'], $_POST['password']);
            }else{?>
            <form method="post" action="index.php">
              Username:<br>
              <input type="text" name="username" value="Admin"><br>
              Password:<br>
              <input type="password" name="password"><br><br>
              <input type="submit" name="instert" value="Submit">
            </form>
            <?php }?>
          </div>
        </div>
      </div>
      <!-- end step 3 -->

    </div>
  </div>
</body>
</html>  
<?php ?>