<?php
include 'header.php';
echo '<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create Product
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Create Product</li>
            </ol>
        </section>
    <section class="content">';

if (!isset($_GET["PRID"])) {
    echo '<form action="create_product.php" method="post">
<label >Name :</label>
            <input type="text" name="name"><br>
<label >Cost :</label>
            <input type="number" name="cost"><br>
<label >Color :</label>
            <input type="text" name="color"><br>
<label >Size :</label>
            <input type="text" name="size"><br>
<label >Count :</label>
            <input type="text" name="count">  <br>
<label >SID :</label>
            <input type="number" name="SID">   <br>
<label >CAID :</label>
            <input type="number" name="CAID"> <br>
<label >DID :</label>
            <input type="number" name="DID"> <br><br>
            <input type="submit" class="btn btn-primary">
           </form>';
} else {
    include 'config.php';
    $stmnt = $dbh->prepare("select * from product where PRID=:PRID");
    $stmnt->bindParam(':PRID', $_GET['PRID']);
    $stmnt->execute();
    $prd = $stmnt->fetch();
    echo '<form action="edit_product.php" method="post">
<label >Name :</label>
            <input type="text" name="name" value="'.$prd["name"].'"><br>
<label >Cost :</label>
            <input type="number" name="cost" value="'.$prd["cost"].'"><br>
<label >Color :</label>
            <input type="text" name="color" value="'.$prd["color"].'"><br>
<label >Size :</label>
            <input type="text" name="size" value="'.$prd["size"].'"><br>
<label >Count :</label>
            <input type="text" name="count" value="'.$prd["count"].'">  <br>
<label >SID :</label>
            <input type="number" name="SID" value="'.$prd["SID"].'">  <br>
<label >CAID :</label>
            <input type="number" name="CAID" value="'.$prd["CAID"].'"> <br>
<label >DID :</label>
            <input type="number" name="DID" value="'.$prd["DID"].'"> <br><br>
            <input type="hidden" name="PRID" value="' . $_GET["PRID"] . '">
            <input type="submit" class="btn btn-primary">
           </form>';
}

echo '</div> </session>';
include 'footer.php';