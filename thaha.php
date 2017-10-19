<?php
include_once 'Server_connection.php';


if(isset($_POST['btn-signup']))
{
  $email = mysql_real_escape_string($_POST['email']);
 $password = mysql_real_escape_string($_POST['pass']); 

 
 
$result = mysql_query("SELECT * FROM alumni WHERE email='" . $_POST["email"] . "' and pass = '". $_POST["pass"]."'");
$result = mysql_query("SELECT * FROM faculty WHERE email='" . $_POST["email"] . "' and pass = '". $_POST["pass"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {

$_SESSION["email"] = $row[email];
$smsg = "WELCOME TO TRACKING OF ALUMNI - ALUMNI WEBSITE";
} else {
$fmsg = "Invalid Email or Password!";
}

if(isset($_SESSION["email"])) {
header("Location:chat.html");
}
}
?>