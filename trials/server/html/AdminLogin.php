<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<style>
    .jumbotron {
        color: inherit;
        font-size: inherit;
        font-weight: inherit;
        line-height: inherit;
    }
    body{background: #EEEEEE}
</style>
<div class="container">
    <div class="header">
        <ul class="nav nav-pills pull-right">
            <!--<li><a href="guest.php" target="_new">Public Calendar</a></li>-->
        </ul>
        <h1 class="text-muted"><img src="images/pec-logo.png" alt="PEC logo" /></h1>
    </div>
    <br />

    <div class="jumbotron">
               <p class="lead">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <div class="panel-body">
                    <div class="alert" style="display: none"></div>
                    <form class="form-horizontal" role="form" id="loginForm">
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
                                <button type="submit" class="btn btn-default ladda-button" data-style="expand-right" data-spinner-color="#010101" id="login"><span class="ladda-label">Sign in</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </p>
    </div>

    <div class="footer">
        <p>© <a href="http://localhost/All/aash.html" target="_new">aluminiwebsite.com</a> 2017</p>
    </div>

</div>
