<?php
									//define the variables
										$dbhost 	= "localhost";
										$dbname		= "contractmng";
										$dbuser		= "root";
										$dbpass		= "";
										
										$name=$_POST['refname'];
										$tit=$_POST['title'];
										$exp=$_POST['expamt'];
										$exp2=$_POST['expdate'];

									//check if already confirm registration
									try{
											$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
											$count=$con->prepare("SELECT  refname FROM costholder WHERE refname=:refname");
											$count->bindParam(":refname",$name);
											$count->execute();
											$no=$count->rowCount();
											if($no==0 )
												{		 
													$sql="INSERT INTO costholder( refname, title, expamt, expdate) VALUES( :refname, :title, :expamt, :expdate)";
													$query=$con->prepare($sql);
													$query->execute(array( ':refname'=>$name,  ':title'=>$tit, ':expamt'=>$exp, ':expdate'=>$exp2,));
															echo'<script type="text/javascript">
																	window.alert("You have successfully added the costing!!")
																	window.location="financeofficer.php";
																	</script>';
															//echo("You have successfully added the costing!");
																	
												}
											else
												{
													echo'<script type="text/javascript">
																	window.alert("The contract does not Exist!!")
																	window.location="financeofficer.php";
																	</script>';
													//echo("The contract does not Exist!");
														
												}
										}
										catch(PDOException $e)
											{
												die('Could not connect to the database:' . $e);
											}
											

									?>