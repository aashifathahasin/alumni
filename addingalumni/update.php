
<?php
        include ("connect.php");
               
		$rollno=$_GET['rollno'];
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$email=$_POST['email'];
		$mobileno=$_POST['mobileno'];
		$passedoutyear=$_POST['passedoutyear'];
		$occupation=$_POST['occupation'];
		$companyaddress=$_POST['companyaddress'];
		// $sql = mysql_query("update tbl_student set name='".$_POST['txtname']."', gender='".$_POST['txtgender']."', dob='".$_POST['txtdob']."', address='".trim($_POST['txtaddress'])."', date='".$_POST['txtdate']."' where stuid=".$_POST['txtid']);
		$sql="UPDATE tbl_students set name='name',dob='dob',email='email',mobileno='mobileno',passedoutyear='passedoutyear',occupation='occupation',companyaddress='companyaddress' WHERE rollno='rollno'";
                $sql="update tbl_students"."set name=$name dob=$dob email=$email mobileno=$mobileno passedoutyear=$passedoutyear occupation=$occupation companhyaddress=$companyaddress"."where rollno=$rollno";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
               
               header('Location:Edit_Form.php');
?>