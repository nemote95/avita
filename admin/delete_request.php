<?php

include 'config.php';
try{
    $stmnt=$dbh->prepare("delete request where RID=:RID");
    $stmnt->bindParam(':RID',$_GET['RID']);
    $stmnt->execute();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="'.$_SERVER['HTTP_REFERER'].'">Back</a>';
    exit();
}