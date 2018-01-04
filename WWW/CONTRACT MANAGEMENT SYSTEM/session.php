<?php
//Start a session
session_start();   
include 'conn.php';
	
	 //Variable to store error messages
	 $error='';
	$username=$_GET['username'];
     $idno=$_GET['idno'];
     $password=$_GET['password'];
	 
	 
	 //Protect from Sql injection
	$username=stripslashes($username);
	$idno=stripslashes($idno);
	 $password=stripslashes($password);
	 
	 
	 $idno= mysqli_real_escape_string($link, $idno);
	 $password= mysqli_real_escape_string($link, $password);
	 $username= mysqli_real_escape_string($link, $username);
	 
	 $sql="SELECT * from contractor WHERE username='$username'";
	 
	 
	 $result=mysqli_query($link, $sql);
	 $count=mysqli_num_rows($result);
	 
	 
	 if($count>0)
	 {
	 
	  $row=mysqli_fetch_array($result);
	  
	    //Get user's data
	    $id=$row["id"];
		$username=$row["username"];
		$idno=$row["idno"];
		$password=$row["password"];
		
	
		//Initialize sessions
		$_SESSION['loggedin']=true; 
		$_SESSION['Id']=$id;
		$_SESSION['username']=$name;
		$_SESSION['idno']=$idno;
		$_SESSION['password']=$password;
             
		
		
		$url="location:contract.php";		
	        header ($url); 
	 
	
	 }
	 
	 else
	 {
		echo'<script type="text/javascript">
				window.alert("You are not an applicant!")
				window.location="login.php"
				</script>';
	 }



?>


