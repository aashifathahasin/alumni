<?php

session_start();

$username =$_POST['username'];
$password =$_POST['password'];

$connect = mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("reg") or die(mysql_error());

$logcheck = mysql_query("

SELECT username, password FROM student WHERE username='$username' UNION SELECT username, password FROM alumni WHERE username='$username' 

");

$nrow = mysql_num_rows($logcheck);

if($nrow!=0) {
	while($rows = mysql_fetch_assoc($logcheck)) {
		$dbusername = $rows['username'];
		$dbpassword = $rows['password'];
		
	}
    if($username==$dbusername&&$password==$dbpassword) {
		header("Location: http://localhost/all/m.php");
		$_SESSION['username']=$username;
		} else {
		header("Location: http://localhost/all/i.php");
		}

} else {
	header("Location: http://localhost/all/i.php");
	
}

?>