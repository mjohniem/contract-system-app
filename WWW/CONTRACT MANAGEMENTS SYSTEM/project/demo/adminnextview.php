<?php
session_start();
error_reporting(E_ERROR|E_PARSE);
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
    <style type="text/css">
<!--
.style10 {font-family: "Times New Roman", Times, serif; font-size: 18px; }
-->

    </style>
	<style>
.tableheader{background-color:#95BEE6; color:white; font-weight:bold;}
.tablerow{background-color:#A7D6F1; color:white;}
.message{color:FF0000; font-weight:bold; text-align:center; width:100%}
.style11 {color: #000000}
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
			
						<table width="100%" height="300" border="2px" cellpadding="5" cellspacing="4" bordercolor="#000000" bordercolorlight="#666666" bordercolordark="#666666" bgcolor="#FFFFFF" frame="border" rules="cols">
					  
							  <tr>
							  <br /><br /><br /><br /><br /><br />
								<td width="209" height="288">
								  <blockquote class="style11"><blockquote>
								    <div align="center"  style="width: 120px; border:#000000 2px double solid; height: 100px; background-color:#A6CECA; padding-top:20px; ">
									<span class="style10"><br />Add Contract </span><br />
								      <br />
								      <a href="adminnext.php" onclick=show()><img src="images/rexpand.PNG" style="margin-left:100px"></a>								    </div>
								    <p>&nbsp;</p>
								      </blockquote>
								</blockquote>
								  <blockquote class="style11"><blockquote>&nbsp;</blockquote>
							    </blockquote>	
								  <blockquote class="style11"><blockquote>&nbsp;</blockquote>
							    </blockquote>
								  <blockquote class="style11"><blockquote>&nbsp;</blockquote>
							    </blockquote></td>
								
								<td width="656" rowspan="2" align="center" valign="middle" style="background-image: url(images/Flowers_Nature_Landscape.jpg); cursor:auto; richness:inherit"><blockquote>
								  <blockquote>
								    <blockquote>
								      <blockquote>
								        <blockquote>
								          <blockquote>
								            <blockquote>
								              <p><span class="style11"><a href="adminpanel.php">Back page</a></span>		
							                  </p>
							                </blockquote>
								          </blockquote>
								        </blockquote>
								      </blockquote>
								    </blockquote>
								  </blockquote>
								</blockquote>
								 <?php
				// configuration
					$dbhost 	= "localhost";
					$dbname		= "contractmng";
					$dbuser		= "root";
					$dbpass		= "";
				 // database connection
				try 
					{
						//Creating connection for mysql
							$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);  
							$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							$query = "SELECT id, username, refname FROM qualified";   //first pass just gets the columnnames 
							print "<table style='border:2px solid black; padding-left:8px; width:400px'> \n"; 
							print"<tr  cellspacing=3px; >
											<th style='border-right:2px solid black;'>Id</th>
											<th style='border-right:2px solid black;'>User Name</th>
											<th style='border-right:2px solid black;'>Reference Name</th>
											</tr>\n";		
							$result = $con->query($query);  //return only the first row (we only need field names)  
							$row =$result->fetch(PDO::FETCH_ASSOC);  
							//print " <p align=justify class=product-compare style20 style22>Online Contract in our Offer</p> \n";
									
							print " </tr> \n";  //second query gets the data  
							$data = $con->query($query); 
							$data->setFetchMode(PDO::FETCH_ASSOC);  
							foreach($data as $row)
								{
									print " <tr style='border:2px solid black' > \n"; 
									
									foreach ($row as $name=>$value)
										{
											print "
													<td style='padding-left: 5px; padding-right: 5px; border-right:2px solid black;'><p align=center color=black;>$value </p></td>
														</form>\n"; 
										} // end field loop   
												print " </tr> \n";  
								} // end record loop  
										print "</table> \n";  
						}
						catch(PDOException $e) 
							{
								echo 'No Results Found ';  
							} // end try		 
									?>			
								<span class="style11"></span>
														</td>
								
																		<td width="279" >
								
								  <blockquote class="style11">
								    <div align="center"  style="width: 120px; border:#000000 2px double solid; height: 100px; background-color:#A6CECA; padding-top:20px; ">
									<span class="style10"><br />View Contract<a href="adminnextview.php" onclick=show()><img src="images/lexpand.PNG" style="float:left;" ></a> </span><br />
								      <br />
								    </div></blockquote>
								    <blockquote class="style11">&nbsp;</blockquote>
								  <blockquote class="style11">&nbsp;</blockquote>
						          <blockquote class="style11">&nbsp;</blockquote>						  </tr>
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