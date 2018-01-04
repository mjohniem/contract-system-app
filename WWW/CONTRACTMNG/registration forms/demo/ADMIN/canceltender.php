<html>
	<head>
		<title>Please cancel changes of the Tenders to the database</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body,td,th {
	font-size: 24px;
	color: #000000;
}
body {
	background-color: #F7D7F4;
	margin-left: 30px;
	margin-right: 30px;
}
-->
</style></head>
		<body>
		<div id="tender" style="border:thick #FF0000 solid; padding:6px 6px; margin:0px 150px; color:#DBE745; background-color:#663366" >
		<p style="background-color:#11685E; text-align:center; font-size:24px; font:Georgia, 'Times New Roman', Times, serif">Please fill the form below to cancel the tenders</p>
			<form action="" method="post" name="addtender" class="addtender" id="addtender">
			  <label for="refnumber">REFERENCE NUMBER:</label>
			  <br />
			<input name="rname" type="text" class="txtfield" id="rname" tabindex="1" size="50" maxlength="100" required>
			<br />
			<br />
			<label for="canceldetails">CANCELLATION DETAILS:</label>
			<br />
			<input name="canceldetail" type="text" class="txtfield" id="canceldetail" tabindex="3" size="70" required>
			<br />
			<br />
			
      
      <div id="sub" style=" text-align:center"><input name="submit" type="submit"  id="submit" tabindex="5" value="UPDATE TENDER DETAILS">
	  <p><a href="admin.php">click here to go back to admin home page</a></p>
	  </div>
	  
			</form>
			</div>
		</body>
</html>
<?php
//define the variables
//configuration
	$dbhost 	= "localhost";
	$dbname		= "procurement";
	$dbuser		= "root";
	$dbpass		= "";
 // database connection

	$refname=$_POST['rname'];
	$Cdetail=$_POST['canceldetail'];
//check if already confirm registration
try{
		$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
		$count=$con->prepare("SELECT  rname FROM tender WHERE rname=:rname");
		$count->bindParam(":rname",$refname);
		$count->execute();
		$no=$count->rowCount();
		if($no>0 )
			{		 
				$sql="UPDATE tender SET canceldetail=:canceldetail";
				
				$query=$con->prepare($sql);
				$query->execute(array(':canceldetail'=>$Cdetail));
					echo'<script type="text/javascript">
							window.alert("You have successfully Updated the tender!")
							</script>';		
			}
		else
			{
				echo'<script type="text/javascript">
					window.alert("The tender does not exist in our database!")
					</script>';
			}
	}
	catch(PDOException $e)
		{
			die('Could not connect to the database:' . $e);
		}

?>
