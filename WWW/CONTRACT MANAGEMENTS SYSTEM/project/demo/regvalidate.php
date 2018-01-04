<?php
session_start();
?>
	<?php
	// create a connection and submit your details
									
	$dbhost 	= "localhost";
	$dbname		= "contractmng";
	$dbuser		= "root";
	$dbpass		= "";
	//define the variables
	$name1 = $_POST["fname"];
	$name2 = $_POST["mname"];
	$name3 = $_POST["lname"];
	$name = $_POST["username"];
	$RegNo = $_POST["idno"];
	$email = $_POST["email"];
	$add = $_POST["address"];
	$pass = $_POST["password"];
					
					//check if already confirm registration
		try{
				$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
				$count=$con->prepare("SELECT  username FROM contractor WHERE username=:username");
				$count->bindParam(":username",$name);
				$count->execute();
				$no=$count->rowCount();
				if($no==0 )
					{		 
						$sql="INSERT INTO contractor (fname, mname, lname, username, idno, email, address, password ) VALUES(:fname, :mname, :lname, :username, :idno,  :email, :address, :password)";
						$query=$con->prepare($sql);
						$query->execute(array(':fname'=>$name1,':mname'=>$name2,':lname'=>$name3,':username'=>$name, ':idno'=>$RegNo, ':email'=>$email, ':address'=>$add, ':password'=>$pass));
								echo'<script type="text/javascript">
										window.alert("You have successifully registered!")
										window.location="index.html";
										</script>';
								//header("location: login.php");
					}
					else 
						{
						//header("location: index.html");
						echo'<script type="text/javascript">
								window.alert("You are already registered!")
								window.location="index.html";
								</script>';
						}
			}
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}
?>