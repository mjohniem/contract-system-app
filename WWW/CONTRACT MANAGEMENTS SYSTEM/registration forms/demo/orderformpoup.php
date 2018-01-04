<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>download the Order Form from this site </title>
  <link rel="shortcut icon" href="http://designshack.net/favicon.ico">
  <link rel="icon" href="http://designshack.net/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="style.css">
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>
  <!-- jQuery plugin leanModal under MIT License http://leanmodal.finelysliced.com.au/ -->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  </head>
<body>
<div id="topbar"><a href="http://designshack.net">DOWNLOAD YOUR ORDER FORM HERE</a></div>
  <div id="w" border="1px red">
  <div id="content">
      <h1>ORDER FORM!</h1>
      <p>Just click the link below to Preview the Order Form and Download.</p>
      <center><a href="#ordermodal" class="flatbtn" id="modaltrigger3">CLICK TO PREVIEW THE ORDER FORM</a></center>
    </div>
	</div>
	<div id="ordermodal" style="display:none;">
    <form id="orderform" name="orderform" method="GET" action="orderformpoup.php">
      <div id="getsocialmain" style="height:540; width:610; background-color:#FFFFFF; margin-left:100" align="center">	
  <p align="center"><img src="Retail%20Purchase%20Order%20Form%20_%20Sample%20Forms_files/Retail-Purchase-Order-Form1.jpg" alt="Retail Purchase Order Form1" width="600" height="526" align="baseline" class="aligncenter size-full wp-image-21990" >  </p>

  <div class="center"><input type="submit" name="orderbtn" id="orderbtn" class="flatbtn-blu hidemodal" value="Download Order Form" tabindex="3"></div>
	</div>
	</form>
  </div>
  </body>
  </html>
  <script type="text/javascript">
$(function(){
  $('#orderform').submit(function(e){
    return false;
  });
  
  $('#modaltrigger3').leanModal({ top: 50, overlay: 2.00, closeButton: ".hidemodal" });
});
</script>