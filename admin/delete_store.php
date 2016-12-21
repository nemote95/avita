<?php

include 'config.php';
try{
    $stmnt=$dbh->prepare("delete store where SID=:SID");
    $stmnt->bindParam(':SID',$_GET['SID']);
    $stmnt->execute();
    header('Location: store_list.php');
}
catch(PDOException $err)
{
    echo $err->getMessage();
    echo '<a href="store_list.php">Back</a>';
    exit();
}