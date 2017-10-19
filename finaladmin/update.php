<?php
        include ("connect.php");
		$Rollno=$_POST['Rollno'];
		$Name=$_POST['Name'];
		$Date_of_Birth=$_POST['Date_of_Birth'];
		$E_mail=$_POST['E_mail'];
		$Mobile_no=$_POST['Mobile_no'];
		$Passedoutyear=$_POST['Passedoutyear'];
		$Occupation=$_POST['Occupation'];
		$Company_address=$_POST['Company_address'];
		
		$sql="UPDATE tbl_students SET Name='".$Name."',Date_of_Birth='".$Date_of_Birth."',E_mail='".$E_mail."',Mobile_no='".$Mobile_no."',Passedoutyear='".$Passedoutyear."',Occupation='".$Occupation."',Company_address='".$Company_address."' WHERE Rollno='".$Rollno."'";
 
		mysqli_query($conn, $sql);
		mysqli_close($conn); 	
        header('Location:admin.php');
?>