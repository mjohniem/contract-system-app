<?php
//define the variables
//configuration
	$dbhost 	= "localhost";
	$dbname		= "contractmanager";
	$dbuser		= "root";
	$dbpass		= "";
 // database connection

	$name=$_POST['refname'];
	$Cdetail=$_POST['canceldetail'];
//check if already confirm registration
try{
		$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
		$count=$con->prepare("SELECT  refname FROM cancellation WHERE refname=:refname");
		$count->bindParam(":refname",$name);
		$count->execute();
		$no=$count->rowCount();
		if($no>0 )
			{		 
				$sql="UPDATE cancellation SET canceldetail=:canceldetail WHERE refname=:refname";
				$query=$con->prepare($sql);
				$query->execute(array(':refname'=>$name, ':canceldetail'=>$Cdetail));
					echo'<script type="text/javascript">
							window.alert("You have successfully Updated the Contract!")
							</script>';		
			}
		else
			{
				echo'<script type="text/javascript">
					window.alert("The contract does not exist in our database!")
					</script>';
			}
	}
	catch(PDOException $e)
		{
			die('Could not connect to the database:' . $e);
		}

?>