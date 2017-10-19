<?php
    require_once 'Server_connection.php';
    unset($_SESSION['userData']);
    @session_destroy();
    header('Location: index.php');
?>
