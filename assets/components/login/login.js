$('document').ready(function()
{ 
  /* validation */
  $("#login-form").validate({
   rules:
   {
     password: {
     required: true,
   },
   username: {
     required: true,
     email: true
   },
   },
   messages:
   {
   password:{
    required: "please enter your password"
   },
    user_email: "please enter your email address",
   },
    submitHandler: submitForm 
   });  
   /* validation */
    
   /* login submit */
   function submitForm()
   {  
   var data = $("#login-form").serialize();
    
   $.ajax({
    
   type : 'POST',
   url  : 'login.php',
   data : data,
   beforeSend: function()
   { 
    $("#error").fadeOut();
    $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; login...');
   },
   success : function(response)
      {      
     if(response=="ok"){
         
      $("#btn-login").html('<i class="fa fa-spinner fa-spin fa-fw"></i> &nbsp; Signing In ...');
      setTimeout(' window.location.href = "home.php"; ',1000);
     }
     else if(response=="notok")
     {
      $("#btn-login").html('Wrong username or password');
      $("#error").fadeIn(1000, function(){      
      $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
      $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
     });
     }
     }
   });
    return false;
  }
    /* login submit */
});