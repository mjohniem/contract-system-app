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
								  <form action="" method="POST"> 
								<table width="535" height="260" border="0"  cellpadding="10" cellspacing="1" style="margin-left:-120px;">
								<tr class="tableheader">
								<td height="33" colspan="2" align="center" class="style11"><span class="style11">Add Qualified Contractors </span></td>
								</tr>
								<tr class="tablerow">
								<td width="154" height="43" align="right" class="style11"><span class="style11">Name of Contractor</span> </td>
								<td width="338" class="style11"><input name="username" type="text" size="50" maxlength="50" required></td></tr>
								
								<tr class="tablerow">
								<td height="41" align="right" class="style11"><span class="style11">Reference Name Of Contract</span> </td>
								<td class="style11"><input name="refname" type="text" id="text"  size="50" maxlength="50" required></td></tr>
								
								
								<tr class="tableheader">
								  <td height="39" colspan="2" align="center" class="style11"><input name="submit" type="submit" value="Add Contractor" style="font-size:24px; padding:10px 10px; "></td>
								</tr>
								</table>
								  </form>				
								<span class="style11"></span>
								<?php
								
		//define the variables
		$dbhost 	= "localhost";
		$dbname		= "contractmng";
		$dbuser		= "root";
		$dbpass		= "";
		$name=$_POST['username'];
		$refname=$_POST['refname'];
		
		
		//check if already confirm registration
		try{
			$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
			$count=$con->prepare("SELECT  username FROM qualified WHERE username=:username");
			$count->bindParam(":username",$name);
			$count->execute();
			$no=$count->rowCount();
			if($no>0 )
			{
			
				$count=$con->prepare("SELECT  refname FROM selected WHERE refname=:refname");
				$count->bindParam(":refname",$refname);
				$count->execute();
				$no=$count->rowCount();
				if($no==0 )
				
				{		 
					$sql="INSERT INTO selected(username, refname) VALUES(:username, :refname)";
					$query=$con->prepare($sql);
					$query->execute(array(':username'=>$name, ':refname'=>$refname));
					
					if(isset($_POST['submit']))
						{
							echo'<script type="text/javascript">
							window.alert("You have successfully added the contractor!")
							</script>';
						}	
																
				}
			
				else
				{
					echo'<script type="text/javascript">
							window.alert("The contract already exist in our database!");
						</script>';
				}
			}
				
		}
		catch(PDOException $e)
		{
		die('Could not connect to the database:' . $e);
		}

	?>								</td>
								
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