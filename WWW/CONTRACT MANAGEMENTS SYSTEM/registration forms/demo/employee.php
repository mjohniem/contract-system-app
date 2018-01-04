<!doctype html>
<html lang="en-US">
<head>

  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>welcome to laikipia university online management system</title>
  <link rel="shortcut icon" href="http://designshack.net/favicon.ico">
  <link rel="icon" href="http://designshack.net/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="style2.css">
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" charset="utf-8" src="js/jquery.leanModal.min.js"></script>
  <!-- jQuery plugin leanModal under MIT License http://leanmodal.finelysliced.com.au/ -->
</head>

<body>
  <div id="topbar">WELCOME TO LU MANAGEMENT SYSTEM</div>
  <div id="menu1">
  <ul style="margin-top:20px">
		<li title="This is the home page" style="display:inline">
		  <a href="employee.php" style="color:#000099; font-weight:bold">HOME</a>
		</li>
 		<li title="this contains the adverts of the company and its statistics" style="display:inline">
 		  <a href="managerlogin.php"  style="color:#000099; font-weight:bold">MANAGER PANEL</a>
 		</li>
 		<li title="This is the administrator access toolbar" style="display:inline">
 		  <a href="adminlogin.php"  style="color:#000099; font-weight:bold" >ADMIN PANEL</a>
 		</li>
		<li title="Get help information on how to use the system" style="display:inline">
		  <a href="help.php"  style="color:#000099; font-weight:bold">HELP</a>
		</li>
 </ul>
  </div>
  <div id="employees">
  <p style="text-align:center; font-size:18px; margin-top:10px; font-weight:bold">Welcome to Employees homepage</p>
  <div id="combination">
  <div id="leftnav">
  <p>&nbsp;</p>
  <p><a href="upload.php" style="color:#000099; font-weight:bold">upload your photo</a></p>
  <p>&nbsp;</p>
  <p><a href="personaldetail.php"style="color:#000099; font-weight:bold">Enter personal Details</a></p>
  <p>&nbsp;</p>
  </div>
  <div id="w">
    <div id="content">
      <h1>REGISTRATION FORM!</h1>
		<form id="loginform" name="loginform" method="post" action="empreg.php">
      <label for="username">Username:</label>
      <input type="text" name="userlogin" id="userlogin" class="txtfield" tabindex="1" required>

	  <label for="userid">User Id:</label>
      <input type="text" name="userid" id="userid" class="txtfield" tabindex="1" required>
	  
	  <label for="userid">User Email:</label>
      <input type="text" name="useremail" id="useremail" class="txtfield" tabindex="1" required>

      <label for="password">Password:</label>
      <input type="password" name="password" id="password" class="txtfield" tabindex="2" required>
	  
	  <label for="password">Retype Password:</label>
      <input type="password" name="password2" id="password2" class="txtfield" tabindex="1" required>
      <div class="center"><input type="submit" name="cancelbtn" id="cancelbtn"  value="REGISTER WITH US" tabindex="3"><br /></div>
		<H3>&nbsp;</H3>
		<H3> PLEASE <a href="regtrial.php" style="line-spacing:5px">CLICK HERE TO LOGIN </a><BR /><BR />
		</H3>
		<H3>IF ARLEADY REGISTERRED</H3>
		</form>
		</div>
  </div>
  <div id="rightnav">
  <p>&nbsp;</p>
  <p><a href="tax.php" style="color:#000099; font-weight:bold">View tax Deducted and Your Net pay</a></p>
  <p>&nbsp;</p>
  <p><a href="updatedetail.php" style="color:#000099; font-weight:bold">Change Personal Details</a></p>
  </div>
  </div>
  </div>

 </div>
</body>
</html>
