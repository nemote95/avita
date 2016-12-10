<?php
include 'config.php';
session_start();
if (isset($_SESSION["user"])) {
    $UID = $_SESSION["user"];
    if (isset($_POST['request'])) {
        $sql = $dbh->prepare("INSERT INTO request (text, UID)
    VALUES (:text, :UID)");
        $sql->bindParam(':text', $_POST['request']);
        $sql->bindParam(':UID', $UID);
        $sql->execute();
    }

    header("Location: contact.php");
    exit;
} else {
    header("Location: 401.php");
    exit;
}