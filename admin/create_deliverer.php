<?php
include 'config.php';
try{
$stmnt=$dbh->prepare("insert into deliverer VALUES (:name,:phone);");
$stmnt->bindParam(':name',$_POST['name']);
$stmnt->bindParam(':phone',$_POST['phone']);
$stmnt->execute();
header('Location: deliverer_list.php');}
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="deliverer_list.php">Back</a>';
    exit();
}