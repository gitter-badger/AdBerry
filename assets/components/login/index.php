<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <title>AdBerry | Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="../../plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../../../css/components-md.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="login.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="favicon.ico" /> 
    </head>
    <body class=" login">
        <!-- Logo -->
        <div class="logo">
          <a target="_blank" href="https://github.com/Matthijz98/AdBerry">
            <img src="../../../img/logo.png" style="height: 100px;" alt="" /> 
          </a>
        </div>
        <!-- end logo -->
        <!-- Login content block -->
        <div class="content">
            <!-- login form using ajax to login -->
            <form class="login-form" method="post" id="login-form">
              <div class="form-title">
                <span class="form-title">Welcome.</span>
                <span class="form-subtitle">Please login.</span>
              </div>
              <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span> Enter any username and password. </span>
              </div>
              <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="email" autocomplete="off" placeholder="Email-address" name="user_email" id="user_email" /> 
              </div>
              <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" id="password"/> 
              </div>
              <div class="form-actions">
                <button type="submit" class="btn red btn-block uppercase" name="btn-login" id="btn-login">Login</button>
              </div>
              <div class="form-actions">
                <div class="pull-left">
                  <label class="rememberme mt-checkbox mt-checkbox-outline">
                    <input type="checkbox" name="remember" value="1" checked /> Remember me
                    <span></span>
                  </label>
                </div>
                <div class="pull-right forget-password-block">
                  <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                </div>
              </div>
              <div class="create-account">
                <p>
                  <a href="javascript:;" class="btn-primary btn" id="register-btn">Create an account</a>
                </p>
              </div>
            </form>
            <!-- end login -->
          
            <!-- password recover form -->
            <form class="forget-form" action="index.html" method="post">
              <div class="form-title">
                <span class="form-title">Did you foget your password?</span>
                <span class="form-subtitle">Enter your e-mail to reset it.</span>
              </div>
              <div class="form-group">
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> 
              </div>
              <div class="form-actions">
                <button type="button" id="back-btn" class="btn btn-default">Back</button>
                <button type="submit" class="btn btn-primary uppercase pull-right">Submit</button>
              </div>
            </form>
            <!-- end password recover form -->
            
            <!-- BEGIN REGISTRATION FORM -->
            <form class="register-form" action="index.html" method="post">
                <div class="form-title">
                    <span class="form-title">Sign Up</span>
                </div>
                <p class="hint"> Enter your personal details below: </p>
                <div class="form-group">
                  <label class="control-label visible-ie8 visible-ie9">First Name</label>
                  <input class="form-control placeholder-no-fix" type="text" placeholder="First Name" name="First_Name" /> </div>
                <div class="form-group">
                <div class="form-group">
                  <label class="control-label visible-ie8 visible-ie9">Last Name</label>
                  <input class="form-control placeholder-no-fix" type="text" placeholder="Last Name" name="Last_Name" /> </div>
                <div class="form-group">                  
                  <label class="control-label visible-ie8 visible-ie9">Email</label>
                  <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Address</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Address" name="address" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">City/Town</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="City/Town" name="city" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Country</label>
                    <select name="country" class="form-control">
                        <option value="">Country</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                    </select>
                </div>
                <p class="hint"> Enter your account details below: </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword" /> </div>
                <div class="form-group margin-top-20 margin-bottom-20">
                    <label class="mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="tnc" /> I agree to the
                        <a href="javascript:;">Terms of Service </a> &
                        <a href="javascript:;">Privacy Policy </a>
                        <span></span>
                    </label>
                    <div id="register_tnc_error"> </div>
                </div>
                <div class="form-actions">
                    <button type="button" id="register-back-btn" class="btn btn-default">Back</button>
                    <button type="submit" id="register-submit-btn" class="btn red uppercase pull-right">Submit</button>
                </div>
            </form>
            <!-- END REGISTRATION FORM -->
        </div>
        <!-- Copyright hiden by default remove "hide" to activate-->
        <div class="copyright hide"> 2016 © Adberry. The free and opensource ad server. </div>
        <!-- END LOGIN -->
    <!-- BEGIN CORE PLUGINS -->
        <script src="../../plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../../plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../../plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../../plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="../../plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script> 
        <script src="../../plugins/select2/js/select2.full.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../../../js/app.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="login.js" type="text/javascript"></script>
        <script src="validate.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>