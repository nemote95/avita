<?php
include 'config.php';
session_start();
if (isset($_SESSION["user"])) {
    $UID = $_SESSION["user"];
    echo $_POST['request'];
    if (isset($_POST['request'])) {
        $sql = $dbh->prepare("INSERT INTO request (text, UID)
    VALUES (:text, :UID);");
        $sql->bindParam(':text', $_POST['request']);
        $sql->bindParam(':UID', $UID);
        var_dump($sql);
        $sql->execute();
    }
} else {
    header("HTTP/1.1 401 Unauthorized");
}