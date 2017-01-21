<?php

include 'config.php';
try{
    $stmnt=$dbh->prepare("delete from request where RID=:RID");
    $stmnt->bindParam(':RID',$_GET['RID']);
    $stmnt->execute();
    header('Location: request_list.php');
}
catch(PDOException $err)
{
    $back='<a href="request_list.php">Back</a>';
    require 'error.php';

    exit();
}
