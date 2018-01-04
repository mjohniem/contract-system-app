<?php
session_start();
?>
<?php
	$dbhost 	= "localhost";
	$dbname		= "contractmng";
	$dbuser		= "root";
	$dbpass		= "";
	$name = $_POST["username"];
		try{
				$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
				$count=$con->prepare("SELECT  username FROM contractor WHERE username=:username");
				$count->bindParam(":username",$name);
				$count->execute();
				$no=$count->rowCount();
				if($no>0 )
				{			
					if($_SESSION["username"] = ["username"])
					{
						
						 echo Welcome.$_SESSION["username"]; 
						header("location: contract.php");
					}
				}
				else
				{
							echo'<script type="text/javascript">
								window.alert("Wrong Credentials used or Not Registered!")
								window.location="index.html";
								</script>';
				}
			}
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}
?>