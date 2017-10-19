




<?php

require('core.inc.php');

if(isset($_POST['send'])) {
	if(send_msg($_POST['sender'], $_POST['message'])) {
		echo 'Message Sent.';
	} else {
		echo 'Message Failed to sent.';
	}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Chat</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="header.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="s.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body bgcolor="red">
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
  
  
  <li><a class="active w3-padding-16" href="discussion.php"><span class="glyphicon glyphicon-comment"></span> Discussion Forum</a></li>
    
  

  <li><a class="w3-padding-16" href="chat.html"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a></li>
  <li><a class="w3-padding-16" href="aash.html"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
  
  
  
  
  
</ul>

<h1><center>DISCUSSION FORUM</center></h1>
<div id="input">
<form action ="chatp.php" method="post">
	 <lable>Enter Name:<input type="text" name="sender"/></lable>
	 <lable>Enter Message:<input type="text" name="message" /></lable>
	 <input type="submit" name="send" value="Send Message"/><br />
	 </form>
	 </div>
	 
<div id="messages">
<?php
     $messages = get_msg();
	 foreach($messages as $message) {
		 echo '<strong>'.$message['sender'].' Sent Group Message</strong><br />';
		 echo $message['message'].'<br /><br />';
	 }
	 ?>
	 </div>
	 
	 
	 
	 </body>
	 </html>