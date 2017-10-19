    <?php    
		$rollno = $_GET['rollno'];        
        include("connect.php");
        $sql = "delete from tbl_students where Rollno='$rollno'";
        $result = mysqli_query($conn, $sql);
        header("Location:admin.php"); 
    ?>
