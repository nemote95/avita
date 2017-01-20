<?php
include 'config.php';
try{
$stmnt=$dbh->prepare("insert into discount VALUES (:percentage);");
$stmnt->bindParam(':percentage',$_POST['percentage']);
$stmnt->execute();
header('Location: discount_list.php');}
catch(PDOException $err)
{
    echo $err->getMessage();
    echo '<a href="discount_list.php">Back</a>';
    exit();
}