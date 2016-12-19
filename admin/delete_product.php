<?php

include 'config.php';
try{
    $stmnt=$dbh->prepare("delete product where PRID=:PRID");
    $stmnt->bindParam(':PRID',$_GET['PRID']);
    $stmnt->execute();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="'.$_SERVER['HTTP_REFERER'].'">Back</a>';
    exit();
}