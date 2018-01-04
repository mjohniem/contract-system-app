<?php
	// create a connection and submit your details
									
	$dbhost 	= "localhost";
	$dbname		= "contractmng";
	$dbuser		= "root";
	$dbpass		= "";
	//define the variables
	$nam = $_POST["name"];
	//$add = $_POST["title"];
	$Zp = $_POST["mused"];
	$pho = $_POST["mleft"];
	$yr = $_POST["completion"];
	$ma = $_POST["spaid"];
	$mo = $_POST["sremain"];
	$vi = $_POST["workers"];
	
					
					//check if already confirm registration
		try{
				$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
				$count=$con->prepare("SELECT name FROM progress1 WHERE name=:name");
				$count->bindParam(":name",$nam);
				$count->execute();
				$no=$count->rowCount();
				if($no==0 )
				
					{		 
						$sql="INSERT INTO progress1 (name,mused,mleft,completion,spaid,sremain,workers) 
						VALUES(:name,:mused,:mleft,:completion,:spaid,:sremain,:workers)";
						$query=$con->prepare($sql);
						$query->execute(array(':name'=>$nam,':mused'=>$Zp,':mleft'=>$pho,':completion'=>$yr,':spaid'=>$ma,':sremain'=>$mo,':workers'=>$vi));
							if(isset($_POST['submit']))
							{
								echo'<script type="text/javascript">
									window.alert("The details was added successifully!")
									window.location="contract.php";
									</script>';	
								//header("location: contract.php");
							}
					}
					else 
						{
						//header("location: index.html");
										echo'<script type="text/javascript">
					window.alert("The user does not exist in our database!")
					window.location="contract.php";
					</script>';	
						}
			}
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}
?>