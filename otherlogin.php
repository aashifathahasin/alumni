<?php
include_once 'Server_connection.php';


if(isset($_POST['btn-signup']))
{
  $username= mysql_real_escape_string($_POST['username']);
 $password = mysql_real_escape_string($_POST['pass']); 

 
 
$result = mysql_query("SELECT * FROM other WHERE username='" . $_POST["username"] . "' and pass = '". $_POST["pass"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {

$_SESSION["username"] = $row[username];
$smsg = "WELCOME TO TRACKING OF ALUMNI - ALUMNI WEBSITE";
} else {
$fmsg = "Invalid Email or Password!";
}

if(isset($_SESSION["username"])) {
header("Location:chat.html");
}
}
?>


<!DOCTYPE html>
<html>
<head>
<title>  USER LOGIN IN PHP & MYSQL</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
body{
	background-image: url(2.jpg);
	background-size: cover;
	
}
.container{
	width: 500px;
	height: 250px;	
	background-color: rgba(0,0,0,0.3);
	margin: 0 auto;
	margin-top:20px;
	margin-bottom:20px
	padding-top: 10px;
	padding-left:20px;
	border-radius: 15px;
	-webkit-border-radius:15px;
	-o-border-radius:15px;
	-moz-border-radius:15px;
	color:white;
	font-weight: bolder;
	
	box-shadow: inset 4px 4px rgba(0,0,0,0);
	font-size: 18px;

}
</style>
<style>
.btn btn-lg btn-primary btn-block{
	background:blue;
	padding:5px 10px;
	color:#fff;
	border:none;
	border-radius:5px;
	
	animation-name: flash;
	animation-duration: 1s;
	animation-timing-function: linear;
	animation-iteration-count: infinite;

	//Firefox 1+
	-webkit-animation-name: flash;
	-webkit-animation-duration: 1s;
	-webkit-animation-timing-function: linear;
	-webkit-animation-iteration-count: infinite;

	//Safari 3-4
	-moz-animation-name: flash;
	-moz-animation-duration: 1s;
	-moz-animation-timing-function: linear;
	-moz-animation-iteration-count: infinite;
}

@keyframes flash {  
    0% { opacity: 1.0; }
    50% { opacity: 0.5; }
    100% { opacity: 1.0; }
}

//Firefox 1+
@-webkit-keyframes flash {  
    0% { opacity: 1.0; }
    50% { opacity: 0.5; }
    100% { opacity: 1.0; }
}

//Safari 3-4
@-moz-keyframes flash {  
    0% { opacity: 1.0; }
    50% { opacity: 0.5; }
    100% { opacity: 1.0; }
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">



</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="header.css">
<body >
<script>
var wss_i = 0;
var wss_array = ["<font color='#330066'>Tracking of Alumni-Alumni Website.</font>","<font color='green'>Tracking of Alumni-Alumni Website.</font>","<font color='red'>Tracking of Alumni-Alumni Website.</font>","<font color='blue'>Tracking of Alumni-Alumni Website.</font>","<font color='#006666'>Tracking of Alumni-Alumni Website.</font>"];
var wss_elem;
function wssNext(){
	wss_i++;
	wss_elem.style.opacity = 0;
	if(wss_i > (wss_array.length - 1)){
		wss_i = 0;
	}
	setTimeout('wssSlide()',1000);
}
function wssSlide(){
	wss_elem.innerHTML = wss_array[wss_i];
	wss_elem.style.opacity = 1;
	setTimeout('wssNext()',2000);
}
</script>
</head>
<body>
<h1><center><font  color=" red">Welcome to </font> <span id="wss"></span></center></h1>
<script>wss_elem = document.getElementById("wss"); wssSlide(); </script></font></h3
 >
 
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
  <li><a class="active w3-padding-16" href="login.html"><span class="glyphicon glyphicon-user"></span> Login</a></li>
  <li><a class="w3-padding-16" href="report.php"><span class="glyphicon glyphicon-th-list"></span> Registration Report</a></li>
  
  
  
 
  <li><a class="w3-padding-16" href="login.html"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a></li>
</ul>


<?php if(isset($smsg)){ ?> <div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div> 
<?php } ?>
<?php if(isset($fmsg)) { ?> <div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div>
<?php }  ?>
<div class="container">
<form class="form-signin" method="POST">
<h2 class="form-signin-heading"></h2>
<div class="input-group">
<span class="input-group-addon" id="basic-addon1"></span>
<input type="text" name="username" class="form-control" placeholder="username" id="username" required>
</div>
<label for="inputpassword" class="sr-only">Password</label>
<input type="password" name="pass" id="inputpassword" class="form-control" placeholder="Password" required>
<button type=button class="btn btn-lg btn-primary btn-block" name="btn-signup" ref="chat.html" type="submit"><span class="glyphicon glyphicon-user"></span> Login</button>
<a class="btn btn-lg btn-primary btn-block" href="other.php"><blink><span class="glyphicon glyphicon-user"></span> Register</blink></a>

</form>
</div> 

</body>
</html>