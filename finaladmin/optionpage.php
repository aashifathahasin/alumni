<?php
require_once('conf.php');
$validateUser = C_Security::validateUserSession();
$pec = new C_PhpEventCal(1,1);
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Event Calendar</title>
    <?php 
   echo $pec->display('head');
    ?>
    <style>
        .container {
            width: auto;
        }
        #add-calendar {
            cursor: pointer;
        }
        .list-group a {
            padding: 4px;
            text-align: left;
            padding-left: 10px;
            padding-right: 2px;
        }
        .list-group a:hover {
            opacity: 0.75;
        }
        .fc-header-right .fc-header-space {
            display: none;
        }
        .unselect-calendar {
            float: right;
            font-size: 8px;
            margin-top: 13px;
            display: inline-block;
            z-index: 10000;
        }
        .unselect-calendar:hover {
            text-shadow: 0 2px 5px black;
            color: maroon;
        }

        a#cal-settings-link{
            display: none;
        }

    </style>
</head>

<body>
<?php require_once(SERVER_HTML_INCLUDE_DIR.'top-navigation.html.php'); ?>
<!--=====display-->
<?php
$pec->display('body','public');
?>

</body>

</html>