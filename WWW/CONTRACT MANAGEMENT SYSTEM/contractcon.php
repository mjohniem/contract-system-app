<?php
			session_start();
			error_reporting(E_ERROR|E_PARSE);
			$nam=$_SESSION["username"];
			include 'conn.php';				
				$sql = "SELECT * FROM selected WHERE username='$nam'";
							$result = mysql_query($sql);
								if(!$result)
									{
										//the query failed,
										echo'<script type="text/javascript">
						window.alert("Error while selecting from database. Please try again later.!")
						window.location="contract.php";
						</script>';
										//echo 'Error while selecting from database. Please try again later.';
									}
								else
									{
										
										while($row = mysql_fetch_assoc($result))
											{
												echo'<script type="text/javascript">
								window.alert("Choose your selection from the contracts form provided!")
								window.location="carapplication.php";
								
								</script>';
											}
										
									}
						?>