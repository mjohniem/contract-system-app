<?php
session_start();
if(session_destroy())
	{
		print "<h2>You have Logged out successifully</h2>";
		print "<h3><a href='index.php'>Back to Main Page</a></h3>";
	}

?>