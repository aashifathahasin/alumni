<?php
		include ("connect.php");
		$roll_no = $_POST['rollno'];
        $name = $_POST['name'];
        $date_of_Birth =$_POST['dob'];
        $e_mail= $_POST['email'];
        $mobile_no = $_POST['mobile_no'];
        $passed_out_year= $_POST['passedoutyear'];
        $occupation = $_POST['occupation'];
        $companyaddress =$_POST['company_address'];
        
    // checking empty fields
    if(empty($roll_no) || empty($name) || empty($date_of_Birth) || empty($e_mail)|| empty($mobile_no) || empty($passed_out_year) || empty($occupation)|| empty($companyaddress)) {                
        if(empty($roll_no)) {
            echo "<font color='red'>rollno field is empty.</font><br/>";
        }
        
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        if(empty($date_of_Birth)) {
            echo "<font color='red'>date of birth field is empty.</font><br/>";
        }
        if(empty($e_mail)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        if(empty($mobile_no)) {
            echo "<font color='red'>mobileno field is empty.</font><br/>";
        }
        if(empty($passed_out_year)) {
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
         $sql = "INSERT INTO tbl_students(Rollno,Name,Date_of_Birth,E_mail,Mobile_no,Passedoutyear,Occupation,Company_address) VALUES ('$roll_no','$name','$date_of_Birth','$e_mail','$mobile_no','$passed_out_year','$occupation','$companyaddress')";
		 $res = mysqli_query($conn,$sql);
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='admin.php'>View Result</a>";
    }
?>