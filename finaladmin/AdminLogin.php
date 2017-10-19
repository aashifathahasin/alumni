<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<link rel="stylesheet" type="option/css" href="option.css">
<style>
    /*    .jumbotron {
            color: inherit;
            font-size: inherit;
            font-weight: inherit;
            line-height: inherit;
        }*/
    /*body{background: #EEEEEE}*/
    body
    {
        /*background: url(images/26.jpg);*/
        background-size: cover;
        background-repeat: no-repeat;
       background-color: lightblue;
    }
</style>
<style type="text/css">
    #footer {
        position : absolute;
        bottom : 0;
        height : 40px;
        margin-top : 40px;
    }


</style>

<div class="container" align="center" >
    <br/>

    <!--<div class="jumbotron">-->
        <!--<p class="lead">-->
    <div class="panel panel-primary" style="width:500px" align="center">
        <div class="panel-heading">
            <h3 class="panel-title" align="left" >Login</h3>
        </div>
        <div class="panel-body">
            <div class="alert" style="display: none"></div>
            <form class="form-horizontal" role="form" id="loginForm" align="center">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <!--<button type="submit" align="justify" class="btn btn-default ladda-button" data-style="expand-left" data-spinner-color="#010101" id="login"><span class="ladda-label">Sign in</span></button>-->
                        <button type="submit" align="justify" class="btn btn-default ladda-button" data-style="expand-left" data-spinner-color="#010101" id="login">
                            <span class="ladda-label">Sign in</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
//Start the Session
//session_start();
//require('conf.php');
////3. If the form is submitted or not.
////3.1 If the form is submitted
//if (isset($_POST['username']) and isset($_POST['password'])) {
////3.1.1 Assigning posted values to variables.
//    $username = $_POST['username'];
//    $password = $_POST['password'];
////3.1.2 Checking the values are existing in the database or not
//    $query = "SELECT * FROM `user` WHERE username='$username' and password='$password'";
//
//    $result = mysql_query($query) or die(mysql_error());
//    $count = mysql_num_rows($result);
////3.1.2 If the posted values are equal to the database values, then session will be created for the user.
//    if ($count == 1) {
//        $_SESSION['username'] = $username;
//        header("location:redirectafterlogin.php"); //header to redirect, but doesnt work
//    } else {
////3.1.3 If the login credentials doesn't match, he will be shown with an error message.
//        echo "Invalid Login Credentials.";
//    }
//}
?> 

<div id="footer">
    <p>© <a href="http://localhost/All/aash.html" target="_new">aluminiwebsite.com</a> 2017</p>
</div>


