<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>LU contract Management System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
<style>
.tableheader{background-color:#95BEE6; color:white; font-weight:bold;}
.tablerow{background-color:#A7D6F1; color:white;}
.message{color:FF0000; font-weight:bold; text-align:center; width:100%}
</style>
</head>
<body>
<div id="page">
		<div id="heading">
			<div id="topnav" style="text-align:center">
				<img src="images/lulogo.png" alt="Image" />
			</div>
		</div>
		<div id="header" style="width:auto;">
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
		<div  style="background-color:#ffffff; height:100; overflow:auto">
			
			<div  >
					<table width="500" height="182" border="0" align="center" cellpadding="10" cellspacing="3" style="text-align:center; font-size:20px">
						<tr class="tableheader">
							<td align="center" colspan="4">View and print the Documents</td>
						</tr>
						<tr class="tableheader">
								<td  >Id </td>
								<td  >Title </td>
								<td  colspan="2">File</td>
						</tr>
							<?php
							session_start();
							include 'conn.php';
										
							
							$sql = "SELECT * FROM docs";
								
							$result = mysql_query($sql);
							
								if(mysql_num_rows($result) > 0)
									{
										while($row = mysql_fetch_assoc($result))
											{
												?>
																			
												
												
													<tr class="tablerow">
														
														 <td ><span style="color:#0000ff; font-style:italic;"><?php echo $row['id']; ?> </span> </td>
														  <td > <span style="color:#0000ff; font-style:italic;"><?php echo $row['title']; ?> </span> </td>
														  <td >  <span style="color:#0000ff; font-style:italic;">
													<a href="uploads/<?php echo $row['file']; ?>"><?php echo $row['file']; ?>
													
													</a> </span> </td>
													<td ><span style="color:#0000ff; font-style:italic;">
													<a href="uploads/<?php echo $row['file']; ?>">
													<input type="button" onclick="Print" value="print The Document"> </a></span> </td>
												
													</tr>
																					
																				
												<?php
												
															
											}
									}					
										else 
											{
												echo'<script type="text/javascript">
													window.alert("There is no documents found!")
													window.location="index.html";
													</script>';
											}
								
										function test_input($data)
														{
															$data = trim($data);
															$data = stripslashes($data);
															$data = htmlspecialchars($data);
															return $data;
														}
									
									?>	
									
								
				
			
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
				</body>
</html>
				