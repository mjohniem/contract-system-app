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
								
								<td width="808" rowspan="2" align="center" valign="middle"style="background-color:#C2B1C2" ><p class="style11">&nbsp;</p>
								  <p class="style11" ><a href="landapplication.php">Land Agreements</a><a href="eventapplication.php"></a></p>
								  <p class="style11 style11"><a href="employmentapplication.php"> Employment Agreements</a></p>
								  <p class="style11 style11"> <span class="style11"><a href="carapplication.php">Car Agreements </a></span></p>
								  <p class="style11 style11"><a href="eventapplication.php">Event Agreements</a></p>
								  <p class="style11 style11"><a href="serviceapplication.php">Services Agreements</a></p>
								  <p class="style11 style11"><a href="rentapplication.php">Rent Agreements</a></p>
							    <p class="style11"><a href="constructionapplication.php">Construction Agreements </a> </p></td>
								<td width="808" rowspan="2" align="center" valign="middle" ><div align="center" class="style12" id="homepage-content">
						<h1 class="style2">Land Contract</h1>
							
							<form action="land.php" method="POST" enctype="multipart/form-data">
							  <div class="style13">								
										<p align="center">
		The first party (henceforth known as "Buyer") agrees to purchase from 
the second party (henceforth known as "Seller") the land (henceforth 
known as
		"Land") located at the  location  described on this Contract. </p>
	                                    <p align="center">
		This Contract is executed on<b>
		<input name="date" type="text" id="date5" value="date" size="20" required>
		</b>.	</p>
	<p align="center">
		The following terms and conditions apply to this Contract:	</p>
	<div align="center">
	  <ol start="1" type="1">
	    <li class="style14">
	      <strong><u>Price</u></strong>
	      <strong>:</strong>
	      Buyer agrees to purchase the Land described above, paying a total purchase price of<b>
	      <input name="ammount" type="text" id="date6" value="" size="20" required>
	      </b>. Buyer will pay<b>
	      <input name="deposit" type="text" id="installments" value="" size="20" required>
	      </b>for a down payment, and thereafter payments will be made monthly. Monthly installments will be in the amount
	      of<b>
	      <input name="installments" type="text" id="date7" value="" size="20" required>
	      </b>, including a <strong>{5%</strong> interest rate, to be determined by<strong>{description of how interest rate will be computed}</strong>.        </li>
      </ol>
	  <ol start="2" type="1" class="style14">
	    <li>
	      <strong><u>Late fees</u></strong>
	      <strong>:</strong>
	      Buyer agrees to pay the monthly installment on the due date, with the understanding that a<strong> </strong>late fee will be
	      added to the monthly payment if said payment is more than <strong>{outlined dates}</strong> days late.        </li>
      </ol>
	  <ol start="3" type="1" class="style14">
	    <li>
	      <strong><u>End of contract</u></strong>
	      <strong>:</strong>
	      The entire balance must be paid by the<strong> the end of agreed date </strong>.</li>
      </ol>
	  <ol start="4" type="1" class="style14">
	    <li>
	      <strong><u>Default</u></strong>
	      <strong>:</strong>
	      If Buyer does not pay <strong>{agreed amounts}</strong> payments on time, Seller has the right to declare Buyer in default of this Contract.        </li>
      </ol>
	  <ol start="5" type="1" class="style14">
	    <li>
	      <strong><u>Title</u></strong>
	      <strong>:</strong>
	      Upon final payment, when entire purchase price has been paid in full,
	      Buyer agrees to provide Seller with the title(s) and/or deed(s) to the 
	      Land.
	      Seller further agrees to relinquish any and all claims to the Land. 
	      Buyer agrees to remove Seller from any liability with regard to issues 
	      that
	      arise <em><u>after</u></em> the date of the title transfer. Buyer agrees to take complete responsibility, financial and otherwise, for the Land
	      upon title transfer.        </li>
      </ol>
	  <ol start="6" type="1" class="style14">
	    <li>
	      <strong><u>Insurance</u></strong>
	      <strong>:</strong>
	      Seller agrees to maintain a hazard insurance policy on the Land of no less than <strong>{60% of total purchase]</strong> until the completion of the
	      payment plan, at which point any insurance becomes the responsibility of Buyer.        </li>
      </ol>
	  <ol start="7" type="1" class="style14">
	    <li>
	      <strong><u>Taxes</u></strong>
	      <strong>:</strong>
	      All taxes on the Land shall be the responsibility of Buyer as of the date of this Contract.        </li>
      </ol>
    </div>
	<p align="center" class="style14">&nbsp;			</p>
	<div align="center">
	 <!-- <ol start="8" type="1">
	    <li>
	      <strong><u>ADDITIONAL TERMS</u></strong>
	      <strong>:</strong>        
	      <blockquote>
	        <blockquote>
	          <blockquote>
	            <blockquote>
	              <blockquote>
	                <blockquote>
	                  <blockquote>
	                    <blockquote>
	                      <p><b>
	                        <input name="addationdoc" type="file" id="date3" value="addational terms" size="20">
	                            </b></p>
	                      <p><b>
	                        <input name="addationdoc" type="file" id="addationdoc" value="addational terms" size="20">
	                            </b></p>
	                      <p><b>
	                        <input name="addationdoc" type="file" id="addationdoc2" value="addational terms" size="20">
	                            </b></p>
	                      <p><b>
	                        <input name="addationdoc" type="file" id="addationdoc3" value="addational terms" size="20">
	                      </b></p>
	                    </blockquote>
	                    </blockquote>
	                  </blockquote>
	                </blockquote>
	              </blockquote>
	            </blockquote>
	          </blockquote>
	        </blockquote>
	    </li>
      </ol>-->
      </div>
	<p align="center">
		<strong>{insert description of any other terms agreed upon by both 
Buyer and Seller; must be inserted prior to the signing of the document}</strong></p>
	<p align="center">
	We, the undersigned, agree to this Contract and all its terms.</p>
	<p align="center"><br>
	  </p>
	<p>Seller (Print Name) 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    </p>
	<p align="left"><b>Laikipia University</b><b>&nbsp; &nbsp;</b></p>
	<p align="left"><br>
	  Buyer (Print Name) 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	<p align="center"><b>
	  <input name="buyername" type="text" id="buyername" value="" size="30" required> 
&nbsp;&nbsp;	</b></p>
	<p align="center"><br>
	  Witness (Print Name) 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	<p align="center"><b>
	  <input name="witness" type="text" id="witness" value="" size="30" required>
	</b><b>&nbsp; &nbsp;</b></p>
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