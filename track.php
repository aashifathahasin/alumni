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
  
  
  <li><a class="active w3-padding-16" href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>
  


 
  <li><a class="w3-padding-16" href="chat.html"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a></li>
  
</ul>
<center>
         <?php
        require '/search/conn.php';
$Rollno=$_POST['rollno'];
$result = "select * from tbl_students where Rollno='".$Rollno."'";
mysqli_query($conn, $result);

$sql = mysqli_query($conn,$result);
if (mysqli_num_rows($sql) > 0) 
{
while($rowval = mysqli_fetch_array($sql))
{
	//$rollno= $rowval['rollno'];
	$name= $rowval['Name'];
        $dob=$rowval['Date_of_Birth'];
        $email= $rowval['E_mail'];
	$phone= $rowval['Mobile_no'];
        $passed=$rowval['Passedoutyear'];
        $occupation=$rowval['Occupation'];
        $address=$rowval['Company_address'];
	
}
 
mysqli_close($conn);
        ?>
        <table align="center">
	<tr>
		<td colspan="2"><h1><center><font color="#ffffff">Alumni Details</font></center></h1></td>
	</tr>
	<tr>
        <b><td>Roll_Number:</td></b>
        <td><input type="text" class="inp" name="fname" value="<?php echo $Rollno; ?>" disabled/></td>
    </tr>
	<tr>
        <b><td>Name:</td></b>
 		<td><input type="text" class="inp" name="fid" value="<?php echo  $name; ?>" disabled/></td>
    </tr>
    <tr>
        <b><td>Date of Birth:</td></b>
 		<td><input type="text" class="inp" name="dob" value="<?php echo  $dob; ?>" disabled/></td>
    </tr>
	 <tr>
         <b><td>Phone:</td></b>
 		<td><input type="text" class="inp" name="mid" value="<?php echo  $phone; ?>" disabled/></td>
    </tr>
	<tr>
        <b><td>Email:</td></b>
        <td><input type="text" class="inp" name="mno" value="<?php echo  $email; ?>" disabled/></td>
    </tr>
    <tr>
        <b><td>Passe:d_out_year</td></b>
 		<td><input type="text" class="inp" name="poy" value="<?php echo  $passed; ?>" disabled/></td>
    </tr>
	<tr>
        <b><td>Occupation:</td></b>
 		<td><input type="text" class="inp" name="occ" value="<?php echo  $occupation; ?>" disabled/></td>
    </tr>
    <tr>
        <b><td>Company address:</td></b>
 		<td><input type="text" class="inp" name="addr" value="<?php echo  $address; ?>" disabled/></td>
    </tr>
	</table><br>
        
        <?php
}
else{
    echo "ENTER THE VALID ROLL-NUMBER OR THE DETAILS OF PARTICULAR ALUMNI NOT AVAILABLE";
}
?>
       
		</body>
		</html>