<?php
include 'config.php';
try {
    if ($_POST["DID"]!="") {

        $stmnt = $dbh->prepare("insert into product 
        (name,cost,size,color,isAvailable,count,SID,CAID,DID)
        VALUES (:name,:cost,:color,:size,1,:count,:SID,:CAID,:DID);");
        $stmnt->bindParam(':DID', $_POST['DID']);
    } else {
        $stmnt = $dbh->prepare("insert into product
        (name,cost,size,color,isAvailable,count,SID,CAID,DID) 
        VALUES (:name,:cost,:color,:size,1,:count,:SID,:CAID,null);");
    }
   
    $stmnt->bindParam(':name', $_POST['name']);
    $stmnt->bindParam(':cost', $_POST['cost']);
    $stmnt->bindParam(':color', $_POST['color']);
    $stmnt->bindParam(':size', $_POST['size']);
    $stmnt->bindParam(':count', $_POST['count']);
    $stmnt->bindParam(':SID', $_POST['SID']);
    $stmnt->bindParam(':CAID', $_POST['CAID']);
    $stmnt->execute();

    $pid=$dbh->lastInsertId();

    $target_dir = "../images/dummy/products/$pid/";

    if(!is_dir ($target_dir ))
    {
        mkdir($target_dir);
    }
    if (isset($_FILES['file1'])){
    move_uploaded_file($_FILES['file1']['tmp_name'], $target_dir.'1.jpg');}
    if (isset($_FILES['file2'])){
    move_uploaded_file($_FILES['file2']['tmp_name'], $target_dir.'2.jpg');};
   
    header('Location: product_list.php');

} catch (PDOException $err) {
    echo $err->getMessage();
    echo '<a href="product_list.php">Back</a>';
    exit();
}
