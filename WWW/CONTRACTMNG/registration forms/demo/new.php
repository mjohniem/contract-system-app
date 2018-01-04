<?php
// create a connection and submit your details
									
	$dbhost 	= "localhost";
	$dbname		= "procurement";
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
				if($no==1)
					{
						print "<a href='index.php'>Go to Login Page</a>";
					}
								else print "<p>Wrong user credentials used. Please Try again</p>";
			}
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}


?>