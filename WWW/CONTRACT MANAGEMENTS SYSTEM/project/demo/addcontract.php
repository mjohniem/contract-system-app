<?php
								
		//define the variables
		$dbhost 	= "localhost";
		$dbname		= "contractmng";
		$dbuser		= "root";
		$dbpass		= "";
		$refname=$_POST['refname'];
		$Description=$_POST['description'];
		$expirationdate=$_POST['expdate'];
		$details=$_POST['cdetails'];
		$tit=$_POST['title'];
		//check if already confirm registration
		try{
		$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
		$count=$con->prepare("SELECT  refname FROM contracts WHERE refname=:refname");
		$count->bindParam(":refname",$refname);
		$count->execute();
		$no=$count->rowCount();
		if($no==0 )
		{		 
			$sql="INSERT INTO contracts(refname, description, expdate, cdetails, title) VALUES(:refname, :description,  :expdate, :cdetails, :title)";
			$query=$con->prepare($sql);
			$query->execute(array(':refname'=>$refname, ':description'=>$Description, ':expdate'=>$expirationdate, ':cdetails'=>$details, ':title'=>$tit));
					echo("You have successfully added the contract!");
						header('location: adminpanel.php');	
		}
		else
		{
			echo
				("The contract already exist in our database!");
				header('location: adminpanel.php');
		}
		}
		catch(PDOException $e)
		{
		die('Could not connect to the database:' . $e);
		}

	?>
									