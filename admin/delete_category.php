<?php


include 'config.php';
try{
$stmnt=$dbh->prepare("delete from category where CAID=:CAID");
$stmnt->bindParam(':CAID',$_GET['CAID']);
$stmnt->execute();
header('Location: category_list.php');}
catch(PDOException $err)
{
    $back= '<a href="category_list.php">Back</a>';
    require 'error.php';
    exit();
}