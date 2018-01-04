<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>LU contract Management System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" type="text/css" media="all" href="style.css">
  <script type="text/javascript" src="jquery-2.1.4.js"></script>
	<script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>
    <style type="text/css">
<!--
.style2 {font-weight: bold}
-->
    </style>
</head>
<body>

	<div id="page">
		<div id="heading">
			<div id="topnav" style="text-align:center">
				<img src="images/lulogo.png" alt="Image" />
			</div>
		</div>
		<div id="header">
			<ul>
				<li>
					<a href="index.html">Home</a>
				</li>
				
				<li>
					<a href="">Official Panel</a>
					<ul>
						<li>
							<a href="stafflogin.php">Official Staffs</a>
						</li>
						
						<li>
							<a href="adminlogin.php">Admin panel</a>
						</li>
						<li>
							<a href="financelogin.php">Finance Officer panel</a>
						</li>
					
					</ul>
			  </li>
				<li>
					<a href="policy.html">Policy</a>
				</li>
				<li>
					<a href="help.html">Help</a>
				</li>
				<li>
					<a href="news.html">News</a>
					<ul>
						<li>
							<a href="article.html">Article</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="contact.html">Contact Us</a>
				</li>
				<li>
					<a href="viewdoc.php">E-Documents</a>
				</li>
				</li>
			</ul>
		</div>
		<hr style="red 2px"/>
		<div id="secnav">
			
			<div id="employees">
			
						<table width="100%" border="2px" cellpadding="5" cellspacing="4" bordercolor="#000000" bordercolorlight="#666666" bordercolordark="#666666" bgcolor="#FFFFFF" frame="border" rules="cols">
					  
							  <tr>
								<td width="411" height="50" align="left">
								
								<ul>
											<li style="border:#FFCAFF; background-color:#FFFFFF; width:150px; padding:20px 20px; font-weight: bold">
											  <div align="center">
											    <blockquote>
											      <p><strong><a href="#loginmodal" class="flatbtn" id="modaltrigger">Contractor Section</a>
											        </strong>
										          </p>
										        </blockquote>
											   <!-- <ul class="style2">
											          
										          <li>
										            <u>
											              
										              <a href="#loginmodal" class="flatbtn" id="modaltrigger"> LOGIN</a> </u></li>
										          <li>
										            <u>
											              
									                  <a href="#registermodal" class="flatbtn" id="modaltrigger2">REGISTER</a> </u></li>
									            </ul>-->
										      </div>
								  </li>
							    </ul>	</td>
								<td width="332">&nbsp;</td>
								<td width="403">&nbsp;</td>
						  </tr>
							  <tr>
								<td height="59" align="left">
								<ul>
										  <li style="border:#FFCAFF; background-color:#FFFFFF; width:150px; padding:20px 20px;font-weight: bold">
											<div align="center">
											  <blockquote>
											    <p><a href=""><strong>Officials Registration </strong></a>
										        </p>
										      </blockquote>
											  <ul>
										        <li>
										          <a href="#adminregistermodal" class="flatbtn" id="modaltrigger3">Admin Registration</a> </li>
										        <li>
										          <a href="#staffregistermodal" class="flatbtn" id="modaltrigger4">Staffs Registration</a> </li>
										      
										      </ul>
										    </div>
								  </li>
							    </ul>	</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
						  </tr>
							  <tr>
								<td height="82" align="left">
								<ul>
										  <li style="border:#FFCAFF; background-color:#FFFFFF; width:150px; padding:20px 20px;font-weight: bold">
											<div align="center">
											  <blockquote>
											    <p><a href=""><strong>Contract Management</strong></a></p>
											  </blockquote>
											</div>
								  </li>
								  </ul>							    </td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
						  </tr>
			  </table>
				<div id="loginmodal" style="display:none;">
					<h1>User Login Form &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; <img src="close.jpg" style="border: 0px none;" height="15" width="20" class="hidemodal1"></h1> 
					<form id="loginform" name="loginform" method="post" action="validate.php">
					  <?php
									//define the variables
									//configuration
										$dbhost 	= "localhost";
										$dbname		= "contractmng";
										$dbuser		= "root";
										$dbpass		= "";
									 
									//check if already confirm registration
									try{
										//Creating connection for mysql
											$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);  
											$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$query = "SELECT details FROM contract WHERE title=:car";   //first pass just gets the columnnames 
											print "<table> \n";  
											$result = $con->query($query);  //return only the first row (we only need field names)  
											$row =$result->fetch(PDO::FETCH_ASSOC); 				
											print " </tr>";  //second query gets the data  
											$data = $con->query($query); 
											$data->setFetchMode(PDO::FETCH_ASSOC);  
											foreach($data as $row)
												{
													print " <tr> \n"; 
													
													foreach ($row as $name=>$value)
														{
															print "
																	<td><p align=justify class=product-compare style20 style22>$value </p><td>"; 
														
														} // end field loop   
																print " </tr> \n";  
												} // end record loop  
														print "</table>"; 
																				
										}
									catch(PDOException $e)
										{
											die('Could not connect to the database:' . $e);
										}

								?>
					  <input type="submit" value="submit" class="hidemodal" style="border:#FFCAFF; background-color:#7988a3; width:70px; padding:20px 20px;font-weight: bold" >
					   <input type="reset" value="reset" style="float:right; border:#FFCAFF; background-color:#7988a3; width:70px; padding:20px 20px;font-weight: bold">
					
					</form>
				 </div>
				
		</div>
	</div>
		<div id="footer">
		<table width="100%" border="2px" align="center" cellpadding="5" cellspacing="4" bordercolor="#000000" bordercolorlight="#666666" bordercolordark="#666666" bgcolor="#D3D0D7" frame="border" rules="cols">
					  
							  <tr>
								<td width="391">Nyahururu</td>
								<td width="362"> Navigation</td>
								<td width="391">Connect</td>
						  </tr>
						  <tr>
								<td width="391">P.O BOX: 21666-1002</td>
								<td width="362"><a href="index.html">*Home</a></td>
							<td width="391"><a href="http://www.freewebsitetemplates.com/misc/contact" target="_blank" id="mail"><img src="images/icons/Rss-icon.PNG" style="border: 0px none;" height="15" width="20" >Email us</a>					</td>
						  </tr>
						  <tr>
								<td width="391">TEL: +254 20 2454675</td>
								<td width="362"><a href="about.html">*About Us</a></td>
								<td width="391"><a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" id="facebook"><img src="images/icons/facebook-icon.PNG" style="border: 0px none;" height="15" width="20" >Facebook</a></td>
						  </tr>
						  <tr>
								<td width="391">WEBSITE: www.lucontract.ac.ke</td>
								<td width="362"><a href="adminpanel.html">*Admin Panel</a><br />
								<a href="policy.html">*Policy</a><br />
							<a href="doc.html">*E-Documents</a></td>
								<td width="391"><a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" id="twitter"><img src="images/icons/twitter-icon.PNG" style="border: 0px none;" height="15" width="20" >Twitter</a><br />
					<a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" id="googleplus"><img src="images/icons/Skype-icon.PNG" style="border: 0px none;" height="15" width="20" >Google&#43;</a></td>
						  </tr>
		  </table>
			<p>
				Laikipia University Online Contract Management System:: Designed by John &copy; 2016  | All Rights Reserved
			</p>
		</div>
	</div>
	<script type="text/javascript">
$(function(){
  $('#loginform').submit(function(e)
  {
  if ($("#username").val().match(/^[a-zA-Z]/) )
	{
	
	 return true;
	$('#modaltrigger').leanModal({ closeButton: ".hidemodal" });
			
	}
	else
	{
   $("#here").append(" <span style='color:red'>cannot contain such values </span>");
	return false;
	}
  });
 $('#modaltrigger').leanModal({ closeButton: ".hidemodal1" });
  $('#modaltrigger').leanModal();
});


$(function(){
  $('#registrationform').submit(function(e)
  {
	$('#modaltrigger2').leanModal({ closeButton: ".hidemodal" });
	
	});
 $('#modaltrigger2').leanModal({ closeButton: ".hidemodal1" });
  $('#modaltrigger2').leanModal();
});

$(function(){
  $('#adminregistrationform').submit(function(e)
  {
	$('#modaltrigger3').leanModal({ closeButton: ".hidemodal" });
	
	});
 $('#modaltrigger3').leanModal({ closeButton: ".hidemodal1" });
  $('#modaltrigger3').leanModal();
});

$(function(){
  $('#staffregistrationform').submit(function(e)
  {
	$('#modaltrigger4').leanModal({ closeButton: ".hidemodal" });
	
	});
 $('#modaltrigger4').leanModal({ closeButton: ".hidemodal1" });
  $('#modaltrigger4').leanModal();
});
</script>
</body>
</html>