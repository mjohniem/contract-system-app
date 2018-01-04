<?php
session_start();
error_reporting(E_ERROR|E_PARSE);
if(isset($_SESSION["userid"]))

	$dbhost 	= "localhost";
	$dbname		= "contractmng";
	$dbuser		= "root";
	$dbpass		= "";
	$name = $_POST["username"];
	$idno = $_POST["idno"];
	$pas = $_POST["password"];
		try{
				$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
				$count=$con->prepare("SELECT username,password,idno FROM contractor WHERE username=:username and idno=:idno and password=:password");
				$count->bindParam(":username",$name);
				$count->bindParam(":idno",$idno);
				$count->bindParam(":password",$pas);
				$count->execute();
				$row=$count->rowCount();
				if($row>0 )
				{
					$_SESSION[Id]=$row['Id'];
					$_SESSION[fname]=$row['fname'];
					$_SESSION[lname]=$row['lname'];
					$_SESSION[username]=$name;
						echo'<script type="text/javascript">
								window.alert("successifully logged in!")
								window.location="contract.php";
								</script>';
						//header("location:contract.php");
				}
				else
				{
					echo'<script type="text/javascript">
								window.alert("Wrong Credentials used or Not Registered!")
								window.location="login.php";
								</script>';
					//header("location:login.php");
				}		
					
					 
			}
						
						
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}
?>