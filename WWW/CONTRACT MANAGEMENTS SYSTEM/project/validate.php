<?php
session_start();
$message="";
if(count($_POST)>0) {
$conn = mysql_connect("localhost","root","");
mysql_select_db("phppot_examples",$conn);
$result = mysql_query("SELECT * FROM users WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["user_id"] = $row[user_id];
$_SESSION["user_name"] = $row[user_name];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["user_id"])) {
header("Location:dashboard.php");
}
?>