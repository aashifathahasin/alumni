<?php
include("connect.php");
$rollno = $_GET['rollno'];
//$rollno = filterinput(INPUT_GET,'rollno',FILTER_SANITIZE_SPECIAL_CHARS);
$result = "select * from tbl_students where rollno='$rollno'";
$sql = mysqli_query($conn,$result);
while($rowval = mysqli_fetch_array($sql))
{
	$rollno= $rowval['rollno'];
	$name= $rowval['name'];
	$dob= $rowval['dob'];
	$email= $rowval['email'];
	$mobileno= $rowval['mobileno'];
	$passedoutyear= $rowval['passedoutyear'];
	$occupation= $rowval['occupation'];
	$companyaddress= $rowval['companyaddress'];
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
                    <td><input type="text" name="rollno" value="<?php echo $rollno; ?>"/></td>
                </tr>
                <tr>
                	<th>Name:</th>
                    <td><input type="text" name="name"  value="<?php echo $name; ?>"/></td>
                </tr>
                    <tr>
                	<th>Date_of_Birth:</th>
                    <td><input type="text" name="dob"  value="<?php echo $dob; ?>"/></td>
                </tr>
                    <tr>
                	<th>E_mail:</th>
                    <td><input type="text" name="email"  value="<?php echo $email; ?>"/></td>
                </tr>
                      <tr>
                	<th>Mobile_no:</th>
                    <td><input type="text" name="mobileno"  value="<?php echo $mobileno; ?>"/></td>
                </tr>
                    <tr>
                	<th>Passedoutyear:</th>
                    <td><input type="text" name="passedoutyear"  value="<?php echo $passedoutyear; ?>"/></td>
                </tr>
                    <tr>
                	<th>Occupation:</th>
                    <td><input type="text" name="occupation"  value="<?php echo $occupation; ?>"/></td>
                </tr>
                <tr>
                	<th>Company_address:</th>
                    <td><textarea cols="19" rows="3" name="companyaddress" ><?php echo $companyaddress; ?></textarea></td>
                </tr>
             </table>
        	<input type="submit" value="Save" />
			</form>
    <a href="admin.php"><img src="Images/Users_Group.png" title="Go Back"/></a>
		</div>
        
    	
        </body>
</html>
    