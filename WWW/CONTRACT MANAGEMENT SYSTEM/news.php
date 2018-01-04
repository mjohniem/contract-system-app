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
.style3 {color: #000000}
-->
    </style>
	<script>
		function show1()
		{
		//Function content goes here
		if(document.getElementById('expand').style.display == 'none')
		
		document.getElementById('expand').style.display = 'block';
		
		else
		
			document.getElementById('expand').style.display = 'none';
		}
		function show2()
		{
		//Function content goes here
		if(document.getElementById('expand2').style.display == 'none')
		
		document.getElementById('expand2').style.display = 'block';
		
		else
		
			document.getElementById('expand2').style.display = 'none';
		}
		function show3()
		{
		//Function content goes here
		if(document.getElementById('expand3').style.display == 'none')
		
		document.getElementById('expand3').style.display = 'block';
		
		else
		
			document.getElementById('expand3').style.display = 'none';
		}
		function show4()
		{
		//Function content goes here
		if(document.getElementById('expand4').style.display == 'none')
		
		document.getElementById('expand4').style.display = 'block';
		
		else
		
			document.getElementById('expand4').style.display = 'none';
		}
	</script><style>
div#expand{
display:block;
div#expand2{
display:block;
div#expand3{
display:block;
div#expand4{
display:block;
}
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
			
			<div id="employees" style="overflow: auto; height: 350px;>
			
				<table width="100%" border="2px" align="center"  cellpadding="5" cellspacing="4" bordercolor="#000000" bordercolorlight="#666666" bordercolordark="#666666" bgcolor="#FFFFFF" frame="border" rules="cols">
					  <tr>
												<td width="580" height="50" align="center"><p class="style1 style3" style="text-align:center"><strong>View the latest contracts</strong><br />
												    <a href="javascript:;" onclick=show1()>Show/Hide Contract</a>
								</p>
												<div id="expand" style="display:none; color:#000000;">
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
							$query = "SELECT id, description, expdate FROM contracts";   //first pass just gets the columnnames 
							print "<table style='border:2px solid black; padding-left:8px; width:700px'> \n";
							print"<tr  cellspacing=3px; >
											<th style='border-right:2px solid black;'>Id</th>
											<th style='border-right:2px solid black;'>Description</th>
											<th style='border-right:2px solid black;'>Expiration Dates</th>
											</tr>";
							$result = $con->query($query);  //return only the first row (we only need field names)  
							$row =$result->fetch(PDO::FETCH_ASSOC);  
							//print " <p align=justify class=product-compare style20 style22>Online Contract in our Offer</p> \n";
									
							print " </tr> \n";  //second query gets the data  
							$data = $con->query($query); 
							$data->setFetchMode(PDO::FETCH_ASSOC);  
							foreach($data as $row)
								{
									print " <tr style='border:2px solid black'> \n"; 
									
									foreach ($row as $name=>$value)
										{
											print "
													<td width=50%; cellspacing=3px;  style='padding-left: 5px; padding-right: 5px; border-right:2px solid black;'><p align=center color=black;>$value </p></td>
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
									?></div></td>
							  <tr>
												<td width="580" height="50" align="center"><p class="style1 style3" style="text-align:center"><strong>List of Applicant</strong><br />
												    <a href="javascript:;" onclick=show2()>Show/Hide contract</a>
								</p>
												<div id="expand2" style="display:none; color:#000000;">
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
							$query = "SELECT username FROM applicants";   //first pass just gets the columnnames 
							print "<table style='border:2px solid black; padding-left:8px; width:700px'> \n";  
							$result = $con->query($query);  //return only the first row (we only need field names)  
							$row =$result->fetch(PDO::FETCH_ASSOC);  
							//print " <p align=justify class=product-compare style20 style22>Online Contract in our Offer</p> \n";
									
							print " </tr> \n";  //second query gets the data  
							$data = $con->query($query); 
							$data->setFetchMode(PDO::FETCH_ASSOC);  
							foreach($data as $row)
								{
									print " <tr style='border:2px solid black'> \n"; 
									
									foreach ($row as $name=>$value)
										{
											print "
													<td><p align=center color=black;>$value </p></td>
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
									?></div></td>
						  
									<tr></td>
												<td width="580" height="50" align="center"><p class="style1 style3" style="text-align:center"><strong>List of Qualified Applicants</strong><br />
												    <a href="javascript:;" onclick=show3()>Show/Hide Contract</a>
								</p>
												<div id="expand3" style="display:none; color:#000000;">
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
							$query = "SELECT id, username, refname FROM selected";   //first pass just gets the columnnames 
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
									</div></td>
									
						  </tr>
											  
												
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