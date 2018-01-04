<?php
	error_reporting(0);
	define('DB_USER','root');
	define('DB_HOST','localhost');
	define('DB_PASSWORD','');
	define('DB_NAME','contractmng');
	
	// creating a connection
	$dbconn= mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)	or die('could not connect to MySQL:' . mysqli_connect_error());
	//setting the character encoding for the language to utf-8
	mysqli_set_charset($dbconn, 'utf8');
	
	//creating a mysql connection
	$link= mysql_connect( DB_HOST,DB_USER, DB_PASSWORD);
	//cheking whether a connection has been made
	if(!link) die ('cannot connect to host'. mysql_error());
	//selecting the database
	$db_selected=mysql_select_db(DB_NAME, $link);
	if(!$db_selected) die ('could not find: DB_NAME database'.mysql_error()); 
?>
	