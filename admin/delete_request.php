<?php

include 'config.php';
try{
    $stmnt=$dbh->prepare("delete request where RID=:RID");
    $stmnt->bindParam(':RID',$_GET['RID']);
    $stmnt->execute();
    header('Location: request_list.php');
}
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="request_list.php">Back</a>';
    exit();
}