<?php
if(isset($_POST['send'])) {
		$fmsg = "You need to be logged in to see the result.";
		} 
?>
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
  <li><a class="active w3-padding-16" href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>
  <li><a class="w3-padding-16" href="discussion.php"><span class="glyphicon glyphicon-comment"></span> Discussion Forum</a></li>
  <li><a class="w3-padding-16" href="login.html"><span class="glyphicon glyphicon-user"></span> Login</a></li>
  <li><a class="w3-padding-16" href="report.php"><span class="glyphicon glyphicon-th-list"></span> Registration Report</a></li>
  


 
  <li><a class="w3-padding-16" href="display.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a></li>
</ul>
<h1><center>ALUMNI SEARCH</center></h1>
<div id="input">
<form action ="sea.php" method="post">
	 <CENTER><input type="text" name="rollno">
	 <input type="submit" name="send" value="Search"/><br /></CENTER>
	 </form>
	 </div>
	 <?php if(isset($fmsg)) { ?> <center>
	 </br>
	 </br>
	 </br>
	 </br>
	  <div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div></br><p><b><h1>Why do I need to login?</h1></b></p>
     <p><b><h3>This website is only for student,</h3></b></p>
      <p><b><h3>Alumni,Faculty,Staff and friends of PSG College of Technology</h3></b></p>
      <p><b><h3>By logging in, you will allow us to authenticate your Identity to use this site</h3></b></p>
	  
	 </center>
<?php }  ?>
       
</body>
</html>


