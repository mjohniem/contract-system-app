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
  <div id="topbar"><a href="registration.php">WELCOME TO LAIKIPIA UNIVERSITY SUPPLIER REGISTRATION PROCESS AND LOGIN</a></div>
  <div id="w">
    <div id="content">
      <h1>LOGIN FORM!</h1>
      <p>Just click the link below to login to our site.</p>
      <center><a href="#loginmodal" class="flatbtn" id="modaltrigger">CLICK TO LOGIN</a></center>
    </div>
	<hr color="red"/>
	<div id="content">
      <h1>REGISTRATION FORM!</h1>
      <p>Just click the link below to register to our  site.</p>
      <center><a href="#registermodal" class="flatbtn" id="modaltrigger2">CLICK TO REGISTER</a></center>
    </div>
  </div>
  <div id="loginmodal" style="display:none;">
    <h1>User Login Form</h1>
    <form id="loginform" name="loginform" method="post" action="regtrial.php">
      <label for="username">Username:</label>
      <input type="text" name="userlogin" id="userlogin" class="txtfield" tabindex="1" required>

	  <label for="userid">User Id:</label>
      <input type="text" name="userid" id="userid" class="txtfield" tabindex="1" required>

      <label for="password">Password:</label>
      <input type="password" name="password" id="password" class="txtfield" tabindex="2" required>
	  <P style="font-size:24px; border:#9C8CDD; padding:10px 10px;">
			  <input name="submit" type="submit" value="LOG IN">
			   <input name="rstbtn" type="reset" value="RESET THE FIELDS">
			</p>
      <div class="center"><input type="submit" name="cancelbtn" id="cancelbtn" class="flatbtn-blu hidemodal" value="Cancel" tabindex="3"></div>
    </form>
  </div>
  <div id="registermodal" style="display:none;">

		<form action="regcon.php" method="POST" id="registerform" style="border:double #00FF00 solid; ">
		<div id="regpanel">
			<h1>welcome to the Admin registration Page</h1>
			<p>Please Input the registration Details to Create an Account here!</p><br />
			<table border="2">
			<tr>
			<td height="39"><span class="style4">User Name :</span></td>
			<td><input name="userlogin" type="text" value="" size="50" required="required">
			</input></td>
			</tr>
			<tr>
			<td height="43"><span class="style4">User Identification Number</span><span class="style5">:</span></td>
			<td><input name="userid" type="text" value="" size="50" required="required">
			</input></td>
			</tr>
			<tr>
			<tr>
			<td height="42"><span class="style4">Email :</span></td>
			<td><input name="regemail" type="text" value="" size="50" required="required">
			</input></td>
			</tr>
			<tr>
			<td height="39"><span class="style4">Password :</span></td>
			<td><input name="password" type="text" value="" size="50" required="required">
			</input></td>
			</tr>
			<tr>
			<td height="37"><span class="style4">Retype Password:</span></td>
			<td><input name="regpass2" type="text" value="" size="50" required="required">
			</input></td>
			</tr>
			</table>
			<P style="font-size:24px; border:#9C8CDD; padding:10px 10px;">
			  <input name="submit" type="submit" value="REGISTER ME">
			   <input name="rstbtn" type="reset" value="RESET THE FIELDS">
			</p>

			</input>
			</div>
			<div class="center"><input type="submit" name="cancelbtn" id="cancelbtn" class="flatbtn-blu hidemodal" value="CANCEL" tabindex="3"></div>
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