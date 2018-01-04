<?php
			session_start();
			error_reporting(E_ERROR|E_PARSE);
			$nam=$_POST['username'];
			$refname=$_POST['refname'];
			include 'conn.php';				
				$sql = "SELECT * FROM selected WHERE username='$nam' AND refname='$refname'";
				$sql = "SELECT expamt FROM costholder WHERE refname='$refname'";
							$result = mysql_query($sql);
								if(!$result)
									{
										//the query failed,
										echo 'Error while selecting from database. Please try again later.';
									}
								else
									{
										
										while($row = mysql_fetch_assoc($result))
											{
												$fname1= $row['username'] ;
												$cost= $row['expamt'] ;
												
											}
										
									}
						?>	
			<?php
			session_start();
			error_reporting(E_ERROR|E_PARSE);
			$nam=$_POST['username'];
			$refname=$_POST['refname'];
			include 'conn.php';				
				$sql = "SELECT sum(expamt) FROM costing WHERE refname='$refname'";
							$result = mysql_query($sql);
								if(!$result)
									{
										//the query failed,
										echo 'Error while selecting from database. Please try again later.';
									}
								else
									{
										
										while($row = mysql_fetch_assoc($result))
											{
											
												$sum= $row['sum(expamt)'];
												
												echo '<p> This is the Calculated Amount Spent and remaining For'.' '."$nam".'</p>';
												echo "<p>Total Amount To Be Given Is:$cost </p> \n";
												echo "<p>Amount Paid Is: $sum</p> \n";
												$value2=($cost-$sum);
												echo "<p>The Remaining Amount is: $value2</p> \n";
						
											}
										
									}
						?>		