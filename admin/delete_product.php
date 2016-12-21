<?php

include 'config.php';
try{
    $stmnt=$dbh->prepare("delete product where PRID=:PRID");
    $stmnt->bindParam(':PRID',$_GET['PRID']);
    $stmnt->execute();
    header('Location: product_list.php');
}
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="product_list.php">Back</a>';
    exit();
}