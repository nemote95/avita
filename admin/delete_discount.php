<?php

include 'config.php';
try{
    $stmnt=$dbh->prepare("delete discount where DID=:DID");
    $stmnt->bindParam(':DID',$_GET['DID']);
    $stmnt->execute();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="'.$_SERVER['HTTP_REFERER'].'">Back</a>';
    exit();
}