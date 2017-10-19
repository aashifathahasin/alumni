<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <title>SEARCHING OF ALUMNI</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body bgcolor="gray">

<div class="w3-container">
    <font color="#ffffff">
  <div class="w3-panel w3-leftbar w3-border-blue w3-pale-blue">
      <h1> <marquee><b> <p>SEARCHING OF ALUMNI-ALUMNI WEBSITE</p></b></marquee></h1>
  </div>
    </head>
    <body>
    <center>
         <?php
        require 'conn.php';
$Rollno=$_POST['rollno'];
$Name=$_POST['rollno'];
$result = "select * from alum where Rollno='".$Rollno."'";
mysqli_query($conn, $result);

$sql = mysqli_query($conn,$result);
if (mysqli_num_rows($sql) > 0) 
{
while($rowval = mysqli_fetch_array($sql))
{
	$rollno= $rowval['Rollno'];
	$name= $rowval['Name'];
	$phone= $rowval['Phone'];
	$email= $rowval['Email'];
}
 
mysqli_close($conn);
        ?>
        <table align="center">
	<tr>
		<td colspan="2"><h1><center><font color="#ffffff">Alumni Details</font></center></h1></td>
	</tr>
	<tr>
        <b><td>Roll_Number:</td></b>
        <td><input type="text" class="inp" name="fname" value="<?php echo $rollno; ?>" disabled/></td>
    </tr>
	<tr>
        <b><td>Name:</td></b>
 		<td><input type="text" class="inp" name="fid" value="<?php echo  $name; ?>" disabled/></td>
    </tr>
	 <tr>
         <b><td>Phone:</td></b>
 		<td><input type="text" class="inp" name="mid" value="<?php echo  $phone; ?>" disabled/></td>
    </tr>
	<tr>
        <b><td>Email:</td></b>
        <td><input type="text" class="inp" name="mno" value="<?php echo  $email; ?>" disabled/></td>
    </tr>
	
	</table><br>
        
        <?php
}
else{
    echo "ENTER THE VALID ROLL-NUMBER OR THE DETAILS OF PARTICULAR ALUMNI NOT AVAILABLE";
}
?>
        <center>
            <b> <a href="index.php" target="_parent">Back</a></b>
            <div class="w3-display-container w3-text-white">
                <img src="is (5).jpg" alt="Lights" style="width:100%">
    
</div>
            
    
        </center>
    </body>
    
</html>

