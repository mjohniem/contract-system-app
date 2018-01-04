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
								
								<td width="808" rowspan="2" align="center" valign="middle" style="background-color:#C2B1C2" ><p class="style11">&nbsp;</p>
								  <p class="style11" ><a href="employmentapplication.php">Employment Agreements</a></p>
								  <p class="style11 style11"><span class="style11"><a href="carapplication.php">Car Agreements </a></span></p>
								  <p class="style11 style11"><a href="eventapplication.php">Event Agreements</a> </p>
								  <p class="style11 style11"><a href="landapplication.php">Land Agreements</a></p>
								  <p class="style11 style11"><a href="serviceapplication.php">Services Agreements</a></p>
								  <p class="style11 style11"><a href="rentapplication.php">Rent Agreements</a></p>
							    <p class="style11"><a href="constructionapplication.php">Construction Agreements </a> </p></td>
								<td width="808" rowspan="2" align="center" valign="middle" ><div align="center" class="style12" id="homepage-content">
						<h1 class="style2">Employment Contract</h1>
							
							<form action="employment.php" method="POST" enctype="multipart/form-data">
							  <div class="style13">								
																	
										<p>This agreement is made and takes effect on <input type="text" name="date" value="date"> 
										  between Laikipia University
											 
										 called "Company" and the applicant.</p>
										<p>Applicant Name
										  <input type="text" name="username" id="username" size="50" maxlength="50" required>
							    </p>
											<p>Address<input type="text" name="address" id="address"  size="50" maxlength="50" required>
										  </p>
											<p>City, State, ZIP<input type="text" name="zip" id="zip"  size="50" maxlength="50" required>
										  </p>
											<p>Phone<input type="text" name="phone" id="phone"  size="50" maxlength="50" required>
								</p>
											<div align="center">
                                                         
											  </div>
											<p>Witnesseth:										</p>
										<p>1. The  Applicant would like to apply for the post referred thereafter.										</p>
										<p>2. During the Employee's employment he/she will:										</p><p>A. Devote such time and effort as may be reasonably required by the Company to perform his/her duties.
										</p><p>B. Not engage in any other employment or business activity without the Company's written consent.
										</p><p>C. Perform such duties as may reasonably be requires of him/her by the Company.
										</p><p>3. For services rendered by the Employee, the Company shall pay him/her as follows:
										</p>
										<p>A. The annual sum of $X, as agreed by the senate. </p>
										<p>B (Optional as agreed by the senate) A bonus of ($X, Y% of sales, etc.) payable (monthly, quarterly, annually) based upon (performance goals)</p>
										<p>4. Employee agrees that during his/her term of employment by the 
										Company and for a period of one year after termination of such 
										employment, he/she will not act as an employee, agent, broker, 
										shareholder, or otherwise engage in any business selling products 
										similar to those customarily sold by the Company within the States of 
										(specify).										</p>
										<p>5. Employee understands that he/she will acquire confidential 
										information of business value to the Company during the course of 
										his/her employment. Employee hereby agrees not to divulge such 
										confidential information to any other party, or to use such information 
										for his/her own profit except in performance of employment activities 
										beneficial to the Company.										</p><p>6. This agreement is an employment-at-will agreement. The Company
										 may, at any time, with or without cause, discharge the Employee by 
										giving him/her written notice of such discharge. 
										</p><p>7. Employee's employment shall terminate upon his/her death; 
										inability or failure to perform the duties required by his/her 
										employment; or his/her written notice of resignation given to the 
										Company.
										</p><p>8. Following termination of employment, all obligations under 
										this agreement shall end except for the provisions of items 4 and 5, and
										 any causes of action which may arise from the circumstances of the 
										termination.
										</p><p>9. This agreement constitutes the entire agreement between Company and Employee.
										</p><p>10. This agreement shall be interpreted and, if necessary, adjudicated in accordance with the laws of (State, County).
										</p>
										<p>11. Until written notice of other address(es) are exchanged 
										between the parties, all notices legally required shall be deemed 
										delivered by the sending of registered mail to the given address. </p>
										
										<p>
										  <input name="agree" type="checkbox" id="agree" value="agreement" required>I Agree to the terms and conditions.
										  <br>
										</p>
											
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