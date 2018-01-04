<?php
//define the variables
//configuration
	$dbhost 	= "localhost";
	$dbname		= "contractmanager";
	$dbuser		= "root";
	$dbpass		= "";
 // database connection

	$name=$_GET['refname'];

//check if already confirm registration
try{
		$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
		$count=$con->prepare("SELECT  refname FROM contracts WHERE refname=:refname");
		$count->bindParam(":refname",$name);
		$count->execute();
		$no=$count->rowCount();
		if($no>0 )
			{		 
				$sql="DELETE FROM contracts WHERE refname=:refname";
				$query=$con->prepare($sql);
				$query->execute(array(':refname'=>$name));
					echo'<script type="text/javascript">
							window.alert("You have successfully deleted the Contract!")
							</script>';		
			}
		else
			{
				echo'<script type="text/javascript">
					window.alert("The Contract does not exist in our database!")
					</script>';
			}
	}
	catch(PDOException $e)
		{
			die('Could not connect to the database:' . $e);
		}

?>
