<?php
	// create a connection and submit your details
									
	$dbhost 	= "localhost";
	$dbname		= "contractmanager";
	$dbuser		= "root";
	$dbpass		= "";
	//define the variables
	$Doc = $_POST["doc"];
	
		//check if already confirm registration
		try{
				$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
				$count=$con->prepare("SELECT  doc FROM document WHERE doc=:doc");
				$count->bindParam(":doc",$Doc);
				$count->execute();
				$no=$count->rowCount();
				if($no<0 )
					{		 
						$sql="INSERT INTO document (doc) VALUES(:doc)";
						$query=$con->prepare($sql);
						$query->execute(array(':doc'=>$Doc));
								print "You have added the Document succesifully";
								
					}
								else print "<p>passwords does not match</p>";
			}
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}
?>					