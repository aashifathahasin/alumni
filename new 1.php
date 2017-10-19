<?php
include_once 'Server_connection.php';
if(isset($_POST[submit]))
{
	$sqlupd = mysqli_query($con,"UPDATE alumni set password='$_POST[password]' where username='$_POST[username]'");
	
	if( mysqli_affected_rows($con) == 1)
	{
		$msg = "<br>Password updated successfully..";		
	}
	else
	{
		$msg =  "<br>Failed to update record";
	}

}

?>

<!-- content -->
<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <section class="clear">
      <h1>&nbsp;</h1>
      <p>
<form name=f7 action="" method=post>
	

<table width="422" border="1">
<td colspan="2" align="center"><b>Reset password</b><?php echo $msg; ?></td>
<tr><td>Username</td><td><input type=text name=username /></td></tr>
<tr><td>New password</td><td><input type=password name=npassword /></td></tr>
<tr><td>Confirm password</td><td><input type=password name=cpassword /></td></tr>
<tr><td colspan="2" align="center"><center><input type="submit" name="submit" value="Reset password" /></center></td></tr>
</table>
</form>
&nbsp;</p>
</section>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>&
<!-- Footer -->

