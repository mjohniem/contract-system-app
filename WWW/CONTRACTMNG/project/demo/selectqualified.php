<?php
									//define the variables
										$dbhost 	= "localhost";
										$dbname		= "contractmng";
										$dbuser		= "root";
										$dbpass		= "";
										
										$name=$_POST['refname'];
										$id=$_POST['staffid'];
										$exp=$_POST['username'];
									

									//check if already confirm registration
									try{
											$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
											$count=$con->prepare("SELECT  refname FROM applicants WHERE refname=:refname");
											$count->bindParam(":refname",$name);
											$count->execute();
											$no=$count->rowCount();
											if($no>0 )
												{		 
													$sql="INSERT INTO qualified(staffid, username, refname) VALUES( :staffid, :username, :refname)";
													$query=$con->prepare($sql);
													$query->execute(array(':staffid'=>$id,':username'=>$exp, ':refname'=>$name ));
															echo("You have successfully selected Qualified Contractor!");
																echo'<script type="text/javascript">
																		window.alert("You have successfully selected Qualified Contractor!!")
																		window.location="officialpanel.php";
																		</script>';	
												}
											else
												{
													echo'<script type="text/javascript">
																		window.alert("The contrctor is already selected!!")
																		window.location="officialpanel.php";
																		</script>';	
												}
										}
										catch(PDOException $e)
											{
												die('Could not connect to the database:' . $e);
											}
											

									?>				