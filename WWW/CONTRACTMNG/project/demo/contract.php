
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
.style11 {font-size: 18px}
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
					<a href="news.php">News</a>
					<ul>
						<li>
							<a href="article.php">Article</a>
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
		<div style="color: #000000;  font-size:20px; text-align:center">
			<?php
					session_start();
					error_reporting(E_ERROR|E_PARSE);
					if(isset($_SESSION["Id"]) || isset($_SESSION["username"]))
					{
					?>
					Welcome &nbsp; &nbsp;<?php echo $_SESSION["username"];?>.&nbsp; &nbsp; Click here to <a href="logout.php" title="Logout">Logout.</a>
					<?php
					}
					else
					{
					echo "Session error";
					}
					//session_register('username');
					//$name=$_GET($_SESSION['username']);
					?>
		</div>
			<div id="employees">
			
						<table width="100%" height="300" border="2px" cellpadding="5" cellspacing="4" bordercolor="#000000" bordercolorlight="#666666" bordercolordark="#666666" bgcolor="#FFFFFF" frame="border" rules="cols">
					  
							  <tr>
							  <br /><br /><br /><br /><br /><br />
								<td width="354" height="288">
								  <blockquote><blockquote><div align="center"  style="width: 120px; border:#000000 2px double solid; height: 100px; background-color:#A6CECA; padding-top:20px; "><span class="style10"><a href="#contractmodal" class="flatbtn" id="modaltrigger">Contracts on offer</a></span><br />
								      <br />
								    </div>;</blockquote>
								</blockquote>
								  <blockquote><blockquote>
								    <div align="center"  style="width: 120px; border:#000000 2px double solid; height: 100px; background-color:#A6CECA; padding-top:20px; "><span class="style10"><a href="contract.php" class="flatbtn">View if Qualified </a></span><br />
								      <br />
								    </div></blockquote>
							    </blockquote>	</td>
								
								<td width="450" rowspan="2" align="center" valign="middle">
								  <form name="form1" method="GET" action="qualified.php" name="qualify" style="background-color:#DDA3DE">
								   
								      <blockquote>
								        <blockquote>
								         <p class="style11">This is your Qualification Details </p>
							            </blockquote>
								      </blockquote>
								    
								    <?php
											session_start();
											error_reporting(E_ERROR|E_PARSE);							// configuration
																	$dbhost 	= "localhost";
																	$dbname		= "contractmng";
																	$dbuser		= "root";
																	$dbpass		= "";
																 // database connection
																 $nam=$_SESSION["username"];
																try 
																	{
																//Creating connection for mysql
																	$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);  
																	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
																	$query = "SELECT * FROM selected WHERE username='$nam'";   //first pass just gets the columnnames 
																	{									
																	print "<table class='table' style='border:2px solid black; float:left; padding-left:8px'> \n"; 
																	print"<tr  cellspacing=3px; style='color:#000000' >
																	<th style='border-right:2px solid black;'>Id</th>
																	<th width=200px; style='border-right:2px solid black;'>Username</th>
																	<th width=200px;style='border-right:2px solid black;'>Reference Name</th>
																	
																	
																	</tr>";
																	
																	
																	$result = $con->query($query);
																	
																	//return only the first row (we only need field names)  
																	$row =$result->fetchAll(PDO::FETCH_ASSOC);  
																	//print " <p align=justify class=product-compare style20 style22>Online Contract in our Offer</p> \n";
																			
																	//print " </tr> \n";  //second query gets the data  
																	
																	{
																	$data = $con->query($query); 
																	$data->setFetchMode(PDO::FETCH_ASSOC); 
																												
																	foreach($data as $row)
																		{
																			print " <tr class=tablerow; style='border:2px solid black; color:#000000; ' > \n"; 
																			
																			foreach ($row as $name=>$value)
																				{
																				print "
																							<td cellspacing=5px; style='padding-left: 5px; text-align:center;  border-right:2px solid black;'><p style='text-align:center';>$value </p></td>
																								</form>\n"; 
																				} // end field loop   
																						print " </tr> \n"; 
																					
																		} // end record loop  
																				print "</table> \n"; 
																	}		
																}
															}
																catch(PDOException $e) 
																	{
																		echo 'No Results Found ';  
																	} // end try		 
																?>	
								  </form>							    
								  </td>
								<td width="354" >
								<blockquote>
								  <blockquote>
								    <div align="center"  style="width: 120px; border:#000000 2px double solid; height: 100px; background-color:#A6CECA; padding-top:20px; "><span class="style10"><a href="#progressmodal" class="flatbtn" id="modaltrigger3">Contractor Progress Details </a></span><br />
								      <br />
								    </div>;</blockquote>
								</blockquote>
								  <blockquote><blockquote>
								    <div align="center"  style="width: 120px; border:#000000 2px double solid; height: 100px; background-color:#A6CECA; padding-top:20px; "><span class="style10"><a href="#acceptmodal" class="flatbtn" id="modaltrigger4">View Acceptance form </a></span><br />
								      <br />
								    </div></blockquote>
						  </blockquote>						  </tr>
			  </table>
				<div id="contractmodal" style="display:none; height: 300px;">
					<h1 style="text-align:center;"> &nbsp; 
					<img src="close.jpg" style="border: 0px none; float:right;" height="30" width="30" class="hidemodal1"></h1> 
					<form id="contractform" name="loginform" method="post" action="contractcon.php" style="color:#000000">
					<p>Hi <?php echo $nam ?>... press search button to Apply for the contract</p>
					
				<br />
					 <input type="submit" value="Search" class="hidemodal" style="border:#FFCAFF; background-color:#7988a3; width:70px; padding:20px 20px;font-weight: bold" >
					 
					<hr color=r"#f3f6fa 2px" />
					</form>
		  </div>
				 <div id="qualifiedmodal" style="display:none;" style="padding: 0px 10px">
					<h1>View if Qualified for the Post &nbsp; &nbsp; <img src="close.jpg" style="border: 0px none; float:right;" height="30" width="30" class="hidemodal1"></h1> 
					
					<form id="qualifiedform" name="loginform" method="post" action="" style="color:#000000">
									  
				</form>
					
				 </div><div id="progressmodal" style="display:none;">
					<h1>Make new update to progress of the contract and save.  
						<img src="close.jpg" style="border: 0px none; float:right;" height="30" width="30" class="hidemodal1"></h1> 
					<form id="progressform" name="loginform" method="post" action="prog.php">
					<hr color=r"#f3f6fa 2px" />
						<table width="100%" border="2px solid black" align="center" cellpadding="5" cellspacing="4" style="padding: 4px 4px;">
							<tr style="border-color:#f3f6fa 2px"><td style="border-right: solid #000000 2px; padding: 0px 20px; width: auto"><h1>Add new progress </h1><br />
							<form method="POST"  action=""> 
								<table width="535" height="260" border="0"  cellpadding="10" cellspacing="1">
								<tr class="tableheader">
								<td height="33" colspan="2" align="center" class="style11"><span class="style11">Fill in the Form</span></td>
								</tr>
								<tr class="tablerow">
								<td width="154" height="43" align="right" class="style11"><span class="style11">Name of Contractor</span> </td>
								<td width="338" class="style11"><input name="name" type="text" size="50" maxlength="50" pattern="[A-Za-z]+" required></td></tr>
								<tr class="tablerow">
								<td width="154" height="43" align="right" class="style11"><span class="style11">Title of the Work</span>
									
								</td>
								<td width="338" class="style11">
								<select name="title" required>
												<option ></option>
											  <option >car</option>
											  <option >land</option>
											  <option >rent</option>
											  <option >event</option>
											  <option >employment</option>
											  <option >services</option>
											  <option >construction</option>
											  </select>
								</td</tr>
								<tr class="tablerow">
								<td width="154" height="43" align="right" class="style11"><span class="style11">Materials Used</span> </td>
								<td width="338" class="style11"><input name="mused" type="text" size="50" maxlength="50" pattern="[A-Za-z0-9]+" required></td></tr>
								<tr class="tablerow">
								<td width="154" height="43" align="right" class="style11"><span class="style11">Materials Left</span> </td>
								<td width="338" class="style11"><input name="mleft" type="text" size="50" maxlength="50" pattern="[A-Za-z0-9]+" required></td></tr>
								
								<tr class="tablerow">
								<td height="41" align="right" class="style11"><span class="style11">Percentage Work completion</span> </td>
								<td class="style11"><input name="completion" type="text" id="text"  size="50" maxlength="50" pattern="[A-Za-z0-9]+" required></td></tr>
								<tr class="tablerow">
								<td height="41" align="right" class="style11"><span class="style11">Salary paid</span> </td>
								<td class="style11"><input name="spaid" type="text" id="text"  size="50" maxlength="50" pattern="[A-Za-z0-9]+" required></td></tr>
								<tr class="tablerow">
								<td height="38" align="right" class="style11"><span class="style11">salary Remaining</span></td>
								<td class="style11"><input name="sremain" type="text" size="50" maxlength="50" pattern="[A-Za-z0-9]+" required></td></tr>
								<tr class="tablerow">
								<td height="59" align="right" class="style11"><span class="style11">List of Workers</span></td>
								<td class="style11"><br />
								  <textarea name="workers" cols="37" pattern="[A-Za-z]+"></textarea></td></tr>
								
								<tr class="tableheader"><td height="39" colspan="2" class="style11">
											<input type="submit" value="submit" style="border:#FFCAFF; background-color:#7988a3; width:70px; padding:20px 20px;font-weight: bold" >
								   <input type="reset" value="reset" style="float:right; border:#FFCAFF; background-color:#7988a3; width:70px; padding:20px 20px;font-weight: bold">
								</td>
								</tr>
								</table></form>	
						
								
							</td>
							
</td>
								<td style=" padding: 0px 20px;"><h1>View recorded progress</h1><br />
									<div  style="color: #000000">
										<?php
										// configuration
											$dbhost 	= "localhost";
											$dbname		= "contractmng";
											$dbuser		= "root";
											$dbpass		= "";
										 // database connection
										 $nam=$_SESSION["username"];
										try 
											{
										//Creating connection for mysql
											$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);  
											$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$query = "SELECT * FROM progress WHERE name='$nam'";   //first pass just gets the columnnames 
											{									
											print "<table class='table' style='border:2px solid black; float:left; padding-left:8px'> \n"; 
											print"<tr width=100%; cellspacing=3px; >
											<th style='border-right:2px solid black;'>Id</th>
											<th style='border-right:2px solid black;'>Username</th>
											<th style='border-right:2px solid black;'>Title</th>
											<th style='border-right:2px solid black;'>Materials Used</th>
											<th style='border-right:2px solid black;'>Materials Left</th>
											<th style='border-right:2px solid black;'>Percentage Work Completion</th>
											<th style='border-right:2px solid black;'>Salary Paid </th>
											<th style='border-right:2px solid black;'>salary left</th>
											<th >List of Workers</th>
											
											</tr>";
											
											
											$result = $con->query($query);
											
											//return only the first row (we only need field names)  
											$row =$result->fetchAll(PDO::FETCH_ASSOC);  
											//print " <p align=justify class=product-compare style20 style22>Online Contract in our Offer</p> \n";
													
											//print " </tr> \n";  //second query gets the data  
											
											{
											$data = $con->query($query); 
											$data->setFetchMode(PDO::FETCH_ASSOC); 
																						
											foreach($data as $row)
												{
													print " <tr style='border:2px solid black'> \n"; 
													
													foreach ($row as $name=>$value)
														{
														print "
																	<td width=100%; cellspacing=5px; style='padding-left: 5px; padding-right: 5px; border-right:2px solid black;'><p align=center color=black;>$value </p></td>
																		</form>\n"; 
														} // end field loop   
																print " </tr> \n"; 
															
												} // end record loop  
														print "</table> \n"; 
											}		
										}
									}
										catch(PDOException $e) 
											{
												echo 'No Results Found ';  
											} // end try		 
										?>	
									</div>	
								
								</td>
								
							</tr>			
							<tr>
								<td style=" padding: 0px 20px;" ><hr color=r"#f3f6fa 2px" /><h1>Delete False entered progress</h1><br />
								<form action="" method="POST"> 
								<table width="535" height="260" border="0"  cellpadding="10" cellspacing="1">
								<tr class="tableheader">
								<td height="33" colspan="2" align="center" class="style11"><span class="style11">Fill in the Form</span></td>
								</tr>
								<tr class="tablerow">
								<td width="154" height="43" align="right" class="style11"><span class="style11">Name Of the Contractor</span> </td>
								<td width="338" class="style11"><input name="name" type="text" size="50" maxlength="50" required></td></tr>
								<tr class="tableheader"><td height="39" colspan="2"  class="style11">
								<input type="submit" value="Delete" class="hidemodal" style="border:#FFCAFF; background-color:#7988a3; width:70px; padding:20px 20px;font-weight: bold" >
					   <input type="reset" value="reset" style="float:right; border:#FFCAFF; background-color:#7988a3; width:70px; padding:20px 20px;font-weight: bold">
					</td>
								</tr>
								</table></form>
								
									<?php
									
										//define the variables
										//configuration
											$dbhost 	= "localhost";
											$dbname		= "contractmng";
											$dbuser		= "root";
											$dbpass		= "";
										 // database connection

											$tit=$_POST['name'];

										//check if already confirm registration
										try{
												$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
												$sql="DELETE FROM progress WHERE name=:name";
												$query=$con->prepare($sql);
												$query->execute(array(':name'=>$tit));
												if(isset($_POST['submit']))
													{
														//echo("You have successfully deleted the Progress!");
														echo'<script type="text/javascript">
																		window.alert("You have successfully deleted the Progress!")
																		window.location="contract.php";
																		</script>';
													}
												
											}
											catch(PDOException $e)
												{
													die('Could not connect to the database:' . $e);
													//echo 'No such progress found';
													echo'<script type="text/javascript">
																				window.alert("No such progress found!")
																				window.location="contract.php";
																				</script>';
																
													
												}
									?>
								</td>
								
							</tr>
					  </table>
					  <hr color=r"#f3f6fa 2px" />

					</form>
				 </div><div id="acceptmodal" style="display:none;">
					<h1>View Acceptance Form &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
								<img src="close.jpg" style="border: 0px none; float:right;"  height="30" width="30" class="hidemodal1"></h1> 
								<hr color=r"#f3f6fa 2px" />
					<form id="acceptform" name="loginform" method="GET" action="acceptance.php" style="color:#000000">
					<p>Hi <?php echo $nam ?>... press search button to find the Acceptance form</p>
					
				<br /><br /><br />
					 <input type="submit" value="Search" style="border:#FFCAFF; background-color:#7988a3; width:70px; padding:20px 20px;font-weight: bold" >
					   
					 
					<hr color=r"#f3f6fa 2px" />
				</form>	
			</div>
		</div>
	</div>
		<script type="text/javascript">
			$(function(){
			  $('#contractform').submit(function(e)
			  {
				$('#modaltrigger').leanModal({ closeButton: ".hidemodal" });
				
				});
			 $('#modaltrigger').leanModal({ closeButton: ".hidemodal1" });
			  $('#modaltrigger').leanModal();
			});

			$(function(){
			  $('#qualifiedform').submit(function(e)
			  {
				$('#modaltrigger2').leanModal({ closeButton: ".hidemodal" });
				
				});
			 $('#modaltrigger2').leanModal({ closeButton: ".hidemodal1" });
			  $('#modaltrigger2').leanModal();
			});

			$(function(){
			  $('#progressform').submit(function(e)
			  {
				//$('#modaltrigger3').leanModal({ closeButton: ".hidemodal" });
				
				});
			 $('#modaltrigger3').leanModal({ closeButton: ".hidemodal1" });
			  $('#modaltrigger3').leanModal();
			});
			$(function(){
			  $('#acceptform').submit(function(e)
			  {
				$('#modaltrigger4').leanModal({ closeButton: ".hidemodal" });
				
				});
			 $('#modaltrigger4').leanModal({ closeButton: ".hidemodal1" });
			  $('#modaltrigger4').leanModal();
			});
			</script>
	
				
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