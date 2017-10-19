<!DOCTYPE html>
<html>
<title>MCA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="header.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<header class="w3-container w3-theme w3-padding w3-gray" id="myHeader">
<div class="header">
	<img src="images/psglogo.png"/>
	<h1>PSG COLLEGE OF TECHNOLOGY</h1>
	<h2>DEPARTMENT OF COMPUTER APPLICATION</h2>
</div>
</header>

<ul class="w3-navbar w3-theme w3-dark-grey">
  <li><a class="w3-padding-16" href="aash.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
  <li><a class="w3-padding-16" href="Miniproject/trial/tbgdesign.php"><span class="glyphicon glyphicon-calendar"></span> Event</a></li>
   <li><a class="w3-padding-16" href="display.php"><span class="glyphicon glyphicon-user"></span> Alumni</a></li>
  <li><a class="w3-padding-16" href="sea.php"><span class="glyphicon glyphicon-search"></span> Search</a></li>
  <li><a class="w3-padding-16" href="discussion.php"><span class="glyphicon glyphicon-comment"></span> Discussion Forum</a></li>
  <li><a class="w3-padding-16" href="login.html"><span class="glyphicon glyphicon-user"></span> Login</a></li>
  <li><a class="active w3-padding-16" href="report.php"><span class="glyphicon glyphicon-th-list"></span> Registration Report</a></li>
  
 
  <li><a class="w3-padding-16" href="login.html">Back</a></li>
</ul>

<h1><center><b>Registration Report</b></center></h1>
</body>
</html>




<?php


// include_once 'Server_connection.php';
$con = mysqli_connect('localhost', 'root', '', 'reg');


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM student ";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("<center>%d Members of Students Registered in Tracking of Alumni-Alumni Website.\n </center><br />",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
  
$sql="SELECT * FROM alumni ";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("<center>%d Members of Alumni Registered in Tracking of Alumni-Alumni Website.\n </center><br />",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
 
  $sql="SELECT * FROM faculty ";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("<center>%d Members of Faculty Registered in Tracking of Alumni-Alumni Website.\n</center> <br />",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
  $sql="SELECT * FROM Staff ";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("<center>%d Members of Staff Registered in Tracking of Alumni-Alumni Website.\n</center> <br />",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
  $sql="SELECT * FROM other ";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("<center>%d Members of Friends of PSG College of Technology Registered in Tracking of Alumni-Alumni Website.\n</center> <br />",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
mysqli_close($con);



?>