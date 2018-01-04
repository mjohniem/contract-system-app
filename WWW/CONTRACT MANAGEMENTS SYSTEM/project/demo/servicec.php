<?php							
		session_start();
error_reporting(E_ERROR|E_PARSE);		
					//define the variables
										$dbhost 	= "localhost";
										$dbname		= "contractmng";
										$dbuser		= "root";
										$dbpass		= "";
										
										$name=$_POST['cname'];
										$dd=$_POST['date'];										
										$add=$_POST['address'];					
										$q=$_POST['quantity'];
										$pr=$_POST['price'];
										$amt=$_POST['totalamt'];
									//check if already confirm registration
									try{
											$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
											$count=$con->prepare("SELECT  cname FROM service WHERE cname=:cname");
											$count->bindParam(":cname",$name);
											$count->execute();
											$no=$count->rowCount();
											if($no==0 )
												{		 
													$sql="INSERT INTO service( cname,date,address,quantity,price,totalamt) VALUES( :cname,:date,:address,:quantity,:price,:totalamt)";
													$query=$con->prepare($sql);
													$query->execute(array(':cname'=>$name,':date'=>$dd,':address'=>$add,':quantity'=>$q,':price'=>$pr,':totalamt'=>$amt));
													if(isset($_POST['submit']))
														{
															echo'<script type="text/javascript">
															window.alert("You have successfully added the Details!")
															window.location="serviceapplication.php";
															</script>';
														}
																		
															}
														else
															{
																echo'<script type="text/javascript">
																		window.alert("The user does not exist in our Database!")
																		window.location="serviceapplication.php";
																		</script>';					
															}
										}
										catch(PDOException $e)
											{
												die('Could not connect to the database:' . $e);
											}
											

									?>