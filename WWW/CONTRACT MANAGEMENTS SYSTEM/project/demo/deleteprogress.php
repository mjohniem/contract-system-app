<?php
									
	//define the variables
	//configuration
		$dbhost 	= "localhost";
		$dbname		= "contractmng";
		$dbuser		= "root";
		$dbpass		= "";
	 // database connection

		$tit=$_POST['title'];

	//check if already confirm registration
	try{
			$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
			$sql="DELETE FROM progress1 WHERE title=:title";
			$query=$con->prepare($sql);
			$query->execute(array(':title'=>$tit));
			if(isset($_POST['submit']))
				{
					//echo("You have successfully deleted the Progress!");
						echo'<script type="text/javascript">
						window.alert("successifully logged in!")
						
						</script>';
					
					 
				}
			
		}
		catch(PDOException $e)
	{
		die('Could not connect to the database:' . $e);
		echo 'No such progress found';
					
		
	}
?>