
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
    	 <script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<!--
	2) Optionally override the settings defined at the top
	of the highslide.js file. The parameter hs.graphicsDir is important!
-->

<script type="text/javascript">
	hs.graphicsDir = 'highslide/graphics/';
	hs.outlineType = 'rounded-white';
	hs.showCredits = false;
	hs.wrapperClassName = 'draggable-header';
</script>
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
					<div id="employees" style="color:#000000; ">
					
						<div id="form" style="width:1000px; border:#000000 2px solid; margin-left: 80px; height: 400px; overflow:auto; text-align: center">	
			<?php
			session_start();
			error_reporting(E_ERROR|E_PARSE);
			
			include 'conn.php';				
				$sql = "SELECT * FROM officials WHERE title='admin'";
							$result = mysql_query($sql);
								if(!$result)
									{
										//the query failed,
										echo 'Error while selecting from database. Please try again later.';
									}
								else
									{
										
										while($row = mysql_fetch_assoc($result))
											{
												$fname1= $row['fname'] ;
												$mname1= $row['mname'];
												
											}
										
									}
						?>	
			<?php
			session_start();
			error_reporting(E_ERROR|E_PARSE);
			$nam=$_SESSION["username"];
			include 'conn.php';				
				$sql = "SELECT * FROM applicants WHERE username='$nam'";
							$result = mysql_query($sql);
								if(!$result)
									{
										//the query failed,
										echo 'Error while selecting from database. Please try again later.';
									}
								else
									{
										
										while($row = mysql_fetch_assoc($result))
											{
												$fname= $row['fname'] ;
												$mname= $row['mname'];
												$refname= $row['refname'];
												$expdate= $row['expdate'];
												echo '<p style="text-align:center">'.'<img src="images/lu.png" />'.'</p>';
												echo '<p style="text-align:center">Certificate of Acceptance</p>';
												 echo '<p style="text-align:center">'.'This is to certify that'.'  '.'<h1>'."$fname".'  '."$mname".'</h1>'.' '.'<p style="text-align:center">has qualified for contract referenced as'.' '.'<h2 style="text-align:center">'."$refname".'</h2>'.' '.'
												 <p style="text-align:center">expressed in the contract applied and it will be varied untill the end of the completion 
												 of his/her project on the date</p>'.' '.'<h3 style="text-align:center">'."$expdate".'</h3>'.' '.'<p style="text-align:center">as specified in the contract document.</p> 
												'.'</p>';	
												echo'<p></p>';
												echo'<p>The Administrator.</p>';
												echo '<p>'."$fname1".'  '."$mname1".'</p>';
												//echo "$fname";
											}
										
									}
						?>			
		</div>
								<input type="button" onclick="printDiv('form')" value="Print The Form" />
					
					
			<script>

			function printDiv (form)
			{
			var printcontents = document.getElementById(form).innerHTML;
			document.body.innerHTML = printcontents;
			window.print ();
			document.body.innerHTML = originalContents;
			}
			</script>
		  </div>
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