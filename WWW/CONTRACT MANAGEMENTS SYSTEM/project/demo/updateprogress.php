<?php
	//define the variables
	//configuration
	$dbhost 	= "localhost";
	$dbname		= "contractmng";
	$dbuser		= "root";
	$dbpass		= "";
	// database connection

	
	$nam = $_POST["name"];
	$tit = $_POST["title"];
	$mu = $_POST["mused"];
	$ml = $_POST["mleft"];
	$cop = $_POST["completion"];
	$sp = $_POST["spaid"];
	$sr = $_POST["sremain"];
	$wkrs = $_POST["workers"];
	//check if already confirm registration
	try{
		$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
		$count=$con->prepare("SELECT  title FROM progress WHERE title=:title");
		$count->bindParam(":title",$tit);
		$count->execute();
		$no=$count->rowCount();
		if($no>0 )
			{		 
				$sql="UPDATE contracts SET name=:name, title=:title, mused=:mused mleft=:mleft, completion=:completion, spaid=:spaid, sremain=:sremain, workers=:workers";
				
				$query=$con->prepare($sql);
				$query->execute(array(':name'=>$nam, ':title'=>$tit, ':mused'=>$mu, ':mleft'=>$ml, ':completion'=>$cop, ':spaid'=>$sp, ':sremain'=>$sr, ':workers'=>$wkrs));
					echo'<script type="text/javascript">
							window.alert("You have successfully Updated the Progress!")
							</script>';		
							header("location: contract.php");
			}
		else
			{
				echo'<script type="text/javascript">
					window.alert("The Progress does not exist in our database!")
					</script>';
			}
	}
	catch(PDOException $e)
		{
			die('Could not connect to the database:' . $e);
		}

	?>
								