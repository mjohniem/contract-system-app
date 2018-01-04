<?php
// configuration
	$dbhost 	= "localhost";
	$dbname		= "procurement";
	$dbuser		= "root";
	$dbpass		= "";
 // database connection
try 
	{
		//Creating connection for mysql
			$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);  
			$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = "SELECT * FROM ship_notices";   //first pass just gets the columnnames 
			print "<table> \n";  
			$result = $con->query($query);  //return only the first row (we only need field names)  
			$row =$result->fetch(PDO::FETCH_ASSOC);  
			print " <p align=justify class=product-compare style20 style22>Online Notification about Ship notices</p> \n";
					
			print " </tr> \n";  //second query gets the data  
			$data = $con->query($query); 
			$data->setFetchMode(PDO::FETCH_ASSOC);  
			foreach($data as $row)
				{
					print " <tr> \n"; 
					
					foreach ($row as $name=>$value)
						{
							print "
									<td><p align=justify class=product-compare style20 style22>$value</p><td>
										</form>\n"; 
						} // end field loop   
								print " </tr> \n";  
				} // end record loop  
						print "</table> \n";  
		}
		catch(PDOException $e) 
			{
				echo 'ERROR: ' .$e->getMessage();  
			} // end try		 
					?>