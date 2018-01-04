<?php
 include 'conn.php';				
				$sql = "SELECT * FROM applicants";
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
												echo  $row['fname'] . $row['lname']. $row['refname'];
											}
										
									}
						?>