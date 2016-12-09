<?php
/**
 * Created by PhpStorm.
 * User: samane
 * Date: 06/12/2016
 * Time: 11:44 PM
 */
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
} else if(isset($_SESSION['user'])!="") {
    header("Location: home.php");
}
if (isset($_GET['logout'])) {
    $_SESSION['loggedIn']=false;
    unset($_SESSION['user']);
    unset($_SESSION['lastname']);
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
}
?>