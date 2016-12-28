<?php
include 'config.php';
session_start();
$PRID = $_GET['PRID'];
if (isset($_SESSION["user"])) {
    $UID = $_SESSION["user"];
    if (isset($_POST['text'])) {
        $current_date = date('y.m.d');
        $sql = $dbh->prepare("INSERT INTO comment (text, date, UID,PRID)
    VALUES (:text, GETDATE(), :UID, :PRID);");
        $sql->bindParam(':text', $_POST['text']);
        $sql->bindParam(':UID', $UID);
        $sql->bindParam(':PRID', $PRID);
        $sql->execute();
    }

    header("Location: product.php?PRID=" . $PRID);
    exit;
} else {
    header("Location: 401.php");
    exit;
}
