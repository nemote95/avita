<?php

include 'config.php';
try{
    $stmnt=$dbh->prepare("delete store where SID=:SID");
    $stmnt->bindParam(':SID',$_GET['SID']);
    $stmnt->execute();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="'.$_SERVER['HTTP_REFERER'].'">Back</a>';
    exit();
}