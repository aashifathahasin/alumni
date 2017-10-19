<?php
require_once('conf.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        var wss_array = ["<font color='#330066'>Tracking of Alumni-Alumni Website.</font>", "<font color='green'>Tracking of Alumni-Alumni Website.</font>", "<font color='red'>Tracking of Alumni-Alumni Website.</font>", "<font color='blue'>Tracking of Alumni-Alumni Website.</font>", "<font color='#006666'>Tracking of Alumni-Alumni Website.</font>"];
var wss_elem;
        function wssNext() {
	wss_i++;
	wss_elem.style.opacity = 3;
            if (wss_i > (wss_array.length - 1)) {
		wss_i = 0;
	}
            setTimeout('wssSlide()', 1000);
}
        function wssSlide() {
	wss_elem.innerHTML = wss_array[wss_i];
	wss_elem.style.opacity = 1;
            setTimeout('wssNext()', 2000);
}
</script>
    <title>MCA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <div width="100px">
<!--<!--    <h1><center><font  size ="2" color="red">Welcome to </font><span id="wss"></span></center></h1>
    </div>
<script>wss_elem = document.getElementById("wss"); wssSlide();</script></font></h3>-->
<header class="w3-container w3-theme w3-padding w3-gray" id="myHeader">
<div class="header">
	<img src="images/psglogo.png"/>
	<h1>PSG COLLEGE OF TECHNOLOGY</h1>
	<h2>DEPARTMENT OF COMPUTER APPLICATION</h2>
</div>
</header>
<body>
    <ul class="w3-navbar w3-theme w3-dark-gray">
      
        <li><a class="w3-padding-16" href="/all/display.php"><span class="glyphicon glyphicon-user"></span> Alumni</a></li>
        <li><a class="w3-padding-16" href=""><span class="glyphicon glyphicon-search"></span> Search</a></li>
        <li><a class="active w3-padding-16" href="/all/miniproject/trial/tbgdesign.php"><span class="glyphicon glyphicon-calendar"></span> Event</a></li>
        <li><a class="w3-padding-16" href="/all/discussion.php"><span class="glyphicon glyphicon-comment"></span> Discussion Forum</a></li>
  <li><a class="w3-padding-16" href="report.php"><span class="glyphicon glyphicon-th-list"></span> Registration Report</a></li>
        <li><a class="w3-padding-16" href="/all/aash.html"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
</ul>
    <?php
    require_once('guest.php');
    ?>		

</body>


</html>