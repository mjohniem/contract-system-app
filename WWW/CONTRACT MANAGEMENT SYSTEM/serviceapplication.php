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
								<td width="105" height="288">
								  <blockquote class="style11"><blockquote>&nbsp;</blockquote>
								  </blockquote>
								  <blockquote class="style11"><blockquote>&nbsp;</blockquote>
							    </blockquote>	
								  <blockquote class="style11"><blockquote>&nbsp;</blockquote>
							    </blockquote></td>
								
								<td width="334" rowspan="2" align="center" valign="middle" style="background-color:#C2B1C2"><p class="style11">&nbsp;</p>
								  <p class="style11" ><a href="serviceapplication.php">Services Agreements</a><a href="eventapplication.php"></a></p>
								  <p class="style11 style11"><a href="employmentapplication.php"> Employment Agreements</a></p>
								  <p class="style11 style11"> <span class="style11"><a href="carapplication.php">Car Agreements </a></span></p>
								  <p class="style11 style11"><a href="landapplication.php">Land Agreements</a></p>
								  <p class="style11 style11"><a href="eventapplication.php">Event Agreements</a></p>
								  <p class="style11 style11"><a href="rentapplication.php">Rent Agreements</a></p>
							    <p class="style11"><a href="constructionapplication.php">Construction Agreements </a> </p></td>
								<td width="652" rowspan="2" align="center" valign="middle" ><div align="center" class="style12" id="homepage-content">
						<h1 class="style2">Contract For Services Rendered</h1>
							
							<form action="servicec.php" method="POST" enctype="multipart/form-data">
							  <div class="style13">								
			<p>This is a contract entered into by<input name="cname" type="text" value="contractor name" size="70" maxlength="70"> <company or="" person="" a=""> (hereinafter referred to as "the Provider") and 
  <company or="" person="" b=""> </company></company>
			  <company or="" person="" a="">
			    <company or="" person="" b=""><br>
			      Laikipia University.(hereinafter referred to as "the Client") on this
			      <input name="date" type="text" id="date" value="date">
			      <month name,="" day="" number,="" year="">.</month>
			      </company>
			    </company>
			</p>
			<p>The Provider's place of business is</p>
<p> 
  <textarea name="address" id="address">address</textarea> 
</p>
<p>and the Client's place of business is</p>
<p>Laikipia University <br>
  1100-2300,Nyahururu,<br>
  Kenya </p>
<div align="center">
  </div>
<p>The Client hereby engages the Provider to provide services described 
herein under "Scope and Manner of Services." The Provider hereby agrees 
to provide the Client with such services in exchange for consideration 
described herein under "Payment for Services Rendered."</p>
<p>Scope and Manner of Services</p>
<p>Services To Be Rendered By Provider:  enumerate here each particular task to be performed and its acceptable result, i. e.,</p>
<table width="446" border="2" align="center" cellpadding="5" cellspacing="3">
  <tr>
    <th width="424" scope="col">&nbsp;</th>
    </tr>
  <tr>
    <td><table width="492" height="153" border="4" cellpadding="9" cellspacing="7">
      <tr>
        <th width="152" height="55" scope="col">Quantities</th>
        <th width="94" scope="col">Price per Quantity</th>
        <th width="92" scope="col">Total Amount</th>
      </tr>
      <tr>
        <td height="69"><textarea name="quantity" cols="17" rows="4"></textarea></td>
        <td><textarea name="price" cols="6" rows="4"></textarea></td>
        <td><textarea name="totalamt" cols="6" rows="4"></textarea></td>
      </tr>
    </table></td>
    </tr>
</table>
<p>&nbsp;</p>
<p>The Client shall pay the Provider for services rendered according to the Payment Schedule attached, within <x> calendar days of the date on any invoice for services rendered from the Provider.</x></p>
<p>Should the Client fail to pay the Provider the full amount specified in any invoice within <x> calendar days of the invoice's date, a late fee equal to &lt;$X&gt; shall be added to the amount due and interest of <y> percent per annum shall accrue from the <xth> calendar day following the invoice's date.</xth></y></x></p>
<p>Applicable Law</p>
<p>This contract shall be governed by the laws of the Laikipia University. </p>
<p>
  <input name="policy" type="checkbox" id="policy" value="By sending this details You agree to our terms and Condition" required>
By submitting this details You agree to our terms and Condition.</p>
							  </div>
								 
						
					<p><div style="text-align:center; size: 18px; height:50px; width:200px; padding: 10px 10px; background-color:#CCFFFF">
					  <input type="submit" value="SUBMIT DETAILS" name="submit">
					</div>                   
							</form>

								</div></td>
									<td width="37" >
								
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