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
<div id="p">
    <div id="content">
      <h1>PROVIDE YOUR PERSONAL DETAILS HERE!</h1>
    <form id="loginform" name="loginform" method="post" action="regtrial.php">
      <label for="username">Employee name:</label>
      <input type="text" name="Ename" id="Ename" class="txtfield" tabindex="1" required>

	  <label for="userid">Employee Id:</label>
      <input type="text" name="userid" id="userid" class="txtfield" tabindex="1" required>
	  
	  <label for="userid">User Email:</label>
      <input type="text" name="useremail" id="useremail" class="txtfield" tabindex="1" required>
	  
	  <label for="position">Work Position:</label>
      <input type="text" name="position" id="position" class="txtfield" tabindex="1" required>
       
	   <label for="userid">Account Name:</label>
      <input type="text" name="account" id="account" class="txtfield" tabindex="1" required>
	  
	  <label for="userid">Account No.:</label>
      <input type="text" name="accno" id="accno" class="txtfield" tabindex="1" required>
	  
	   <label for="userid">Your Salary.:</label>
      <input type="text" name="salary" id="salary" class="txtfield" tabindex="1" required>
	  
	  <label for="userid">Box Address:</label>
      <input type="text" name="box" id="box" class="txtfield" tabindex="1" required>
      <div class="center"><input type="submit" name="cancelbtn"  value="SUBMIT YOUR DETAILS" tabindex="3"></div>
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
	$name = $_POST["Ename"];
	$RegNo = $_POST["userid"];
	$email = $_POST["useremail"];
	$post = $_POST["position"];
	$acc = $_POST["account"];
	$sal = $_POST["salary"];
	$address = $_POST["box"];
					
					//check if already confirm registration
		try{
				$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
				$count=$con->prepare("SELECT  userid FROM details WHERE userid=:userid");
				$count->bindParam(":userid",$RegNo);
				$count->execute();
				$no=$count->rowCount();
				if($no==0 )
					{		 
						$sql="INSERT INTO details (Ename, userid, useremail, position, account, salary, box ) VALUES(:Ename, :userid,  :useremail, :position, :account, :salary, :box)";
						$query=$con->prepare($sql);
						$query->execute(array(':Ename'=>$name, ':userid'=>$RegNo, ':useremail'=>$email, ':position'=>$post, ':account'=>$acc, ':salary'=>$sal, ':box'=>$address));
								print "<h1>You have submitted your personal dtails successively</h1>";
								print "<a href='employee.php'>Go to Login Page</a>";
					}
								else 
								{
									print "<p>passwords does not match</p>";
								}
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}
			}
?>