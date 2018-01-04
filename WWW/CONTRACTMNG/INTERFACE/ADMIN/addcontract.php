<html>
	<head>
		<title>Please Add the Tenders to the database</title>
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
</style>
 
	<script>
				$("input [type=submit]").attr('disabled','disabled');
				$("form").keyup(function() {
				$("input [type=submit]").removeAttr('disabled');
				}
				);
	</script>
</head>
		<body>
		<div id="tender" style="border:thick #FF0000 solid; padding:6px 6px; margin:0px 100px; color:#DBE745; background-color:#663366" >
		<p style="background-color:#11685E; text-align:center; font-size:24px; font:Georgia, 'Times New Roman', Times, serif">Please fill the form below to add the tenders to the web page</p>
		
			<form action="" method="post" name="addtender" class="addtender" id="addtender">
			  <label for="refnumber">Reference Number:</label>
			  <br />
			<input name="rname" type="text" class="txtfield" id="rname" tabindex="1" size="50" maxlength="100" required>
			<br />
			<br />
			<label for="refnumber">Contract:</label>
			  <br />
			<input name="rname" type="text" class="txtfield" id="rname" tabindex="1" size="50" maxlength="100" required>
			<br />
			<br />
			<label for="description">Description Of Contract:</label>
			<br />
			<textarea name="description" cols="40" rows="7" class="txtfield" id="description"  required="required"></textarea>
			<br />
			<br />
			<label for="expdate">Expiration Date:</label>
			<br />
			<input name="expdate" type="text"
			 class="txtfield" id="expdate" tabindex="3" size="30" required>
			<br />
			<br />
      
      <div id="sub" style=" text-align:left; font-size:36px"><input name="submit" type="submit"  id="submit" tabindex="5" value="ADD PROGRESS" style="background-color:#7CE9CB; border:double solid">
	  <p><a href="admin.php"> back </a></p>
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
	$expirationdate=$_POST['expdate'];

//check if already confirm registration
try{
		$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
		$count=$con->prepare("SELECT  rname FROM tender WHERE rname=:rname");
		$count->bindParam(":rname",$refname);
		$count->execute();
		$no=$count->rowCount();
		if($no==0 )
			{		 
				$sql="INSERT INTO contract(rname, description, expdate ) VALUES(:rname, :description,  :expdate)";
				$query=$con->prepare($sql);
				$query->execute(array(':rname'=>$refname, ':description'=>$Description, ':expdate'=>$expirationdate));
						echo'<script type="text/javascript">
							window.alert("You have successfully added the contract!")
							</script>';		
			}
		else
			{
				echo'<script type="text/javascript">
					window.alert("The contract already exist in our database!")
					</script>';
			}
	}
	catch(PDOException $e)
		{
			die('Could not connect to the database:' . $e);
		}
		

?>
