<html>
<head>
<title>Login page</title>
</head>
<body bgcolor="black" style="color: gray">
<form action="index.php" method="GET">
<h1 align="center" style="color: Gray">Welcome to our Site</h1>
<?php
	session_start();
	if($_SESSION["logged"])
		{
			print_secure_content ();
		}
		else
			{
				if(!$_SESSION["logging"])
				{
					$_SESSION["logging"]=true;
					loginform();
				}
				elseif($_SESSION["logging"])
					{
							$number_of_rows=checkpass();
							if($number_of_rows==1)
								{
									$_SESSION[user]=$_GET[userlogin];
									$_SESSION[logged]=true;
									print "<h1>You have logged n successfully"</h1>";
									print_secure_content();
								}
								else
									{
										print "Wrong password or Username, please try angain";
										loginform();
									}
					}
			}
	function loginform()
		{
			print "please enter your login information to proceed with our site";
			print("<table border='2'><tr><td>
			Username</td><td><input type='text' name='userlogin' size='30'></td></tr>
			<tr><td>Password</td><td><input type='password' name='password' size='20'></td></tr>
			</table>");
			print "<input type='submit'>";
			print"<h3><a href='registerform.php'>Register Now!</a></h3>";
		}
		
	//include the connection of the datatbase here	
	function checkpass ()
		{
			
					//define the variables
			$dbhost 	= "localhost";
			$dbname		= "procurement";
			$dbuser		= "root";
			$dbpass		= "";

			//check if already confirm registration
			try{
					$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
					$count=$con->prepare("SELECT  rname FROM tender WHERE rname=:rname");
					$count->bindParam(":rname",$refname);
					$count->execute();
					$no=$count->rowCount();
					if($no==0 )
						{		 
							$sql="INSERT INTO tender(rname, description, expdate ) VALUES(:rname, :description,  :expdate)";
							$query=$con->prepare($sql);
							$query->execute(array(':rname'=>$refname, ':description'=>$Description, ':expdate'=>$expirationdate));
									echo'<script type="text/javascript">
										window.alert("You have successfully added the tender!")
										</script>';		
						}
					else
						{
							echo'<script type="text/javascript">
								window.alert("The tender already exist in our database!")
								</script>';
						}
				}
				catch(PDOException $e)
					{
						die('Could not connect to the database:' . $e);
					}
		}
	function print_secure-content()
		{
			print("<b><h1>Himr.$_SESSION[user]</h1>");
			print "<br /><h2>Only a logged in user can view this</h2><br /><a href='logout.php'>LOGOUT</a><br />";
		}
?>
</body>
</html>