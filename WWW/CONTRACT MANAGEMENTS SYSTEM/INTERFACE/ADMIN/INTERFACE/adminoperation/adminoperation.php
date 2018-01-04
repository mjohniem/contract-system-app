<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>welcome to laikipia university online Contract management system</title>
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
      <center><a href="#loginmodal" class="flatbtn" id="modaltrigger">ADD CONTRACT</a></center>
    </div>
	<hr color="red"/>
	<div id="content">
    
      <center><a href="#registermodal" class="flatbtn" id="modaltrigger2">VIEW CONTRACT</a></center>
    </div>
	<button id="btn_click5" style="float:left">Back</button>
	 <button id="btn_click" style="float:right">Next</button>
  </div>  
  <div id="loginmodal" style="display:none;">
    <h1>Add Contract</h1>
    <form id="loginform" name="loginform" method="post" action="addreg.php">
			  <label for="refnumber">Reference Number:</label>
			  <br />
			<input name="refname" type="text" class="txtfield" id="refname" required>
			<br />
			<br />
			<label for="contract">Contract:</label>
			  <br />
			<input name="contract" type="text" class="txtfield" id="contract"  required>
			<br />
			<br />
			<label for="description">Description Of Contract:</label>
			<br />
			<textarea name="description" cols="7" rows="3" class="txtfield" id="description"  required="required"></textarea>
			<br />
			<br />
			<label for="expdate">Expiration Date:</label>
			<br />
			<input name="expdate" type="text"
			 class="txtfield" id="expdate" tabindex="3" size="30" required>
			<br />
			<br /> 
				<input type="submit" name="login" id="login" class="login hidemodal" value="CANCEL" tabindex="3" style="float:left">
				<input type="reset" name="login" id="login" class="login " value="Reset" tabindex="3" style="float:right">
      <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu " value="ADD CONTRACT" tabindex="3"></div>
    </form>
  </div>
  <div id="registermodal" style="display:none;">
  <h1>The List of Contracts</h1>
  <form id="registerform" name="registerform" method="post" action="index.html">
  <?php
// configuration
	$dbhost 	= "localhost";
	$dbname		= "procurement";
	$dbuser		= "root";
	$dbpass		= "";
 // database connection
try 
	{
		//Creating connection for mysql
			$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);  
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = "SELECT CONCAT(f_name, " ", l_name) AS Contractors Name, contract AS Contract FROM contract";   //first pass just gets the columnnames 
			print "<table> \n";  
			$result = $con->query($query);  //return only the first row (we only need field names)  
			$row =$result->fetch(PDO::FETCH_ASSOC);  
			print " <p align=justify class=product-compare style20 style22>Online Contract in our Offer</p> \n";
					
			print " </tr> \n";  //second query gets the data  
			$data = $con->query($query); 
			$data->setFetchMode(PDO::FETCH_ASSOC);  
			foreach($data as $row)
				{
					print " <tr> \n"; 
					
					foreach ($row as $name=>$value)
						{
							print "
									<td><p align=justify class=product-compare style20 style22>$value </p><td>
										</form>\n"; 
						} // end field loop   
								print " </tr> \n";  
				} // end record loop  
						print "</table> \n";  
		}
		catch(PDOException $e) 
			{
				echo 'ERROR: ' .$e->getMessage();  
			} // end try		 
					?>
	
	        <div class="center"><input type="submit" name="regbtn" id="regbtn" class="flatbtn-blu hidemodal" value="CANCEL" tabindex="3"></div>
   
 </div>

 <script>
 $('#btn_click').on('click', function() 
 { 
	window.location='adminoperation2.php'; 
 });
  $('#btn_click5').on('click', function() 
 { 
	window.location='admin.php'; 
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