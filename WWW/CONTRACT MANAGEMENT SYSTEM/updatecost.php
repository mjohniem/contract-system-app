<?php
									//define the variables
										$dbhost 	= "localhost";
										$dbname		= "contractmng";
										$dbuser		= "root";
										$dbpass		= "";
										$nam=$_POST['username'];
										$refname=$_POST['refname'];
										$tit=$_POST['title'];
										$exp=$_POST['expamt'];

									//check if already confirm registration
									try{
											$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
											$count=$con->prepare("SELECT  refname FROM selected WHERE refname=:refname");
											$count->bindParam(":refname",$refname);
											$count->execute();
											$no=$count->rowCount();
											if($no>0)
												{		 
													$sql="INSERT INTO costing(username, refname, title, expamt) VALUES(:username, :refname, :title, :expamt)";
													$query=$con->prepare($sql);
													$query->execute(array(':username'=>$nam, ':refname'=>$refname,  ':title'=>$tit, ':expamt'=>$exp,));
															//if(isset($_POST['submit']))
																{
															
																echo'<script type="text/javascript">
																		window.alert("You have successfully added the costing!")
																		window.location="financeofficer.php";
																		</script>';
																		//header ('location: financeofficer.php');
																}	
												}
											else
												{
													echo'<script type="text/javascript">
															window.alert("The contract does not exist!")
															window.location="financeofficer.php";
															</script>';
														//header ('location: financeofficer.php');								}
												}
										}
										catch(PDOException $e)
											{
												die('Could not connect to the database:' . $e);
											}
											

									?>