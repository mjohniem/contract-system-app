<?php
	// create a connection and submit your details
									
	$dbhost 	= "localhost";
	$dbname		= "procurement";
	$dbuser		= "root";
	$dbpass		= "";
	//define the variables
	$name = $_POST["userlogin"];
	$RegNo = $_POST["userid"];
	$email = $_POST["regemail"];
	$pass1 = $_POST["password"];
	$pass2 = $_POST["regpass2"];
					
					//check if already confirm registration
		try{
				$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
				$count=$con->prepare("SELECT  userid FROM users WHERE userid=:userid");
				$count->bindParam(":userid",$RegNo);
				$count->execute();
				$no=$count->rowCount();
				if($no==0 )
					{		 
						$sql="INSERT INTO users (userlogin, userid, regemail, password, regpass2 ) VALUES(:userlogin, :userid,  :regemail, :password, :regpass2)";
						$query=$con->prepare($sql);
						$query->execute(array(':userlogin'=>$name, ':userid'=>$RegNo, ':regemail'=>$email, ':password'=>$pass1, ':regpass2'=>$pass2));
								print "<h1>You have registered succesifully</h1>";
								print "<a href='index.php'>Go to Login Page</a>";
					}
								else print "<p>passwords does not match</p>";
			}
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}
?>