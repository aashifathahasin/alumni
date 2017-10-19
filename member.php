<!DOCTYPE HTML>  
<html>
<head>
<h1 align="center"> DEPARTMENT OF COMPUTER APPLICATIONS </h1>
<h2 align="center"> DEPARTMENT LIBRARY </h2>
<h3 align="center">WELCOME ADMIN</h3>
<h4 align="center"> MEMBER RECORDS </h4>
<style>

body{
	font-size:22px;

}
td{

padding:5px;

}

</style>

</head>
<body style="background-color:#98FB98">
<form method="post" action="validate_member.php" ><table align ="center">
  <tr><td>Name: </td><td><input type="text" name="name"></td></tr>
  <tr><td>Rollno:</td><td> <input type="text" name="rollno"></td>
   <td><input type="submit" name="ok" value="OK" /></td></tr>
  <tr><td>DOB: </td><td><input type="text" name="dob"></td></tr>
  <tr><td>Designation:</td><td> <input type="text" name="Designation"></td></tr>
  <tr><td>Batch: </td><td><input type="text" name="Batch"></td></tr>
   <tr><td>Programme:</td><td> <input type="text" name="Programme"></td></tr>
   <tr><td>No.of.Booksallowed:</td><td> <input type="text" name="Booksallowed"></td></tr>
   <tr><td>Member-id:</td><td> <input type="text" name="Member-id"></td></tr>
   <tr><td>Password:</td><td> <input type="text" name="Password"></td></tr>
   <tr><td>Validity:</td><td> <input type="text" name="Validity"></td></tr>

   <tr><td colspan="3" align="center"><input type="submit" name="add" value="ADD" />
    <input type="submit" name="delete" value="DELETE" />
     <input type="submit" name="update" value="UPDATE" />
   <input type="submit" name="back" value="BACK" /></td></tr>
</table>
</form>

</body>
</html>