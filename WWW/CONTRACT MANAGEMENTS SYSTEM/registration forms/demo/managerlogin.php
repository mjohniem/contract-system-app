<!doctype html>
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
				$count=$con->prepare("SELECT  userid FROM officials WHERE userid=:userid");
				$count->bindParam(":userid",$RegNo);
				$count->execute();
				$no=$count->rowCount();
				if($no==1 )
					{		 
						print "<h1>You have logged in succesifully</h1>";

					}
								else 
								{print "<p>passwords does not match</p>";
			}
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}	
			}
?>