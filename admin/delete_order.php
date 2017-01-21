<?php

include 'config.php';
try{
    $stmnt=$dbh->prepare("delete from orders where OID=:OID;");
    $stmnt->bindParam(':OID',$_GET['OID']);
    $stmnt->execute();

    $target_dir = "../images/orders/".$_GET['OID'].".png";
    unlink($target_dir);
    header('Location: order_list.php');
}
catch(PDOException $err)
{
    $back='<a href="product_list.php">Back</a></section>';
    require 'error.php';
    exit();
}
