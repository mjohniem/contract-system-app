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
								
								<td width="808" rowspan="2" align="center" valign="middle" style="background-color:#C2B1C2" ><p class="style11" >&nbsp;</p>
								  <p class="style11" ><a href="constructionapplication.php">Construction Agreements </a></p>
								  <p class="style11 style11"><a href="employmentapplication.php"> Employment Agreements</a></p>
								  <p class="style11 style11"> <span class="style11"><a href="carapplication.php">Car Agreements </a></span></p>
								  <p class="style11 style11"><a href="landapplication.php">Land Agreements</a></p>
								  <p class="style11 style11"><a href="serviceapplication.php">Services Agreements</a></p>
								  <p class="style11 style11"><a href="rentapplication.php">Rent Agreements</a></p>
							    <p class="style11"> <a href="eventapplication.php">Event Agreements</a></p></td>
								<td width="808" rowspan="2" align="center" valign="middle" ><div align="center" class="style12" id="homepage-content">
						<h1 class="style2">Construction Contract</h1>
							
							<form action="const.php" method="POST" enctype="multipart/form-data">
							  <div class="style13">
								
									<p align="center">
										<strong><input type="text" name="cname" value="name of contractor"></strong>
								, henceforth known as "Builder," and <strong>Laikipia University </strong>, henceforth known as "Client," are entering into this contract this <input type="text" name="date" value="day/month/year">,
								for the purposes of establishing the provisions of the construction
								of Laikipia University.	</p>
									<div align="center">
									  <ul type="disc">
										<li>
										  Client agrees to the estimate provided by the Builder with the following changes (to which the Builder has agreed):		</li>
									  </ul>
									</div>
									<p align="center">
										<strong> 
										<textarea name="changes">changes need to be changed</textarea>
									</p>
									<div align="center">
									  <ul type="disc">
										<li class="style13">
										  Pursuant to the estimate, and the changes listed above, the Builder agrees that <strong>{he/she/it}</strong> will be constructing a			<strong>{house, building, warehouse, etc.}</strong> for the Client.		</li>
									  </ul>
									  <ul type="disc" class="style13">
										<li>
										  Client agrees to pay Builder according to the following plan:		</li>
									  </ul>
									</div>
									<p align="center" class="style13">
										<strong> {50% at the middle of work duration and the other 50% at the end of completion}</strong>	</p>
									<div align="center">
									  <ul type="disc" class="style13">
										<li>
										  Client agrees that if payment is not made according to the above 
										  plan, Builder has the right to stop all work until such time as payments
										  have been
										  brought current.		</li>
									  </ul>
									  <ul type="disc" class="style13">
										<li>
										  Client understands that if changes are necessary during the course of
										  construction, the Builder will provide the Client with a change order, 
										  and
										  the Client will be responsible for the additional incurred costs of 
										  the agreed upon changes.		</li>
									  </ul>
									  <ul type="disc" class="style13">
										<li>
										  Builder will be responsible for all materials and equipment necessary
										  for the completion of the job, which the Builder agrees were included 
										  in the
										  estimate, or were added with the changes listed above.		</li>
									  </ul>
									  <ul type="disc" class="style13">
										<li>
										  Builder agrees that construction will begin on
										  <input type="text" name="begindate" value="day/month/year">
										  , and that the crew will work			<strong>{five days a week, eight hours a day, or some other schedule}</strong>, with an estimated date of completion on
										  <input type="text" name="enddate" value="day/month/year">
										  .		</li>
									  </ul>
									  <ul type="disc" class="style13">
										<li>
										  Builder agrees that any delays and/or changes not agreed to in this 
										  document must be discussed with Client before work is to continue.		</li>
									  </ul>
									  <ul type="disc" class="style13">
										<li>
										  Builder may use subcontractors should <strong>{he/she/it}</strong> choose, with the understanding that payment to the subcontractors is the sole
										  responsibility of the Builder.		</li>
									  </ul>
									  <ul type="disc" class="style13">
										<li>
										  Builder agrees to hold an insurance policy worth
										  <input type="text" name="ammount" value="amount">
										  , which will cover equipment, materials and all employees
										  and/or subcontractors.		</li>
									  </ul>
									  <ul type="disc" class="style13">
										<li>
										  Builder agrees to obtain all necessary permits for the construction, the costs of which will be the builder's responsibility.		</li>
									  </ul>
									  <ul type="disc" class="style13">
										<li>
										  Builder agrees that <strong>{he/she/it}</strong> will remove all debris, equipment, materials, etc. from the location upon completion of the
										  construction.		</li>
									  </ul>
									  <ul type="disc">
										<li class="style13">
										  Builder agrees that all employees and/or subcontractors will be legally permitted to work in the United States.		</li>
									  </ul>
									</div>
									<p align="center">
										Invalidity or unenforceability of one or more provisions of this 
								agreement shall not affect any other provision of this agreement.	</p>
									<p align="center">
										This contract is subject to the laws and regulations of Laikipia University.									</p>
									<div align="center"><br>
									</div>
									<div align="center"><br>
									</div>
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
