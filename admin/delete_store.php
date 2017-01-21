<?php

include 'config.php';
try{
    $stmnt=$dbh->prepare("delete from store where SID=:SID");
    $stmnt->bindParam(':SID',$_GET['SID']);
    $stmnt->execute();
    header('Location: store_list.php');
}
catch(PDOException $err)
{
    $back='<a href="store_list.php">Back</a>';
    require 'error.php';

    exit();
}