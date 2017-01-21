<?php

include 'config.php';
try{
    $stmnt=$dbh->prepare("delete from deliverer where DEID=:DEID");
    $stmnt->bindParam(':DEID',$_GET['DEID']);
    $stmnt->execute();
    header('Location: deliverer_list.php');
}
catch(PDOException $err)
{
    $back='<a href="deliverer_list.php">Back</a>';
    require 'error.php';

    exit();
}