<?php
        include ("connect.php");
	$rollno = $_POST['rollno'];
        $name = $_POST['name'];
        $dob =$_POST['dob'];
        $email= $_POST['email'];
        $mobileno = $_POST['mobileno'];
        $passedoutyear= $_POST['passedoutyear'];
        $occupation = $_POST['occupation'];
        $companyaddress =$_POST['companyaddress'];
        
    // checking empty fields
    if(empty($rollno) || empty($name) || empty($dob) || empty($email)|| empty($mobileno) || empty($passedoutyear) || empty($occupation)|| empty($companyaddress)) {                
        if(empty($rollno)) {
            echo "<font color='red'>rollno field is empty.</font><br/>";
        }
        
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($dob)) {
            echo "<font color='red'>date of birth field is empty.</font><br/>";
        }
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        if(empty($mobileno)) {
            echo "<font color='red'>mobileno field is empty.</font><br/>";
        }
        if(empty($passedoutyear)) {
            echo "<font color='red'>passedoutyear field is empty.</font><br/>";
        }
        if(empty($occupation)) {
            echo "<font color='red'>occupation field is empty.</font><br/>";
        }
        if(empty($companyaddress)) {
            echo "<font color='red'>company address field is empty.</font><br/>";
        }
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
         $sql = "INSERT INTO tbl_students(rollno,name,dob,email,mobileno,passedoutyear,occupation,companyaddress) VALUES ('$rollno','$name','$dob','$email','$mobileno','$passedoutyear','$occupation','$companyaddress')";
		 $res = mysqli_query($conn,$sql);
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='admin.php'>View Result</a>";
    }
?>