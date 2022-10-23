<?php
    session_start();

    session_destroy();
    $_SESSION['status_login']!=true;//!=true
    header('location: login.php');
