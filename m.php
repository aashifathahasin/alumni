<!DOCTYPE html>
<html>
<title>MCA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
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
	<h2>DEPARTMENT OF COMPUTER APPLICATIONS</h2>
</div>
</header>

<ul class="w3-navbar w3-theme w3-dark-grey">
  


  <li><a class="active w3-padding-16" href="i.php"><span class="glyphicon glyphicon-user"></span>Chat with Alumni</a></li>
  
  
  
  
  
</ul>
</body>
</html>




<?php

session_start();

$welcome ="<center>Welcome,<b>".$_SESSION['username']."</b>! <a href='log.php'>Logout</a><br /><a href='m.php?id=compose'>Compose</a> | <a href='m.php?id=inbox'>Inbox</a> | <a href='m.php?id=outbox'>Outbox</a><br /></br></center>";
 

?> 



<html>
<head>
<title>
private messages
</title>
</head>
<body>

<?php print $welcome; ?>
<div class="w3-third">
  <div class="w3-card-2 w3-padding-top w3-teal" style="min-width:1500px">
    
</div>
</div>
<br />
<center>
<?php

  $pages_dir = 'message';
  
  if(!empty($_GET['id'])) {
	  $pages = scandir($pages_dir,0);
	  unset($pages[0], $pages[1]);
	  
	  $id = $_GET['id'];
	  
	  if(in_array($id. '.inc.php', $pages)) {
		  include($pages_dir. '/'.$id.'.inc.php');
		  } else {
			  echo "page not found!";
		  }
	  
  } else {
	  include($pages_dir.'/inbox.inc.php');
  }
	  
	?>
	</center>
	<br />
	<div class="w3-third">
  <div class="w3-card-2 w3-padding-top w3-teal" style="min-width:1500px">
    
</div>
</div>
</body>
</html>	
	  
  