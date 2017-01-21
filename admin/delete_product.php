<?php

include 'config.php';
try{
    $stmnt=$dbh->prepare("delete from product where PRID=:PRID;");
    $stmnt->bindParam(':PRID',$_GET['PRID']);
    $stmnt->execute();

    $target_dir = "../images/dummy/products/".$_GET['PRID'];
    system('rm -rf ' . escapeshellarg($target_dir));
    header('Location: product_list.php');
}
catch(PDOException $err)
{
    $back='<a href="product_list.php">Back</a></section>';
    require 'error.php';
    exit();
}
