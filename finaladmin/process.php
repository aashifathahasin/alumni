
<?php
//get values passe from form in login.php file
$username= $_POST['username'];
$password=$_POST['password'];
//to prevent mysql injection
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
//connect to the server and select database
mysql_connect("localhost","root","");
mysql_select_db("admins");
//query the database for user
$result=mysql_query("select * from tabup where username='$username' and password='$password'")or die("failed to query database".mysql_error());
$row=mysql_fetch_array($result);
if ($row['username']==$username && $row['password']== $password){
    include("optionpage.php");
    }else{
        echo "failed to login";
    }
?>



