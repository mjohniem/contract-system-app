<html>
<head>
<title>Login page</title>
 <link rel="stylesheet" type="text/css" media="all" href="style.css">
</head>
<body bgcolor="black" style="color: gray">
<form action="index.php" method="GET">
<h1 align="center" style="color: Gray">Welcome to our Site</h1>
<?php
	session_start();
	
	function loginform()
		{
			<div id="w">
				<div id="content">
				  <h1>LOGIN FORM</h1>
				<form id="loginform" name="loginform" method="get" action="">
				  <label for="username">Username:</label>
				  <input type="text" name="userlogin" id="userlogin" class="txtfield" tabindex="1" required>

				  <label for="userid">User Id:</label>
				  <input type="text" name="userid" id="userid" class="txtfield" tabindex="1" required>

				  <label for="password">Password:</label>
				  <input type="password" name="password" id="password" class="txtfield" tabindex="2" required>
				  <div class="center"><input type="submit" name="cancelbtn" id="cancelbtn" class="flatbtn-blu hidemodal" value="LOG IN" tabindex="3"></div>
				</div>
				
			 </div>
		}
		loginform ();
		//connection to db
		/*
		function checkpass ()
		{
			
					//define the variables
			$dbhost 	= "localhost";
			$dbname		= "procurement";
			$dbuser		= "root";
			$dbpass		= "";
			$rname=$_GET[userlogin];
			$_SESSION[user]=$_GET[userlogin];
			$_SESSION[logged]=true;
			//check if already confirm registration
			try{
					$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
					$count=$con->prepare("SELECT  userlogin FROM contractors WHERE userlogin=:userlogin");
					$count->bindParam(":rname",$rname);
					$count->execute();
					$number_of_rows=$count->rowCount();
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
												print "<h1>You have logged in successfully"</h1>";
												print_secure_content();
											}
												else
												{
													print "Wrong password or Username, please try angain";
													loginform();
												}
									}		
							
							}						
				}
				catch(PDOException $e)
					{
						die('Could not connect to the database:' . $e);
					}	
	function print_secure-content()
		{
			print("<b><h1>Hi .$_SESSION[user]</h1>");
			print "<br /><h2>Only a logged in user can view this</h2><br /><a href='logout.php'>LOGOUT</a><br />";
		}
		*/
</body>
</html>