<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<title>register</title>
    <style type="text/css">
<!--
.style4 {font-size: 24px; font-weight: bold; font-family: "Times New Roman", Times, serif; }
.style5 {font-size: 24px}
-->
    </style>
</head>
<body bgcolor="black" style="color: white;">
<div id="reg1"  align="center">
<form action="register.php" method="POST" style="border:double #00FF00 solid; ">
<h1>welcome to the Admin registration Page</h1>
<p>Please Input the registration Details to Create an Account here!</p><br />
<table border="2">
<tr>
<td height="39"><span class="style4">User Name :</span></td>
<td><input name="userlogin" type="text" value="" size="50" required="required">
</input></td>
</tr>
<tr>
<td height="43"><span class="style4">User Identification Number</span><span class="style5">:</span></td>
<td><input name="userid" type="text" value="" size="50" required="required">
</input></td>
</tr>
<tr>
<tr>
<td height="42"><span class="style4">Email :</span></td>
<td><input name="regemail" type="text" value="" size="50" required="required">
</input></td>
</tr>
<tr>
<td height="39"><span class="style4">Password :</span></td>
<td><input name="password" type="text" value="" size="50" required="required">
</input></td>
</tr>
<tr>
<td height="37"><span class="style4">Retype Password:</span></td>
<td><input name="regpass2" type="text" value="" size="50" required="required">
</input></td>
</tr>
</table>
<P style="font-size:24px; border:#9C8CDD; padding:10px 10px;">
  <input name="submit" type="submit" value="REGISTER ME">
</p>
</input>
</form>
</div>
</body>
</html>
<?php
	// create a connection and submit your details
									
	$dbhost 	= "localhost";
	$dbname		= "procurement";
	$dbuser		= "root";
	$dbpass		= "";
	//define the variables
	$name = $_POST["userlogin"];
	$RegNo = $_POST["userid"];
	$email = $_POST["regemail"];
	$pass1 = $_POST["password"];
	$pass2 = $_POST["regpass2"];
					
					//check if already confirm registration
		try{
				$con = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
				$count=$con->prepare("SELECT  userid FROM users WHERE userid=:userid");
				$count->bindParam(":userid",$RegNo);
				$count->execute();
				$no=$count->rowCount();
				if($no==0 )
					{		 
						$sql="INSERT INTO users (userlogin, userid, regemail, password, regpass2 ) VALUES(:userlogin, :userid,  :regemail, :password, :regpass2)";
						$query=$con->prepare($sql);
						$query->execute(array(':userlogin'=>$name, ':userid'=>$RegNo, ':regemail'=>$email, ':password'=>$pass1, ':regpass2'=>$pass2));
								print "<h1>You have registered succesifully</h1>";
								print "<a href='index.php'>Go to Login Page</a>";
					}
								else print "<p>passwords does not match</p>";
			}
			catch(PDOException $e)
				{
					die('Could not connect to the database:' . $e);
				}
?>