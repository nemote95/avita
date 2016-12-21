<?php

include 'config.php';
try{
    $stmnt=$dbh->prepare("delete discount where DID=:DID");
    $stmnt->bindParam(':DID',$_GET['DID']);
    $stmnt->execute();
    header('Location: discount_list.php');
    }
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="discount_list.php">Back</a>';
    exit();
}