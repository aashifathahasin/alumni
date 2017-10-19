<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-color: white;
        margin: 15px auto;
        border: 1px solid black;
    }

    header {

    }

    .floatleft {
        float:left;
        font-size: 2em;
        font-weight: bold;
        color: black;
        font-family: "Arial Black";
        text-align:left;
    }
    .floatright {
        float:right;
    }    
</style>





<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="#"><img src="<?php echo BASE_URL ?>images/pec-logo.png" alt="PEC logo" width="70" /></a>-->
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="calendar.php">Home</a></li>
                <!--<input type="submit" value="alumni" onclick="window.location = 'admin.php';"></p>-->
                <li ><a href="admin.php">Alumuni</a></li>
            </ul>
            <nav>
                <ul><div class="floatright">
                        <li><a href="login.php">Logout</a></li>
                    </div>

                </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
