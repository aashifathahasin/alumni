    <?php    
		$rollno = $_GET['rollno'];        
        include("connect.php");
        $sql = "delete from tbl_students where rollno='$rollno'";
        $result = mysqli_query($conn, $sql);
        header("Location:admin.php"); 
    ?>
