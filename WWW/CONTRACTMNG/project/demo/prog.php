
										<?php
										// create a connection and submit your details
																		
										$dbhost 	= "localhost";
										$dbname		= "contractmng";
										$dbuser		= "root";
										$dbpass		= "";
										//define the variables
										$nam = $_POST["name"];
										$tit = $_POST["title"];
										$mu = $_POST["mused"];
										$ml = $_POST["mleft"];
										$cop = $_POST["completion"];
										$sp = $_POST["spaid"];
										$sr = $_POST["sremain"];
										$wkrs = $_POST["workers"];
														
														//check if already confirm registration
											try{
													$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
													$count=$con->prepare("SELECT name FROM progress WHERE name=:name");
													$count->bindParam(":name",$nam);
													$count->execute();
													$no=$count->rowCount();
													
													if($no==0 )
														{		 
															$sql="INSERT INTO progress(name, title, mused, mleft, completion, spaid, sremain, workers ) VALUES(:name, :title, :mused, :mleft, :completion,  :spaid, :sremain, :workers)";
															$query=$con->prepare($sql);
															$query->execute(array(':name'=>$nam,':title'=>$tit,':mused'=>$mu,':mleft'=>$ml,':completion'=>$cop,':spaid'=>$sp,':sremain'=>$sr,':workers'=>$wkrs));
																
																echo'<script type="text/javascript">
																		window.alert("The Progress was added successifully!!")
																		window.location="contract.php";
																		</script>';	
																		//header("location: login.php");
																
																		
																	
														}
														else 
															{
																			
																echo'<script type="text/javascript">
																		window.alert("The Progress does not exist in our database!")
																		window.location="index.html";
																		</script>';
															}
													
												}
												catch(PDOException $e)
													{
														die('Could not connect to the database:' . $e);
													}
									?>