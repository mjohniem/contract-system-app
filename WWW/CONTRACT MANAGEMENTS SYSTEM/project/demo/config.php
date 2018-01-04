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
				
				
			}
						
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}
?>