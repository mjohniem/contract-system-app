<?php
session_start();
error_reporting(E_ERROR|E_PARSE);
if(isset($_SESSION["userid"]))

	$dbhost 	= "localhost";
	$dbname		= "contractmng";
	$dbuser		= "root";
	$dbpass		= "";
	$name = $_POST["username"];
	$pas = $_POST["password"];
		try{
				$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
				$count=$con->prepare("SELECT  * FROM officials WHERE username=:username and password=:password and title=:title");
				$count->bindParam(":username",$name);
				$count->bindParam(":password",$pas);
				$count->bindParam(":title",$tit);
				$count->execute();
				$row=$count->rowCount();
				if($row>0 )
				{
					
					echo'<script type="text/javascript">
						window.alert("successifully logged in!")
						window.location="officialpanel.php";
						</script>';
					
					 
				}
						else 
						{
						echo'<script type="text/javascript">
								window.alert("Wrong Credentials used or Not Registered!")
								window.location="offpanel.php";
								</script>';
						}
			}
						
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}
?>