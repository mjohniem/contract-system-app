	<?php
	// create a connection and submit your details
									
	$dbhost 	= "localhost";
	$dbname		= "taxmanager";
	$dbuser		= "root";
	$dbpass		= "";
	//define the variables
	$name = $_POST["userlogin"];
	$RegNo = $_POST["userid"];
	$email = $_POST["useremail"];
	$pass1 = $_POST["password"];
	$pass2 = $_POST["password2"];
					
					//check if already confirm registration
		try{
				$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
				$count=$con->prepare("SELECT  userid FROM users WHERE userid=:userid");
				$count->bindParam(":userid",$RegNo);
				$count->execute();
				$no=$count->rowCount();
				if($no<0 )
					{		 
						$sql="INSERT INTO users (userlogin, userid, useremail, password, password2 ) VALUES(:userlogin, :userid,  :useremail, :password, :password2)";
						$query=$con->prepare($sql);
						$query->execute(array(':userlogin'=>$name, ':userid'=>$RegNo, ':useremail'=>$email, ':password'=>$pass1, ':password2'=>$pass2));
								echo'<script type="text/javascript">
										window.alert("You have registered as the admin!")
										</script>';
								header("location: login.php");
					}
								else 
									{
										echo'<script type="text/javascript">
											window.alert("You are already registered!")
											</script>';
									}
			}
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}
?>					//check if already confirm registrat