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
								  <p class="style11" ><a href="eventapplication.php">Event Agreements</a></p>
								  <p class="style11 style11"><a href="employmentapplication.php"> Employment Agreements</a></p>
								  <p class="style11 style11"> <span class="style11"><a href="carapplication.php">Car Agreements </a></span></p>
								  <p class="style11 style11"><a href="landapplication.php">Land Agreements</a></p>
								  <p class="style11 style11"><a href="serviceapplication.php">Services Agreements</a></p>
								  <p class="style11 style11"><a href="rentapplication.php">Rent Agreements</a></p>
							    <p class="style11"><a href="constructionapplication.php">Construction Agreements </a> </p></td>
								<td width="808" rowspan="2" align="center" valign="middle" ><div align="center" class="style12" id="homepage-content">
						<h1 class="style2">Event Contract</h1>
							
							<form action="event.php" method="POST" enctype="multipart/form-data">
							  <div class="style13">								
										<div align="center">
										<table width="404">
										  <tbody>
											
											<tr><td width="89">Planner:</td><td width="303"><input name="planner" type="text" id="planner" size="50" required></td></tr>
											
											<tr><td>Event:</td><td><input name="event" type="text" id="event2" size="50" required></td></tr>
											
											<tr><td>Company:</td>
									  <td><input name="company" type="text" id="company2" size="50" required></td>
									</tr>
											
											<tr><td>Phone No.</td>
									<td><input name="phoneno" type="text" id="phoneno2" size="50" required></td>
									</tr>
											
											<tr><td>Email:</td><td><input name="email" type="text" id="email2" size="50" required></td></tr>
											
											<tr><td>Fax:</td>
											  <td><input name="fax" type="text" id="fax2" size="50" required></td>
											</tr>
											
											<tr><td>Address:</td><td><input name="address" type="text" id="address2" size="50" required></td>
									</tr>
										  </tbody>
										</table>
									  </div>
								  <p align="center">This document serves as a binding contract between
								  Laikipia University
								  , hereafter known as "Host," and Planner. The Host desires to engage the services of the Planner for the
								  
								  event on <b>
									<input name="date" type="text" id="date" value="date" size="50" required>
							  },</b>								  . Both parties agree to abide by the following conditions:</p>
								  <div align="center">
								  <ol>
									<li>The Event will be as follows:<br />
									  <textarea name="des" cols="50" id="desc" required>description of the event</textarea>
									  <b><br />
				                      <br />
				                      </b></li>
							  <li>The Host will pay the Planner<strong> amount indicated on the manual </strong>for all services rendered or<strong> </strong>hours of work, with the option to<br />
									  <br /> 
									  negotiate further payment for more 
							  hours worked. The Planner will be given an initial amount.</li>
									<li> The Planner will receive the additional<strong> amount as indicated </strong>at the completion of the event.<br />
								      <br />
							        </li>
									<li>In addition to event design, Planner's duties will include but not be limited to<br /><b>
									  <textarea name="duties" cols="20" id="duties">duties perfomed by the planner</textarea>
									  </b><br />
									  <br />
									</li>
									<li>Necessary lodging/travel costs incurred by the Planner<b>
									  <br />
									  <input name="agree" type="radio" id="amount32" value="will" size="20">
									  will
									  <br />
									  <input name="agree" type="radio" id="amount32" value="will not" size="20">
									  will not <br />
									  </b>be covered by the Host.<br />
									  <br />
									</li>
									<li>The Planner agrees to use Host's company logo and no other where desired.<br />
										<br />
									</li>
									<li>The Host agrees to acknowledge the Planner's services in<strong> LU </strong>, including the Planner's logo.<br />
									  <br />
							  </li>
									<li>The Host will not enter into any contracts on behalf of the Planner or without the Planner's knowledge and consent.<br />
										<br />
									</li>
									<li>If the Host cancels within<b>
									  <input name="cancelday" type="text" id="amount34" value="days" size="20">
									  </b>of the event they will be refunded<b>
										<input name="ammount" type="text" id="amount35" value="amount" size="20">
									</b>% of the original fee and after that no refund will be given.<br />
								      <br />
					          </li>
									<li>If the Planner cancels, <b>{he/she}</b> will either provide a substitute planner or refund the full fee, minus the cost of nonrefundable deposits.<br>
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