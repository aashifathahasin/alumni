<?php
include("connect.php");
$Rollno=$_GET['rollno'];
$result = "select * from tbl_students where Rollno='$Rollno'";
$sql = mysqli_query($conn,$result);
while($rowval = mysqli_fetch_array($sql))
{
	//$Rollno= $rowval['Rollno'];
	$Name= $rowval['Name'];
	$Date_of_Birth= $rowval['Date_of_Birth'];
	$E_mail= $rowval['E_mail'];
	$Mobile_no= $rowval['Mobile_no'];
	$Passedoutyear= $rowval['Passedoutyear'];
	$Occupation= $rowval['Occupation'];
	$Company_address= $rowval['Company_address'];
}
mysqli_close($conn);
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
<body>
    <a href="index.php">Home</a>
    <br/><br/>    
<div id="topbar">
    <center><h1>Welcome to Edit Form</h1></center>
    </div>
<div id="form">
		
            <form method="post" action="update.php">
				<table>
                <tr>
                	<th>Rollno:</th>
                    <td><input type="text" name="Rollno" value="<?php echo $Rollno; ?>"/></td>
                </tr>
                <tr>
                	<th>Name:</th>
                    <td><input type="text" name="Name"  value="<?php echo $Name; ?>"/></td>
                </tr>
                    <tr>
                	<th>Date_of_Birth:</th>
                    <td><input type="text" name="Date_of_Birth"  value="<?php echo $Date_of_Birth; ?>"/></td>
                </tr>
                    <tr>
                	<th>E_mail:</th>
                    <td><input type="text" name="E_mail"  value="<?php echo $E_mail; ?>"/></td>
                </tr>
                      <tr>
                	<th>Mobile_no:</th>
                    <td><input type="text" name="Mobile_no"  value="<?php echo $Mobile_no; ?>"/></td>
                </tr>
                    <tr>
                	<th>Passedoutyear:</th>
                    <td><input type="text" name="Passedoutyear"  value="<?php echo $Passedoutyear; ?>"/></td>
                </tr>
                    <tr>
                	<th>Occupation:</th>
                    <td><input type="text" name="Occupation"  value="<?php echo $Occupation; ?>"/></td>
                </tr>
                <tr>
                	<th>Company_address:</th>
                    <td><textarea cols="19px" rows="3" name="Company_address" ><?php echo $Company_address; ?></textarea></td>
                </tr>
             </table>
        	<input type="submit" value="Save" />
			</form>
            <a href="admin.php"><img title="Go Back"/></a>
			
                    
        
    	</div>
        </body>
</html>
    