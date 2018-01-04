<?php
	// create a connection and submit your details
									
	$dbhost 	= "localhost";
	$dbname		= "contractmanager";
	$dbuser		= "root";
	$dbpass		= "";
	//define the variables
	$name = $_POST["refname"];
	$Desc = $_POST["description"];
		//check if already confirm registration
		try{
				$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
				$count=$con->prepare("SELECT  refname FROM invitation WHERE refname=:refname");
				$count->bindParam(":refname",$name);
				$count->execute();
				$no=$count->rowCount();
				if($no<0 )
					{		 
						$sql="INSERT INTO invitation (refname,description) VALUES(:refname, :description)";
						$query=$con->prepare($sql);
						$query->execute(array(':refname'=>$name,':description'=>$Desc ));
								print "You have added the Invitation succesifully";
								
					}
								else print "<p>passwords does not match</p>";
			}
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}
?>					