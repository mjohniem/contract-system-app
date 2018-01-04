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
	$tit = $_POST["title"];
	$pass = $_POST["password"];
					
					//check if already confirm registration
		try{
				$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
				$count=$con->prepare("SELECT  username FROM staffrecord WHERE username=:username");
				$count->bindParam(":username",$name);
				$count->execute();
				$no=$count->rowCount();
				if($no>0 )
					{	
						$count=$con->prepare("SELECT  username FROM officials WHERE username=:username");
						$count->bindParam(":username",$name);
						$count->execute();
						$no=$count->rowCount();
						if($no<1 )
						{						
							$sql="INSERT INTO officials (fname, mname, lname, username, idno, email, address, title, password ) VALUES(:fname, :mname, :lname, :username, :idno,  :email, :address, :title, :password)";
							$query=$con->prepare($sql);
							$query->execute(array(':fname'=>$name1,':mname'=>$name2,':lname'=>$name3,':username'=>$name, ':idno'=>$RegNo, ':email'=>$email, ':address'=>$add, ':title'=>$tit, ':password'=>$pass));
									echo'<script type="text/javascript">
										window.alert("You have successifully registered!")
										window.location="offpanel.php";
										</script>';
										
										
										
								//header("location: login.php");
						}
					}
					else 
						{
						//header("location: index.html");
						echo'<script type="text/javascript">
								window.alert("You are already registered or either not a LU staff!")
								window.location="index.html";
								</script>';
						}
			}
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}
?>