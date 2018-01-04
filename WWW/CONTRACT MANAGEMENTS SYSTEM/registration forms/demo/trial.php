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
									print "<h1>You have logged in successfully</h1>";
									print_secure_content();
								}
								else
									{
										print "<p align='center'>Wrong password or Username, please try angain</p>";
										loginform();
									}
					}
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