<?php

include 'config.php';
try{
    $stmnt=$dbh->prepare("delete from comment where COID=:COID");
    $stmnt->bindParam(':COID',$_GET['COID']);
    $stmnt->execute();
    header('Location: comment_list.php');
}
catch(PDOException $err)
{
    $back='<a href="comment_list.php">Back</a>';
    require 'error.php';
    exit();
}