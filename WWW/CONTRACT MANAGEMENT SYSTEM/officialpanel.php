<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>LU online contract Management System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" type="text/css" media="all" href="style.css">
	<link type="text/css" rel="stylesheet" href="calc.css">
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
	<script >
function c(val)
{
document.getElementById("d").value=val;
}
function v(val)
{
document.getElementById("d").value+=val;
}
function e() 
{ 
try 
{ 
  c(eval(document.getElementById("d").value)) 
} 
catch(e) 
{
  c('Error') 
} 
}  </script>
	<script>
		function show()
		{
		//Function content goes here
		if(document.getElementById('expand').style.display == 'none')
		
		document.getElementById('expand').style.display = 'block';
		
		else
		
			document.getElementById('expand').style.display = 'none';
		}
	</script>
	<script>
		function show1()
		{
		//Function content goes here
		if(document.getElementById('expand1').style.display == 'none')
		
		document.getElementById('expand1').style.display = 'block';
		
		else
		
			document.getElementById('expand1').style.display = 'none';
		}
	</script>
	<script>
		function show2()
		{
		//Function content goes here
		if(document.getElementById('expand2').style.display == 'none')
		
		document.getElementById('expand2').style.display = 'block';
		
		else
		
			document.getElementById('expand2').style.display = 'none';
		}
	</script>
	
	<script>
		function show3()
		{
		//Function content goes here
		if(document.getElementById('expand3').style.display == 'none')
		
		document.getElementById('expand3').style.display = 'block';
		
		else
		
			document.getElementById('expand3').style.display = 'none';
		}
	</script>
	<script>
		function show4()
		{
		//Function content goes here
		if(document.getElementById('expand4').style.display == 'none')
		
		document.getElementById('expand4').style.display = 'block';
		
		else
		
			document.getElementById('expand4').style.display = 'none';
		}
	</script>
	<script>
		function show5()
		{
		//Function content goes here
		if(document.getElementById('expand5').style.display == 'none')
		
		document.getElementById('expand5').style.display = 'block';
		
		else
		
			document.getElementById('expand5').style.display = 'none';
		}
	</script>
	<style>
div#expand{
display:block;
}
div#expand1{
display:block;
}
div#expand2{
display:block;
}
div#expand3{
display:block;
}
div#expand4{
display:block;
}
div#expand5{
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
			
			<div id="employees" style="height: 300px; overflow: auto;">
			
						<table width="100%" height="150" border="2px" cellpadding="5" cellspacing="4" style="bordercolor:#000000; bordercolorlight:#666666; bordercolordark:#666666; bgcolor:#FFFFFF; frame:border; rules:cols">
					  
							  <tr>
							  <br /><br /><br /><br /><br /><br />
								<td width="354" height="288"><blockquote class="style11">
								  <blockquote>
								   
								   	<!-- Content Goes here -->
								
								  
								   <p><br /> 
								     <br /> 
								     <br /> 
							        </p>
									<br />
								   <div  style="background-color:#CC99FF; width:200px; height:100px; color:#000000" >
								    <p>&nbsp;</p>
								   <a href="javascript:;" onclick=show2()> <p >Select Qualified</p>
								    <p> Contractor</p></a>
								   </div>
								  
										<!-- Content Goes here -->
								<p> <div id="expand2" style="color: #000000; display:none">
											<form action="selectqualified.php" method="POST"> 
											<table width="500" height="260" border="0"  cellpadding="10" cellspacing="1" style="margin-left:-50px;">
											<tr class="tableheader">
											<td height="33" colspan="2" align="center" class="style11"><span class="style11">Fill in the Form </span></td>
											</tr>
											<tr class="tablerow">
											<td height="41" align="right" class="style11"><span class="style11">Id Number of the Staff</span> </td>
											<td class="style11"><input name="staffid" type="text" id="text"  size="50" maxlength="50"></td></tr>
											<tr class="tablerow">
											<td height="41" align="right" class="style11"><span class="style11">Name of Contractor</span> </td>
											<td class="style11"><input name="username" type="text" id="text"  size="50" maxlength="50"></td></tr>
											<tr class="tablerow">
											<td width="154" height="43" align="right" class="style11"><span class="style11">Ref. Number of Contract</span> </td>
											<td width="338" class="style11"><input name="refname" type="text" size="50" maxlength="50"></td></tr>
											
											<tr class="tableheader"><td height="39" colspan="2" align="center" class="style11"><input name="submit" type="submit" value="Submit Details" style="font-size:24px; padding:10px 10px; "></td>
											</tr>
											</table>
										</form>	
									</div>					
								</p>
								
								</blockquote>
								</blockquote>							    </td>
								
								<td width="431" rowspan="2" align="center" valign="middle" style="background-image: url(images/Flowers_Nature_Landscape.jpg); cursor:auto; richness:inherit; color:#000000" ><blockquote>
								  </td>
								<td width="359" >
								  <blockquote class="style11">
								    <div onMouseMove="color: #ffffff" style="background-color:#CC99FF; width:200px; height:100px; color:#000000" > <p>&nbsp;</p>
								     <a href="javascript:;" onclick=show1()><p>View Contractors</p>
								     <p> Application details </p></a>
								   </div>
								   	<!-- Content Goes here -->
								<p> <div id="expand1" style="color: #000000; display:none">
									<p><?php
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
											$query = "SELECT * FROM applicants";   //first pass just gets the columnnames 
											print "<table class='table' style='border:2px solid black; float:left; padding-left:8px'> \n"; 
											print"<tr  cellspacing=3px; >
											<th style='border-right:2px solid black;'>Id</th>
											<th style='border-right:2px solid black;'>UserName</th>
											<th style='border-right:2px solid black;'>RefName</th>
											<th style='border-right:2px solid black;'>Title of Contract</th>
											<th style='border-right:2px solid black;'>Profile Details</th>
											<th style='border-right:2px solid black;'>Account Information</th>
											<th style='border-right:2px solid black;'>Documents</th>
											
											</tr>";
											$result = $con->query($query);
											
											//return only the first row (we only need field names)  
											$row =$result->fetchAll(PDO::FETCH_ASSOC);  
											//print " <p align=justify class=product-compare style20 style22>Online Contract in our Offer</p> \n";
													
											//print " </tr> \n";  //second query gets the data  
											$data = $con->query($query); 
											$data->setFetchMode(PDO::FETCH_ASSOC); 
																						
											foreach($data as $row)
												{
													print " <tr style='border:2px solid black'> \n"; 
													
													foreach ($row as $name=>$value)
														{
														print "
																	<td width=50%; cellspacing=3px; style='padding-left: 5px; padding-right: 5px; border-right:2px solid black;'><p align=center color=black;>$value </p></td>
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
									</p>
									</div>					
								</p>
								  
									
									
								  </blockquote>								    
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