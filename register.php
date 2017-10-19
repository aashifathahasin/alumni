<?php


require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
 $username = mysqli_real_escape_string($connection, $_POST['username']);
 $name = mysqli_real_escape_string($connection, $_POST['name']);
 $email    = mysqli_real_escape_string($connection, $_POST['email']);
 $password = md5($_POST['password']);
 
 $phone   = mysqli_real_escape_string($connection, $_POST['phone']);
 $rollnumber = mysqli_real_escape_string($connection, $_POST['rollnumber']);
 $department  = mysqli_real_escape_string($connection, $_POST['department']);
 $branch  = mysqli_real_escape_string($connection, $_POST['branch']);
 $passedoutyear   = mysqli_real_escape_string($connection, $_POST['passedoutyear']);
 $occupation  = mysqli_real_escape_string($connection, $_POST['occupation']);
 $address   = mysqli_real_escape_string($connection, $_POST['address']);

   $sql = "INSERT INTO `login` (username, name, email, password,  phone, rollnumber, department, branch, passedoutyear, occupation, address) VALUES ('$username', '$name', '$email', '$password',  '$phone', '$rollnumber', '$department', '$branch', '$passedoutyear', '$occupation', '$address')";
   $result = mysqli_query($connection,$sql);
	 if($result){
		 $smsg = "User Registeration successfull";
		 
	 }else {
		 $fmsg = "User Registeration Failed";
	 }

 }


?>

<!DOCTYPE html>
<html>
<head>
<title>  USER REGISTRATION IN PHP & MYSQL</title>
<style type="text/css">
body{
	background-image: url(2.jpg);
	background-size: cover;
	
}
.container{
	width: 500px;
	height: 700px;	
	background-color: rgba(0,0,0,0.3);
	margin: 0 auto;
	margin-top:40px;
	padding-top: 10px;
	padding-left:20px;
	border-radius: 15px;
	-webkit-border-radius:15px;
	-o-border-radius:15px;
	-moz-border-radius:15px;
	color:white;
	font-weight: bolder;
	
	box-shadow: inset 4px 4px rgba(0,0,0,0.5);
	font-size: 18px;

}
</style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">


</head>
<body>
<div class="container">
<?php if(isset($smsg)){ ?>
<div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div> 
<?php } ?>
<?php if(isset($fmsg)) { ?> <div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div>
<?php }  ?>
<form class="form-signin" method="POST">
<h2 class="form-signin-heading">  REGISTRATION </h2>
<div class="input-group">
<span class="input-group-addon" id="basic-addon1">@</span>
<input type="text" name="username" class="form-control" placeholder="username" required>
</div>
<label for="inputName" class="sr-only">Name</label>
<input type="name" name="name" id="inputName" class="form-control" placeholder="name" required autofocus>
<label for="inputEmail" class="sr-only">Email adddress</label>
<input type="email" name="email" id="inputEmail" class="form-control" placeholder="email adddress" required autofocus>
<label for="inputPassword" class="sr-only">Password</label>
<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
<label for="inputPhone" class="sr-only">Phone</label>
<input type="phone" name="phone" id="inputPhone" class="form-control" placeholder="Phone" required autofocus>
<label for="inputRollnumber" class="sr-only">Rollnumber</label>
<input type="rollnumber" name="rollnumber" id="inputRollnumber" class="form-control" placeholder="Rollnumber" required autofocus>
<label for="inputdepatment" class="sr-only">department</label>
<input type="department" name="department" id="inputdepatment" class="form-control" placeholder="department" required autofocus>
<label for="inputbranch" class="sr-only">Branch</label>
<input type="branch" name="branch" id="inputbranch" class="form-control" placeholder="branch" required autofocus>
<label for="inputPassedoutyear" class="sr-only">Passed Out Year</label>
<input type="passedoutyear" name="passedoutyear" id="inputPassedoutyear" class="form-control" placeholder="Passed Out Year" required autofocus>
<label for="inputoccupation" class="sr-only">Occupation</label>
<input type="occupation" name="occupation" id="inputoccupation" class="form-control" placeholder="occupation" required autofocus>
<label for="inputAddress" class="sr-only">Address</label>
<input type="address" name="address" id="inputaddress" class="form-control" placeholder="address" required autofocus>
<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
<a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
</form>
</div> 

</body>
</html>