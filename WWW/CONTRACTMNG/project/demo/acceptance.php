
										
		<?php				
			session_start();
			error_reporting(E_ERROR|E_PARSE);
			//configuration
				$dbhost 	= "localhost";
				$dbname		= "contractmng";
				$dbuser		= "root";
				$dbpass		= "";
					 $nam=$_POST[$_SESSION["username"]];
				
						try 
							{
									//Creating connection for mysql
										$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);  
										$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										$query = "SELECT * FROM selected WHERE username='$nam'";   //first pass just gets the columnnames
										$result = $con->query($query);
										
										//return only the first row (we only need field names)  
										$row =$result->fetchAll(PDO::FETCH_ASSOC); 
										if($row>0)
										{
											//echo "You are Qualified";
												echo'<script type="text/javascript">
																		window.alert("You are Qualified!")
																		window.location="acceptanceform.php";
																		</script>';	
											
										}															
							
									else
									{
										//echo"Your are not qualified for any contracts, please apply again to your favourite contracts!";
										echo'<script type="text/javascript">
																		window.alert("Your are not qualified for any contracts, please apply again to your favourite contracts!")
																		window.location="contract.php";
																		</script>';	
											
												
									}
							}
							catch(PDOException $e)
								{
									echo 'No Results Found ';
								}

						?>
		
					
					