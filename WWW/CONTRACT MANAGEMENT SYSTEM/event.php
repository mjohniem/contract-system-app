<?php							
		session_start();
error_reporting(E_ERROR|E_PARSE);		
					//define the variables
				$dbhost 	= "localhost";
				$dbname		= "contractmng";
				$dbuser		= "root";
				$dbpass		= "";
				
				$name=$_POST['planner'];
				$ev=$_POST['event'];	
				$co=$_POST['company'];	
				$ph=$_POST['phoneno'];
				$em=$_POST['email'];	
				$f=$_POST['fax'];
				$add=$_POST['address'];
				$dd=$_POST['date'];
				$ds=$_POST['des'];
				$du=$_POST['duties'];
				$ag=$_POST['agree'];
				$cd=$_POST['cancelday'];
				$amm=$_POST['ammount'];
			
				
			//check if already confirm registration
			try{
					$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
					$count=$con->prepare("SELECT  planner FROM event WHERE planner=:planner");
					$count->bindParam(":planner",$name);
					$count->execute();
					$no=$count->rowCount();
					if($no<1 )
						{		 
							$sql="INSERT INTO event( planner,event,company,phoneno,email,fax,address,date,des,duties,agree,cancelday,ammount) 
							VALUES( :planner,:event,:company,:phoneno,:email,:fax,:address,:date,:des,:duties,:agree,:cancelday,:ammount)";
							$query=$con->prepare($sql);
							$query->execute(array(':planner'=>$name,':event'=>$ev,':company'=>$co,':phoneno'=>$ph,':email'=>$em,':fax'=>$f,':address'=>$add,':date'=>$dd,':des'=>$ds,':duties'=>$du,':agree'=>$ag,':cancelday'=>$cd,':ammount'=>$amm));
							if(isset($_POST['submit']))
								{
									echo'<script type="text/javascript">
									window.alert("You have successfully added the Details!")
									window.location="eventapplication.php";
									</script>';
								}
												
									}
								else
									{
										echo'<script type="text/javascript">
												window.alert("Details already in the Database OR The user does not exist in our Database!")
												window.location="eventapplication.php";
												</script>';					
									}
				}
				catch(PDOException $e)
					{
						die('Could not connect to the database:' . $e);
					}
					

			?>