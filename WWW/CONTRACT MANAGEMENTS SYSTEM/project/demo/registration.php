<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>welcome to laikipia university online management system</title>
  <link rel="shortcut icon" href="http://designshack.net/favicon.ico">
  <link rel="icon" href="http://designshack.net/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="style.css">
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>
  <!-- jQuery plugin leanModal under MIT License http://leanmodal.finelysliced.com.au/ -->
</head>

<body>
  <div id="topbar"><a href="http://designshack.net">WELCOME TO LAIKIPIA UNIVERSITY SUPPLIER REGISTRATION PROCESS AND LOGIN</a></div>
  <div id="w">
    <div id="content">
      <h1>LOGIN FORM!</h1>
      <p>Just click the login link below to login to our site.</p>
      <center><a href="#loginmodal" class="flatbtn" id="modaltrigger">CLICK TO LOGIN</a></center>
    </div>
	<hr color="red"/>
	<div id="content">
      <h1>REGISTRATION FORM!</h1>
      <p>Just click the click to register link below below to register to our  site.</p>
      <center><a href="#registermodal" class="flatbtn" id="modaltrigger2">CLICK TO REGISTER</a></center>
    </div>
  </div>
  <div id="loginmodal" style="display:none;">
    <h1>User Login Form</h1>
    <form id="loginform" name="loginform" method="post" action="index.html">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" class="txtfield" tabindex="1" required>
      
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" class="txtfield" tabindex="2" required>
      
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Log In" tabindex="3"></div>
    </form>
  </div>
  <div id="registermodal" style="display:none;">
  <p align="center"><a href="" alt="Retail Purchase Order Form1" width="600" height="526" align="baseline" class="aligncenter size-full wp-image-21990" >  </p>

	        <div class="center"><input type="submit" name="regbtn" id="regbtn" class="flatbtn-blu hidemodal" value="SUBMIT THE FORM" tabindex="3"></div>
    </form>
 </div>
<script type="text/javascript">
$(function(){
  $('#loginform').submit(function(e){
    return false;
  });
  
  $('#modaltrigger').leanModal({ top: 110, overlay: 2.00, closeButton: ".hidemodal" });
});
$(function(){
  $('#registerform').submit(function(e){
    return false;
  });
  
  $('#modaltrigger2').leanModal({ top: 110, overlay: 2.00, closeButton: ".hidemodal" });
});
</script>
</body>
</html>