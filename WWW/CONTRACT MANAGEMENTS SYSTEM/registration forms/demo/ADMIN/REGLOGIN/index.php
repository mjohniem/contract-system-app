<html>
<head>
<title>Login page</title>
</head>
<body bgcolor="black" style="color: gray">
<form action="index.php" method="GET">
<h1 align="center" style="color: Gray">Welcome to our Site</h1>
<?php
	session_start();
	$user=$_GET['userlogin'];
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
									$_SESSION["user"]=$_GET['userlogin'];
									$_SESSION[logged]=true;
									print "<h1>You have logged in successfully</h1>";
									print_secure_content();
								}
								else
									{
					
										loginform();
									}
					}
			}
	function loginform()
		{
			print "<p align='center'>please enter your login information to proceed with our site</p>";
			print("<table border='2' align='center' width='200px' height='250px'><tr><td>
			Username</td><td><input type='text' name='userlogin' size='50' required></td></tr>
			<tr><td>
			User ID</td><td><input type='text' name='userid' size='50' required></td></tr>
			<tr><td>Password</td><td><input type='password' name='password' size='50' required></td></tr>
			</table>");
			print "<p align='center'><input type='submit'></p>";
			print"<h3><a href='register.php'>Register Now!</a></h3>";
		}
		
	//include the connection of the datatbase here	
	function checkpass ()
		{
			if($_GET["userlogin"]&& $_GET["password"])
			{
				$servername="localhost";
				$username="root";
				$con=mysql_connect($servername,$username)or die(mysql_error());
				mysql_select_db("procurement", $con);
				$sql="select * FROM users where userlogin='$_GET[userlogin]' and password='$_GET[password]'";
				$result=mysql_query($sql,$con) or die(mysql_error());
				return mysql_num_rows($result);
			} 
		}
	function print_secure_content()
		{
			print("<b><h1>Hi $_SESSION[user]</h1>");
			print "<br /><h2>Only a logged in user can view this</h2><br /><a href='logout.php'>LOGOUT</a><br />";
		}
?>
</body>
</html>