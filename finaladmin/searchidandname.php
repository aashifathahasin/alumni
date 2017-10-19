<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Information</title>
<style>
table {
   
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<center><h1>SEARCHING</h1></center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="addnew" href="Add_Form.php" style="font-face:times new roman; font-size:16px;">NEW INSERTION </a>
	<div class="search">
	<form method="post" action="searchidandname.php">
    <select name="cbosearch">
    	<option>Rollno</option>
    	<option>Name</option>
        <option>Passedoutyear</option>
    </select>
	<input type="text" name="txtsearch"/><input type="submit" name="cmdsearch" value="Search" />
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
            <th>Option</th>
            
    	</tr>
        <?php
			include ("connect.php");
			$txtsearch = $_POST['txtsearch'];
			$sql = "select * from tbl_students where Rollno='$txtsearch'";
			$res = mysqli_query($conn,$sql);
			while($tr=mysqli_fetch_array($res))
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
            <td align="center"><a href="Delete_Form.php? rollno=<?php echo $tr[0];?>">Delete</a> / <a href="Edit_Form.php? rollno=<?php echo $tr[0];?>">Edit</a> </td>    
        </tr>
        </table>
        <?php
			}
		?>

</body>
</html>