<?php
session_start();
?>
<html>
<head>
<title>
photo upload
</title>
</head>
<body>
<h1>upload your image</h1>
<form action="" method="PUT" id="upload" enctype="multipart/form-data">
	<p>select image to upload</p>
	 <label for="userid">Employee Id:</label>
      <input type="text" name="userid" id="userid" class="txtfield" tabindex="1" required><BR />
	<input type="file" name="Image" id="file"  required>
	<input type="submit" value="upload image" name="submit" >
	
</form>
</body>
</html>
<?php

$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType= pathinfo($target_file,PATHINFO_EXTENSION);
//Check if image is actual one or its fake 
if(isset($POST["submit"]))
	{
		$check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !==false)
				{
					echo'file is an image'.$check["mime"].".";
					$uploadOk = 1;
					
				}
				else
					{
						echo'file is not an image' ;
						$uploadOk = 0;
					}
	}
	//check file size
	if($_FILES["fileToUpload"]["size"]>500000)
		{
			echo'file is too large';
			$uploadOk = 0;
		}
	//allow certain formats
	if($imageFileType !="jpg" &&
		$imageFileType !="jpeg" &&
		$imageFileType !="png" &&
		$imageFileType !="gif")
			{
				echo'only jpg, jpeg,png and gif files are allowed';
				$uploadOk = 0;
			}
	//check if an upload  has an error
	if($uploadOk == 0)
		{
			echo'sorry your image was not uploaded';
		}
		else
			{
				echo"The file" .basename($_FILES["fileToUpload"]["name"]).'has been uploaded.';
				
			}
?>
<?php
	$user="root";
	$host="localhost";
	$dbname="business";
	
	//define the variables
	$image=$_POST['Image'];
	

// confirm sending
try
	{
		$con= new PDO("mysql:host=$host;dbname=$dbname", $user);
		$sql="INSERT INTO comments ( Name, Email, Comments ) VALUES(:Name, :Email, :Comments)";
		$query=$con->prepare($sql);
		$query->execute(array(':Name'=>$name, ':Email'=>$email, ':Comments'=>$comments));
				echo'<script type="text/javascript">
					window.alert("Image Uploaded Successfully!")
					</script>';	
	}
	catch(PDOException $e)
		{
			die('Could not connect to the database:' . $e);
		}
?>