<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php
    require_once('conf.php');
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<title>PHP Event Calendar (Preview Demo)</title>-->
    <title>Event Calendar</title>
    <!--display_script_include_once_head($bootstrap=false, $fullCalendar=false,$datetimePicker=false,$colorPicker=false,$jqueryUI=false)-->
    <?php 
    C_Core::display_script_include_once_head(true);
    ?>
</head>
<body>
<?php
   require_once(dirname(__FILE__) .'/Adminlogin.php');
    //require_once('calendar.php');
?>
    <!--display_script_include_once_foot($bootstrap=false, $fullCalendar=false,$datetimePicker=false,$colorPicker=false,$jqueryUI=false)-->
    <?php 
    C_Core::display_script_include_once_foot(true);?>
    <?php
        //=====Load Custom JS
        C_Core::display_custom_js('user');
    ?>
</body>
</html>