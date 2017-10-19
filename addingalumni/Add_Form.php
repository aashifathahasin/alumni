<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Form</title>
</head>

    <body>
    
<div id="topbar">
    <center><h1>Welcome to Add Form</h1></center>
    </div>
<div id="form">
		
                    <form method="post" action="add.php">
        	
				<table>
                    <tr>
                	<th>Rollno:</th>
                    <td><input type="text" name="rollno"/></td>
                </tr>
                <tr>
                	<th>Name:</th>
                    <td><input type="text" name="name"  /></td>
                </tr>
                    <tr>
                	<th>Date_of_Birth:</th>
                    <td><input type="text" name="dob"  /></td>
                </tr>
                    <tr>
                	<th>E_mail:</th>
                    <td><input type="text" name="email"  /></td>
                </tr>
                      <tr>
                	<th>Mobile_no:</th>
                    <td><input type="text" name="mobileno"  /></td>
                </tr>
                    <tr>
                	<th>Passedoutyear:</th>
                    <td><input type="text" name="passedoutyear"  /></td>
                </tr>
                    <tr>
                	<th>Occupation:</th>
                    <td><input type="text" name="occupation"   /></td>
                </tr>
                <tr>
                	<th>Company_address:</th>
                    <td><textarea cols="19px" rows="3" name="companyaddress" ></textarea></td>
                </tr>
                    <td><input type="submit" name="cmdadd" value="Add" /></td>
			
                    <td><input type="reset" name="cmdreset" value="Clear"/></td>
                    </form>
        </table>
    	</div>
</body>
</html>