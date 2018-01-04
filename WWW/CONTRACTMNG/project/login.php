<html>
<head>
<title>Login page</title>
</head>
<body bgcolor="white" style="color: gray">
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
									$_SESSION[user]=$_GET[username];
									$_SESSION[logged]=true;
									print "You have logged in successfully";
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
			print <p align='center'>please enter your login information to proceed with our site</p>
			<table border='2' align='center' width='200px' height='250px'>
			<tr><td>
			Username</td><td><input type='text' name='username' size='50'></td></tr>
			<tr><td>
			User ID</td><td><input type='text' name='userid' size='50'></td></tr>
			<tr><td>Password</td><td><input type='password' name='password' size='50'></td></tr>
			</table>
			<p align='center'><input type='submit'></p>
			 '<a href='register.php'>Register Now!</a>';
		}
		
	//include the connection of the datatbase here	
	function checkpass ()
		{
			if($_GET["username"]&& $_GET["password"])
			{
				$servername="localhost";
				$username="root";
				$con=mysql_connect($servername,$username)or die(mysql_error());
				mysql_select_db("contractmng", $con);
				$sql="select * FROM contractor where username='$_GET[username]' and password='$_GET[password]'";
				$result=mysql_query($sql,$con) or die(mysql_error());
				return mysql_num_rows($result);
			} 
		}
	function print_secure_content()
		{
			print("<b>Hi $_SESSION[user]");
			print "<br />Only a logged in user can view this<br /><a href='logout.php'>LOGOUT</a><br />";
		}
		
?>
</body>
</html>