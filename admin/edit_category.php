<?php
include 'config.php';
try{
    $stmnt=$dbh->prepare("update category SET name=:name WHERE CAID=:CAID;");
    $stmnt->bindParam(':name',$_POST['name']);
    $stmnt->bindParam(':CAID',$_POST['CAID']);
    $stmnt->execute();
    header('Location: category_list.php');
    }
catch(PDOException $err)
{
    echo $err->getMessage();
    echo '<a href="category_list.php">Back</a>';
    exit();
}