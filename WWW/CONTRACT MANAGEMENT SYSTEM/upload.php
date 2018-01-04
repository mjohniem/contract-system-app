<?php
		require_once("mysqli_connect.php");
		
		$message= $_GET["idmsg"];
		if ($message=="02")
					{
						$regmessage = "<font color='red'> We've not yet received an application from that ID Number<br> please click on the link above to apply. Thankyou. </font>";
					
					}
		if ($message=="11")
					{
						$regmessage = "<font color='red'> We've not yet processed your application <br> We'll send you an email with further instructions once we approve your appllication. Thankyou.</font>";
					
					}	
						
		if ($message=="1")
					{
						$regmessage = "<font color='red'> That id number is already registered <br> Please login to continue. Thankyou.</font>";
					
					}				
		
		
		
				
			
		if(isset($_POST['region']))
				{
		
		
		// declaration and initialization of error messages					
					$regmsg=$_GET["regmsg"];
			        $registrationmsg="";			
			//error_reporting(0);
			
			
				
				$regmsg="";
				$msg="";
				$passmsg="";
									
					$input4=mysqli_real_escape_string($dbconn, trim($_POST['idno']));
					
					$sql1="SELECT idnumber FROM application WHERE idnumber='$input4'";
					
					$result=mysql_query($sql1) or die ('query failed'.mysql_error());
					
					if(mysql_num_rows($result)>=1)
						{
							$msg="already registered";
							
							
						}
			
					else
						{
				
							
							$input1=mysqli_real_escape_string($dbconn, trim($_POST['fname']));
							$input2=mysqli_real_escape_string($dbconn, trim($_POST['lname']));
							$input3=mysqli_real_escape_string($dbconn, trim($_POST['mname']));
							$input5=mysqli_real_escape_string($dbconn, trim($_POST['region']));
							$input6=mysqli_real_escape_string($dbconn,trim($_POST['email']));
							$input7=mysqli_real_escape_string($dbconn,trim($_POST['cemail']));
							$input8=mysqli_real_escape_string($dbconn,trim($_POST['kilograms']));
							
							
													
						if(($_FILES['file']['type']=='image/gif')
						||($_FILES['file']['type']=='image/jpe')
						||($_FILES['file']['type']=='image/jpeg')
						||($_FILES['file']['type']=='image/jpg')
						||($_FILES['file']['type']=='image/gif')
						||($_FILES['file']['type']=='image/pjpeg')
						&&($_FILES['file']['size']<200000))
							{
								if($_FILES['file']['error']>0)
								{
								echo"return code:" .$_FILES['file']['error'];
								}
								else if(file_exists('upload/'.$_FILES['file']['name']))
								{
								echo $_FILES['file']['name']."already this image if there";
								}
								else if(move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$_FILES['file']['name']))
								{
								
									$spart=$_FILES['file']['name'];		
									
									$sql= "INSERT INTO application (fname,lname, middlename, idnumber, region, email,pdelivery,passport) VALUES('$input1','$input2','$input3','$input4','$input5','$input6','$input8','{$spart}')";
								
								if(!mysql_query($sql))
									{
										echo "fail";
									}
								else
									{
										$regmsg="registered";
										$url="location:index.php?regmsg=$regmsg";
										header($url);
										exit;
									}
								
								}
							}
				
				
					
				}	
				
	
				}
				
					if ($regmsg=="registered")
					{
						$registrationmsg=$registrationmsg. " <font color='blue'>You have successfully sent your application <br> we'll sent you an email with further instructions once we approve your appllication. thankyou.</font>";
					
					}
	
	?>	
	