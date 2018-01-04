<?php
	// create a connection and submit your details
									
	$dbhost 	= "localhost";
	$dbname		= "contractmanager";
	$dbuser		= "root";
	$dbpass		= "";
	//define the variables
	$name = $_POST["refname"];
	$cont = $_POST["contract"];
	$desc = $_POST["description"];
	$date = $_POST["expdate"];
		//check if already confirm registration
		try{
				$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
				$count=$con->prepare("SELECT  refnamme FROM contracts WHERE refname=:refname");
				$count->bindParam(":refname",$name);
				$count->execute();
				$no=$count->rowCount();
				if($no<0 )
					{		 
						$sql="INSERT INTO contracts (refname, contract, description, expdate) VALUES(:refname, :contract,  :description, :expdate)";
						$query=$con->prepare($sql);
						$query->execute(array(':refname'=>$name, ':contract'=>$cont, ':description'=>$desc, ':expdate'=>$date));
								print "You have registered succesifully";
								print "<a href='adminoperation.php'>Go to Admin Page</a>";
					}
								else print "<p>passwords does not match</p>";
			}
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}
?>					