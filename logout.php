<?php
    //start a session
    session_start();
    unset($_SESSION);
    session_destroy();
    header('location:index.php');
    //destroy the session with session_destroy
    //done!
?>
