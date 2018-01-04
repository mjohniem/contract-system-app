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
  <div id="w1">
    <div id="content1">
      
      <center><a href="#loginmodal1" class="flatbtn" id="modaltrigger3">UPDATE CONTRACT</a></center>
    </div>
	<hr color="red"/>
	<div id="content1">
     
      <center><a href="#registermodal1" class="flatbtn" id="modaltrigger4">REMOVE CONTRACT</a></center>
    </div>
	 <button id="btn2_click">Back</button>
	 <button id="btn4_click" style="float:right">Next</button>
  </div>
  
  <div id="loginmodal1" style="display:none;">
    <h1>Update the Contracts</h1>
    <form id="loginform1" name="loginform1" method="post" action="update.php">
      <label for="refnumber">REFERENCE NUMBER:</label>
			  <br />
			<input name="refname" type="text" class="txtfield" id="refname" tabindex="1" size="50" maxlength="100" required>
			<br />
			<br />
			<label for="canceldetails">CANCELLATION DETAILS:</label>
			<br />
			<input name="canceldetail" type="text" class="txtfield" id="canceldetail" tabindex="3" size="70" required>
      <input type="submit" name="login" id="login" class="login hidemodal " value="CANCEL" tabindex="3" style="float:left">
				<input type="reset" name="login" id="login" class="login " value="Reset" tabindex="3" style="float:right">
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu " value="UPDATE CONTRACT" tabindex="3"></div>
    </form>
  </div>
  <div id="registermodal1" style="display:none;">
    <h1>Remove the Contracts</h1>
 <form id="registerform1" name="registerform1" method="post" action="delete.php">
  <label for="refnumber">REFERENCE NUMBER:</label>
			  <br />
			<input name="refname" type="text" class="txtfield" id="refname" tabindex="1" size="50" maxlength="100" required>
			<input type="submit" name="login" id="login" class="login hidemodal" value="CANCEL" tabindex="3" style="float:left">
				<input type="reset" name="login" id="login" class="login " value="Reset" tabindex="3" style="float:right">
	        <div class="center"><input type="submit" name="regbtn" id="regbtn" class="flatbtn-blu " value="REMOVE CONTRACT" tabindex="3"></div>
    </form>
 </div>
 <script>
 $('#btn2_click').on('click', function() 
 { 
	window.location='adminoperation.php'; 
 });
 $('#btn4_click').on('click', function() 
 { 
	window.location='adminoperation3.php'; 
 });
 </script>
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
$(function(){
  $('#loginform1').submit(function(e){
    return false;
  });
  
  $('#modaltrigger3').leanModal({ top: 110, overlay: 2.00, closeButton: ".hidemodal" });
});
$(function(){
  $('#registerform1').submit(function(e){
    return false;
  });
  
  $('#modaltrigger4').leanModal({ top: 110, overlay: 2.00, closeButton: ".hidemodal" });
});
</script>
</body>
</html>