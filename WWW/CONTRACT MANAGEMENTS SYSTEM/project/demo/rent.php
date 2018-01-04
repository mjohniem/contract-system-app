<?php							
		session_start();
error_reporting(E_ERROR|E_PARSE);		
					//define the variables
										$dbhost 	= "localhost";
										$dbname		= "contractmng";
										$dbuser		= "root";
										$dbpass		= "";
										
										$name=$_POST['rname'];
										$dd=$_POST['date'];	
										$amt=$_POST['ammount'];	
										$day=$_POST['paymentday'];
										$sd=$_POST['sdate'];
										$add=$_POST['address'];	
										$ct=$_POST['city'];
										
									
										
									//check if already confirm registration
									try{
											$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
											$count=$con->prepare("SELECT  rname FROM rent WHERE rname=:rname");
											$count->bindParam(":rname",$name);
											$count->execute();
											$no=$count->rowCount();
											if($no==0 )
												{		 
													$sql="INSERT INTO rent( rname,date,ammount,paymentday,sdate,address,city) VALUES(:rname,:date,:ammount,:paymentday,:sdate,:address,:city)";
													$query=$con->prepare($sql);
													$query->execute(array(':rname'=>$name,':date'=>$dd,':ammount'=>$amt,':paymentday'=>$day,':sdate'=>$sd,':address'=>$add,':city'=>$ct));
													if(isset($_POST['submit']))
														{
															echo'<script type="text/javascript">
															window.alert("You have successfully added the Details!")
															window.location="rentapplication.php";
															</script>';
														}
																		
															}
														else
															{
																echo'<script type="text/javascript">
																		window.alert("The user does not exist in our Database!")
																		window.location="rentapplication.php";
																		</script>';					
															}
										}
										catch(PDOException $e)
											{
												die('Could not connect to the database:' . $e);
											}
											

									?>