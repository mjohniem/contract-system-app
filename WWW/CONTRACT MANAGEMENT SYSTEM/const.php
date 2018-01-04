<?php
									
									//define the variables
										$dbhost 	= "localhost";
										$dbname		= "contractmng";
										$dbuser		= "root";
										$dbpass		= "";
										$name=$_POST['cname'];
										$Doc=$_POST['date'];
										$change=$_POST['changes'];
										$begin=$_POST['begindate'];
										$end=$_POST['enddate'];
										$amm=$_POST['ammount'];
										
									//check if already confirm registration
									try{
											$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
											$count=$con->prepare("SELECT  cname FROM construction WHERE cname=:cname");
											$count->bindParam(":cname",$name);
											$count->execute();
											$no=$count->rowCount();
											if($no==0 )
												{		 
													$sql="INSERT INTO construction(cname, date, changes, begindate, enddate, ammount ) VALUES(:cname, :date, :changes, :begindate,:enddate,:ammount )";
													$query=$con->prepare($sql);
													$query->execute(array(':cname'=>$name, ':date'=>$Doc, ':changes'=>$change, ':begindate'=>$begin, ':enddate'=>$end, ':ammount'=>$amm));
													if(isset($_POST['submit']))
														{
															echo'<script type="text/javascript">
															window.alert("You have successfully added the Details!")
															window.location="constructionapplication.php";
															</script>';
														}
																		
															}
														else
															{
																echo'<script type="text/javascript">
																		window.alert("The user does not exist in our Database!")
																		window.location="constructionapplication.php";
																		</script>';					
															}
										}
										catch(PDOException $e)
											{
												die('Could not connect to the database:' . $e);
											}
											

									?>