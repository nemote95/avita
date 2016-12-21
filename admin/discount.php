<?php
include 'header.php';
echo '<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create Discount

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Create Discount</li>
            </ol>
        </section>
    <section class="content">';

if (!isset($_GET["DID"])){
    echo '<form action="create_discount.php" method="post">
<label >Percentage :</label>
            <input type="number" name="percentage" step="0.01" max="1" min="0">
            <input type="submit" class="btn btn-primary">
           </form>';
}
else{
    include 'config.php';
    $stmnt=$dbh->prepare("select * from discount where DID=:DID");
    $stmnt->bindParam(':DID',$_GET['DID']);
    $stmnt->execute();
    $dis=$stmnt->fetch();
    echo '<form action="edit_discount.php" method="post">
<label >Percentage :</label>
            <input type="text" name="percentage" value="'.$dis["percentage"].'" step="0.01" max="1" min="0">
            <input type="hidden" name="DID" value="'.$_GET["DID"].'">
            <input type="submit" class="btn btn-primary">
           </form>';
}

echo '</div> </session>';
include 'footer.php';