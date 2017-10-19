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
<style>
table {
   
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #C71585!important; 
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #D8BFD8!important; 
}
</style>
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
  
  <li><a class="w3-padding-16" href="Miniproject/trials/tbgdesign.php"><span class="glyphicon glyphicon-calendar"></span> Event</a></li>
   

 
  <li><a class="w3-padding-16" href="chat.html"><span class="glyphicon glyphicon-circle-arrow-left"></span> Back</a></li>
   <li><a class="w3-padding-16" href="aash.html"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
</ul>






<center><h1>Alumni Records </h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
<div class="search">
    <form method="get" action="admin.php">
    </form>
</div>
	<table>
            <tr>            
            <th>Rollno</th>
            <th>Name</th>
            <th>Date_of_Birth</th>
            <th>E_mail</th>
            <th>Mobile_no</th>
            <th>Passedoutyear</th>
            <th>Occupation</th>
            <th>Company_address</th>
            
    	</tr>
        <?php
			include "connect.php";
			$sql = "SELECT * FROM tbl_students";
			$result = mysqli_query($conn, $sql);
			while($tr=mysqli_fetch_array($result))
			{
		?>
        <tr>
            <td><?php echo $tr[0]; ?></td>
            <td><?php echo $tr[1]; ?></td>
            <td><?php echo $tr[2]; ?></td>
            <td><?php echo $tr[3]; ?></td>
            <td><?php echo $tr[4]; ?></td>
            <td><?php echo $tr[5]; ?></td>
            <td><?php echo $tr[6]; ?></td>
            <td><?php echo $tr[7]; ?></td>
        </tr>
        <?php
			}
		?>
		
    </table>
</body>
</html>