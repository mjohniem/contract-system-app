<?php
	// create a connection and submit your details
									
	$dbhost 	= "localhost";
	$dbname		= "contractmng";
	$dbuser		= "root";
	$dbpass		= "";
	//define the variables
	$nam = $_POST["username"];
	$add = $_POST["address"];
	$Zp = $_POST["zip"];
	$pho = $_POST["phone"];
	$yr = $_POST["year"];
	$ma = $_POST["make"];
	$mo = $_POST["model"];
	$vi = $_POST["vin"];
	$dep = $_POST["deposit"];
	$instal = $_POST["installment"];
	$dd= $_POST["day"];
	$cash = $_POST["ammount"];
					
					//check if already confirm registration
		try{
				$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
				$count=$con->prepare("SELECT username FROM car WHERE username=:username");
				$count->bindParam(":username",$nam);
				$count->execute();
				$no=$count->rowCount();
				if($no==0 )
				
					{		 
						$sql="INSERT INTO car (username,address,zip,phone,year,make,model,vin,deposit,installment,day,ammount) 
						VALUES(:username,:address,:zip,:phone,:year,:make,:model,:vin,:deposit,:installment,:day,:ammount)";
						$query=$con->prepare($sql);
						$query->execute(array(':username'=>$nam,':address'=>$add,':zip'=>$Zp,':phone'=>$pho,':year'=>$yr,':make'=>$ma,':model'=>$mo,':vin'=>$vi,':deposit'=>$dep,':installment'=>$instal,':day'=>$dd,':ammount'=>$cash));
							if(isset($_POST['submit']))
							{
								echo'<script type="text/javascript">
									window.alert("The details was added successifully!")
									window.location="carapplication.php";
									</script>';	
								//header("location: contract.php");
							}
					}
					else 
						{
						//header("location: index.html");
										echo'<script type="text/javascript">
					window.alert("The user does not exist in our database!")
					window.location="carapplication.php";
					</script>';	
						}
			}
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}
?>