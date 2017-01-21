<?php

include 'config.php';
try{
    $stmnt=$dbh->prepare("delete from discount where DID=:DID");
    $stmnt->bindParam(':DID',$_GET['DID']);
    $stmnt->execute();
    header('Location: discount_list.php');
    }
catch(PDOException $err)
{
    $back= '<a href="discount_list.php">Back</a>';
    require 'error.php';

    exit();
}