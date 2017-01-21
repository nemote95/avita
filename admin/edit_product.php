<?php
include 'config.php';
try {
    if ($_POST["DID"]!="") {

        $stmnt = $dbh->prepare("update product set name=:name,cost=:cost,color=:color,size=:size,
                                count=:count,SID=:SID,CAID=:CAID,DID=:DID where PRID=:PRID;");
        $stmnt->bindParam(':DID', $_POST['DID']);
    } else {
        $stmnt = $dbh->prepare("update product set name=:name,cost=:cost,color=:color,size=:size,
                                count=:count,SID=:SID,CAID=:CAID,DID=null where PRID=:PRID;");}
    $stmnt->bindParam(':name', $_POST['name']);
    $stmnt->bindParam(':cost', $_POST['cost']);
    $stmnt->bindParam(':color', $_POST['color']);
    $stmnt->bindParam(':size', $_POST['size']);
    $stmnt->bindParam(':count', $_POST['count']);
    $stmnt->bindParam(':SID', $_POST['SID']);
    $stmnt->bindParam(':CAID', $_POST['CAID']);
    $stmnt->bindParam(':PRID', $_POST['PRID']);

    $stmnt->execute();

    $target_dir = "../images/dummy/products/".$_POST['PRID']."/";

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