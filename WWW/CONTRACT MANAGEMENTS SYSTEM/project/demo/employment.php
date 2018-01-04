<?php							
		session_start();
error_reporting(E_ERROR|E_PARSE);		
					//define the variables
										$dbhost 	= "localhost";
										$dbname		= "contractmng";
										$dbuser		= "root";
										$dbpass		= "";
										
										$dd=$_POST['date'];
										$name=$_POST['username'];
										$add=$_POST['address'];
										$zp=$_POST['zip'];
										$ph=$_POST['phone'];
										
										
									//check if already confirm registration
									try{
											$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
											$count=$con->prepare("SELECT  username FROM employment WHERE username=:username");
											$count->bindParam(":username",$name);
											$count->execute();
											$no=$count->rowCount();
											if($no==0 )
												{		 
													$sql="INSERT INTO employment( date,username,address,zip,phone) VALUES(:date,:username,:address,:zip,:phone)";
													$query=$con->prepare($sql);
													$query->execute(array(':date'=>$dd,':username'=>$name,':address'=>$add,':zip'=>$zp,':phone'=>$ph));
													if(isset($_POST['submit']))
														{
															echo'<script type="text/javascript">
															window.alert("You have successfully added the Details!")
															window.location="employmentapplication.php";
															</script>';
														}
																		
															}
														else
															{
																echo'<script type="text/javascript">
																		window.alert("The user does not exist in our Database!")
																		window.location="employmentapplication.php";
																		</script>';					
															}
										}
										catch(PDOException $e)
											{
												die('Could not connect to the database:' . $e);
											}
											

									?>