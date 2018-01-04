<?php
									
									//define the variables
										$dbhost 	= "localhost";
										$dbname		= "contractmng";
										$dbuser		= "root";
										$dbpass		= "";
										$dd=$_POST['date'];
										$amm=$_POST['ammount'];
										$dep=$_POST['deposit'];
										$inst=$_POST['installments'];
										$bn=$_POST['buyername'];
										$wit=$_POST['witness'];
									//check if already confirm registration
									try{
											$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
											$count=$con->prepare("SELECT buyername FROM land WHERE buyername=:buyername");
											$count->bindParam(":buyername",$bn);
											$count->execute();
											$no=$count->rowCount();
											if($no==0 )
												{		 
													$sql="INSERT INTO land(date,ammount,deposit,installments,buyername,witness ) VALUES(:date,:ammount,:deposit,:installments,:buyername,:witness)";
													$query=$con->prepare($sql);
													$query->execute(array(':date'=>$dd,':ammount'=>$amm,':deposit'=>$dep,':installments'=>$inst,':buyername'=>$bn,':witness'=>$wit));
													if(isset($_POST['submit']))
														{
															echo'<script type="text/javascript">
															window.alert("You have successfully added the Details!")
															window.location="landapplication.php";
															</script>';
														}
																		
															}
														else
															{
																echo'<script type="text/javascript">
																		window.alert("The details exist or user not found in our Database!")
																		window.location="landapplication.php";
																		</script>';					
															}
										}
										catch(PDOException $e)
											{
												die('Could not connect to the database:' . $e);
											}
											

									?>