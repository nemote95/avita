<?php
include 'header.php';
echo '<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Purchase - Set Deliverer 

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Purchase - Set Deliverer </li>
            </ol>
        </section>
    <section class="content">';


    include 'config.php';
    $stmnt=$dbh->prepare("select * from purchase where PUID=:PUID");
    $stmnt->bindParam(':PUID',$_GET['PUID']);
    $stmnt->execute();
    $pur=$stmnt->fetch();
    echo '<form action="edit_purchase.php" method="post">
<label >Delivere ID :</label>
            <input type="number" name="DEID" value="'.$pur["DEID"].'">
            <input type="hidden" name="PUID" value="'.$_GET["PUID"].'">
            <input type="submit" class="btn btn-primary">
           </form>';

echo '</div> </session>';
include 'footer.php';