<?php
include 'config.php';
//need some checking!
$PRID = $_GET['PRID'];
$UID=1;
if (isset($_POST['text'])){
    $current_date=date('y-m-d');
    $sql = $dbh->prepare("INSERT INTO comment (text, date, UID,PRID)
    VALUES (:text, :date, :UID, :PRID)");
    $sql->bindParam(':text', $_POST['text']);
    $sql->bindParam(':date', $current_date);
    $sql->bindParam(':UID', $UID);
    $sql->bindParam(':PRID', $PRID);
    $sql->execute();}
header("Location: product.php?PRID=".$PRID);
die();