 <?php
											session_start();
											error_reporting(E_ERROR|E_PARSE);							// configuration
																	$dbhost 	= "localhost";
																	$dbname		= "contractmng";
																	$dbuser		= "root";
																	$dbpass		= "";
																 // database connection
																 $nam=$_SESSION["username"];
																try 
																	{
																//Creating connection for mysql
																	$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);  
																	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
																	$query = "SELECT * FROM selected WHERE username='$nam'";   //first pass just gets the columnnames 
																	{									
																	print "<table class='table' style='border:2px solid black; float:left; padding-left:8px'> \n"; 
																	print"<tr width=100%; cellspacing=3px; style='color:#000000' >
																	<th style='border-right:2px solid black;'>Id</th>
																	<th style='border-right:2px solid black;'>Username</th>
																	<th style='border-right:2px solid black;'>Reference Name</th>
																	
																	
																	</tr>";
																	
																	
																	$result = $con->query($query);
																	
																	//return only the first row (we only need field names)  
																	$row =$result->fetchAll(PDO::FETCH_ASSOC);  
																	//print " <p align=justify class=product-compare style20 style22>Online Contract in our Offer</p> \n";
																			
																	//print " </tr> \n";  //second query gets the data  
																	
																	{
																	$data = $con->query($query); 
																	$data->setFetchMode(PDO::FETCH_ASSOC); 
																												
																	foreach($data as $row)
																		{
																			print " <tr style='border:2px solid black; color:#000000' > \n"; 
																			
																			foreach ($row as $name=>$value)
																				{
																				print "
																							<td width=100%; cellspacing=5px; style='padding-left: 5px; padding-right: 5px; border-right:2px solid black;'><p align=center color=black;>$value </p></td>
																								</form>\n"; 
																				} // end field loop   
																						print " </tr> \n"; 
																					
																		} // end record loop  
																				print "</table> \n"; 
																	}		
																}
															}
																catch(PDOException $e) 
																	{
																		echo 'No Results Found ';  
																	} // end try		 
																?>	