<?php
include 'config.php';
try{
$stmnt=$dbh->prepare("insert into store(name) VALUES (:name);");
$stmnt->bindParam(':name',$_POST['name']);
$stmnt->execute();
header('Location: store_list.php');}
catch(PDOException $err)
{
    echo $err->getMessage();
    echo '<a href="store_list.php">Back</a>';
    exit();
}