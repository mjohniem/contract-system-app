<?php
session_start();
error_reporting(E_ERROR|E_PARSE);
$_SESSION['name']=$_POST['name'];
$_SESSION['email']=$_POST['email'];
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
<meta charset="UTF-8">
<title>LU online contract Management System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" type="text/css" media="all" href="style.css">
  <script type="text/javascript" src="jquery-2.1.4.js"></script>
	<script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>
	<style>
.tableheader{background-color:#95BEE6; color:white; font-weight:bold;}
.tablerow{background-color:#A7D6F1; color:white;}
.message{color:FF0000; font-weight:bold; text-align:center; width:100%}
.style11 {color: #000000}
    .style12 {color: #000000; font-size: 12px; }
    .style13 {font-size: 16px}
    .style14 {font-size: 18px}
    </style>
	
</head>
<body>

	<div id="page">
		<div id="heading">
			<div id="topnav" style="text-align:center">
				<img src="images/lulogo.png" alt="Image" />
			</div>
		</div>
		<div id="header" >
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
					<a href="news.php">News</a>
					<ul>
						<li>
							<a href="article.php">Breaking</a>
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
			
			<div id="employees" style="height: 400px; overflow: auto;">
			
						<table width="100%" height="300" border="2px" cellpadding="5" cellspacing="4" bordercolor="#000000" bordercolorlight="#666666" 							bordercolordark="#666666" bgcolor="#FFFFFF" frame="border" rules="cols">
					  
							  <tr>
							  <br /><br /><br /><br /><br /><br />
								<td width="171" height="288">
								  <blockquote class="style11"><blockquote>&nbsp;</blockquote>
								  </blockquote>
								  <blockquote class="style11"><blockquote>&nbsp;</blockquote>
							    </blockquote>	
								  <blockquote class="style11"><blockquote>&nbsp;</blockquote>
							    </blockquote></td>
								
								<td width="808" rowspan="2" align="center" valign="middle" style="background-color:#C2B1C2"><p class="style11">&nbsp;</p>
								  <p class="style11" ><a href="rentapplication.php">Rent Agreements</a><a href="eventapplication.php"></a></p>
								  <p class="style11 style11"><a href="employmentapplication.php"> Employment Agreements</a></p>
								  <p class="style11 style11"> <span class="style11"><a href="carapplication.php">Car Agreements </a></span></p>
								  <p class="style11 style11"><a href="landapplication.php">Land Agreements</a></p>
								  <p class="style11 style11"><a href="serviceapplication.php">Services Agreements</a></p>
								  <p class="style11 style11"><a href="eventapplication.php">Event Agreements</a></p>
							    <p class="style11"><a href="constructionapplication.php">Construction Agreements </a> </p></td>
								<td width="808" rowspan="2" align="center" valign="middle" ><div align="center" class="style12" id="homepage-content">
						<h1 class="style2">Contract to own a Rent</h1>
							
							<form action="rent.php" method="POST" enctype="multipart/form-data">
							  <div class="style13">								
								<p>Whereas, <input name="rname" type="text" value="renter name" size="50"> 
											(hereafter Renter) desires to possess 
											and have the use of certain property owned by Laikipia University
											(hereafter Owner) and described in Attachment A, and</p>
											<p>Whereas, the parties have agreed that Renter shall take possession of
											 the property on 
											  <input name="date" type="text" id="date" value="MM/DD/YYY" size="30" required>
											   and have the use of the property until this 
											agreement is terminated, and</p>
											<p>Whereas, Renter and Owner intend that ownership of the property shall
											 transfer to Renter upon the full completion of this agreement,</p>
											<p>Now, therefore, the parties agree as follows:</p>
								<p>Renter shall pay Owner the sum of
											  <input name="ammount" type="text" id="ammount" value="ammount" size="30"> 
								  on 
											  <input name="paymentday" type="text" id="date2" value="MM/DD/YYY" size="30"> 
								  and the same sum on the Nth day of each month for rental of the property.</p>
											<p>The parties agree that 
											  the above ammount
											  of each month's rent payment shall be applied towards purchase of the property.</p>
											<p>The parties agree that ownership of the property shall transfer to 
											Renter upon Renter's completion of 
											  total
											  payments as described above.</p>
											<p>The parties agree that if Renter fails to complete the contemplated 
											purchase of the property for any reason, no refunds or credits shall be 
											due to Renter.</p>
											<p>Renter shall maintain the property, at Renter's expense, in clean, good working order.</p>
											<p>Renter shall indemnify and hold harmless Owner against any and all 
											claims, damages, or actions arising from Renter's possession or use of 
											the property.</p>
											<p>If Renter fails to make a payment within 
											  <input name="sdate" type="text" id="days" value="days" size="30"> 
											  of its due date, 
											Renter agrees to surrender the property to Owner upon the Owner's 
											demand.</p>
											<p>
											  <input type="checkbox" required>I agreement to the terms of this contract.</p>
											<p>Renter Details. </p>
											<p>Address
											  <input name="address" type="text" id="address" value="" size="50" required>
											</p>
											<p>City/Nationality
											  <input name="city" type="text" id="city" value="" size="50" required>
											</p>
											<p><i>This contract is tagged with these keywords: rent, rent to own, 
											rental contract, lease, lease agreement, property rental, property lease</i></p>
							  </div>
								 
						
					<p><div style="text-align:center; size: 18px; height:50px; width:200px; padding: 10px 10px; background-color:#CCFFFF">
					  <input type="submit" value="SUBMIT DETAILS" name="submit">
					</div>                   
							</form>

								</div></td>
									<td width="165" >
								
								  <blockquote class="style11">&nbsp;</blockquote>
						      q							  </tr>
			  </table>
			 
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

</body>
</html>