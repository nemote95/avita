<?php
include 'config.php';
try{
    $stmnt=$dbh->prepare("update deliverer SET name=:name,phone=:phone WHERE DEID=:DEID;");
    $stmnt->bindParam(':name',$_POST['name']);
    $stmnt->bindParam(':phone',$_POST['phone']);
    $stmnt->bindParam(':DEID',$_POST['DEID']);
    $stmnt->execute();
    header('Location: deliverer_list.php');
    }
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="deliverer_list.php">Back</a>';
    exit();
}