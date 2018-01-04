 <div id="registermodal" style="display:none;">

		<form action="regcon.php" method="POST" id="registerform" style="border:double #00FF00 solid; ">
		<div id="regpanel">
			<h1>welcome to the Admin registration Page</h1>
			<p>Please Input the registration Details to Create an Account here!</p><br />
			<table border="2">
			<tr>
			<td height="39"><span class="style4">User Name :</span></td>
			<td><input name="userlogin" type="text" value="" size="50" required="required">
			</input></td>
			</tr>
			<tr>
			<td height="43"><span class="style4">User Identification Number</span><span class="style5">:</span></td>
			<td><input name="userid" type="text" value="" size="50" required="required">
			</input></td>
			</tr>
			<tr>
			<tr>
			<td height="42"><span class="style4">Email :</span></td>
			<td><input name="regemail" type="text" value="" size="50" required="required">
			</input></td>
			</tr>
			<tr>
			<td height="39"><span class="style4">Password :</span></td>
			<td><input name="password" type="text" value="" size="50" required="required">
			</input></td>
			</tr>
			<tr>
			<td height="37"><span class="style4">Retype Password:</span></td>
			<td><input name="regpass2" type="text" value="" size="50" required="required">
			</input></td>
			</tr>
			</table>
			<P style="font-size:24px; border:#9C8CDD; padding:10px 10px;">
			  <input name="submit" type="submit" value="REGISTER ME">
			   <input name="rstbtn" type="reset" value="RESET THE FIELDS">
			</p>

			</input>
			</div><!doctype html>
<html lang="en-US">
<head>

  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>welcome to laikipia university online management system</title>
  <link rel="shortcut icon" href="http://designshack.net/favicon.ico">
  <link rel="icon" href="http://designshack.net/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="style.css">
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>
  <!-- jQuery plugin leanModal under MIT License http://leanmodal.finelysliced.com.au/ -->
</head>

<body>
  <div id="topbar">WELCOME TO LU MANAGEMENT SYSTEM</div>
  <div id="w1">
    <div id="content">
      <h1>LOGIN FORM!</h1>
    <form id="loginform" name="loginform" method="get" action="">
      <label for="username">Username:</label>
      <input type="text" name="userlogin" id="userlogin" class="txtfield" tabindex="1" required>

	  <label for="userid">User Id:</label>
      <input type="text" name="userid" id="userid" class="txtfield" tabindex="1" required>

      <label for="password">Password:</label>
      <input type="password" name="password" id="password" class="txtfield" tabindex="2" required>
      <div class="center"><input type="submit" name="cancelbtn" id="cancelbtn" class="flatbtn-blu hidemodal" value="LOG IN" tabindex="3"></div>
    </div>
	
  </div>
		</form>
</body>
</html>
<?php
	// create a connection and submit your details
									
	$dbhost 	= "localhost";
	$dbname		= "taxmanager";
	$dbuser		= "root";
	$dbpass		= "";
	//define the variables

	$RegNo = $_GET["userid"];
	
					
					//check if already confirm registration
		try{
				$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
				$count=$con->prepare("SELECT  userid FROM users WHERE userid=:userid");
				$count->bindParam(":userid",$RegNo);
				$count->execute();
				$no=$count->rowCount();
				if($no==1 )
					{		 
						print "<h1>You have logged in succesifully</h1>";

					}
								else print "<p>passwords does not match</p>";
			}
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}
?>