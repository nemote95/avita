<?php
include 'config.php';
try{
    $stmnt=$dbh->prepare("update purchase SET DEID=:DEID WHERE PUID=:PUID;");
    $stmnt->bindParam(':DEID',$_POST['DEID']);
    $stmnt->bindParam(':PUID',$_POST['PUID']);
    $stmnt->execute();
    header('Location: purchase_list.php');
}
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="purchase_list.php">Back</a>';
    exit();
}