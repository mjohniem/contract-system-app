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
 
  <div id="w">
    <div id="content">
      
      <center><a href="#loginmodal" class="flatbtn" id="modaltrigger">ADD INVITATIONS</a></center>
    </div>
	<hr color="red"/>
	<div id="content">
      
      <center><a href="#registermodal" class="flatbtn" id="modaltrigger2">ADD CONTRACT DOC.</a></center>
    </div>
	 <button id="btn_click">Back</button>
  </div>
    <div id="loginmodal" style="display:none;">
    <h1>Add Invitation to Apply</h1>
    <form id="loginform" name="loginform" method="post" action="addinvitation.php">
				<label for="refnumber">Contract:</label>
			  <br />
			<input name="refname" type="text" class="txtfield" id="refname"  required>
			<br />
			<br />
			<label for="description">Description Of Contract:</label>
			<br />
			<textarea name="description" cols="7" rows="3" class="txtfield" id="description"  required="required"></textarea>
			<br />
			<br /> 
				<input type="submit" name="login" id="login" class="login hidemodal " value="CANCEL" tabindex="3" style="float:left">
				<input type="reset" name="login" id="login" class="login " value="Reset" tabindex="3" style="float:right">			
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu " value="ADD INVITATION" tabindex="3"></div>
    </form>
  </div>
  <div id="registermodal" style="display:none;">
  <h1>Add Contract E-Documents</h1>
  <form id="registerform" name="registerform" method="GET" action="adddoc.php">
		<label for="doc">Search Document:</label>
			<br />
			<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
			<input name="doc" type="file"
			 class="txtfield" id="doc" tabindex="3" size="30" required>
			<br />
			<br />
			<input type="submit" name="login" id="login" class="login hidemodal" value="CANCEL" tabindex="3" style="float:left">
				<input type="reset" name="login" id="login" class="login " value="Reset" tabindex="3" style="float:right">
	        <div class="center"><input type="submit" name="regbtn" id="regbtn" class="flatbtn-blu " value="UPLOAD THE DOC." tabindex="3"></div>
   </form>
 </div>

 <script>
 $('#btn_click').on('click', function() 
 { 
	window.location='adminoperation2.php'; 
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