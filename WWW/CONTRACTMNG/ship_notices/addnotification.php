<html>
	<head>
		<title>Please Add the Notification About Pending deliveries to the database</title>
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
		<div id="tender" style="border:thick #FF0000 solid; padding:6px 6px; margin:0px 100px; color:#DBE745; background-color:#663366" >
		<p style="background-color:#11685E; text-align:center; font-size:24px; font:Georgia, 'Times New Roman', Times, serif">Please fill the form below to add the Notification about Pending Deliveries</p>
		
			<form action="" method="post" name="addtender" class="addtender" id="addtender">
			  <label for="refnumber">REFERENCE NUMBER:</label>
			  <br />
			<input name="rname" type="text" class="txtfield" id="rname" tabindex="1" size="50" maxlength="100" required>
			<br />
			<br />
			<label for="expdate">CUSTOMER TO BE SUPPLIED THE GOODS:</label>
			<br />
			<input name="customer" type="text"
			 class="txtfield" id="customer" tabindex="3" size="30" required>
			 <br />
			 <br />
			<label for="description">DESCRIPTION OF NOTIFICATION:</label>
			<br />
			<textarea name="description" cols="70" rows="10" class="txtfield" id="description"  required="required"></textarea>
			<br />
			<br />
			
			
      
      <div id="sub" style=" text-align:center; font-size:36px"><input name="submit" type="submit"  id="submit" tabindex="5" value="ADD NOTIFICATION" style="background-color:#7CE9CB; border:double solid">
	  <p><a href="admin.php">click here to go back to admin home page</a></p>
	  </div>
		</form>
		</div>
	</body>
</html>
<?php
//define the variables
	$dbhost 	= "localhost";
	$dbname		= "procurement";
	$dbuser		= "root";
	$dbpass		= "";
	$refname=$_POST['rname'];
	$Description=$_POST['description'];
	$Customer=$_POST['customer'];

//check if already confirm registration
try{
		$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
		$count=$con->prepare("SELECT  rname FROM ship_notices WHERE rname=:rname");
		$count->bindParam(":rname",$refname);
		$count->execute();
		$no=$count->rowCount();
		if($no==0 )
			{		 
				$sql="INSERT INTO ship_notices(rname, description, customer ) VALUES(:rname, :description,  :customer)";
				$query=$con->prepare($sql);
				$query->execute(array(':rname'=>$refname,':customer'=>$Customer, ':description'=>$Description));
						echo'<script type="text/javascript">
							window.alert("You have successfully added the Notification!")
							</script>';		
			}
		else
			{
				echo'<script type="text/javascript">
					window.alert("The Notification already exist in our database!")
					</script>';
			}
	}
	catch(PDOException $e)
		{
			die('Could not connect to the database:' . $e);
		}

?>
