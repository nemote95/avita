<?php

include 'config.php';
try{
    $stmnt=$dbh->prepare("delete deliverer where DEID=:DEID");
    $stmnt->bindParam(':DEID',$_GET['DEID']);
    $stmnt->execute();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="'.$_SERVER['HTTP_REFERER'].'">Back</a>';
    exit();
}