<?php
include 'header.php';
echo '<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create deliverer

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Create deliverer</li>
            </ol>
        </section>
    <section class="content">';

if (!isset($_GET["DEID"])){
    echo '<form action="create_deliverer.php" method="post">
<label >Name :</label>
            <input type="text" name="name"><br>
<label >Phone :</label>
            <input type="text" name="phone"><br><br>
            <input type="submit" class="btn btn-primary">
           </form>';
}
else{
    include 'config.php';
    $stmnt=$dbh->prepare("select * from deliverer where DEID=:DEID");
    $stmnt->bindParam(':DEID',$_GET['DEID']);
    $stmnt->execute();
    $del=$stmnt->fetch();
    echo '<form action="edit_deliverer.php" method="post">
<label >Name :</label>
            <input type="text" name="name" value="'.$del["name"].'"><br>
<label >Phone :</label>
            <input type="text" name="phone" value="'.$del["phone"].'">
            <input type="hidden" name="DEID" value="'.$_GET["DEID"].'"><br><br>
            <input type="submit" class="btn btn-primary">
           </form>';
}

echo '</div> </session>';
include 'footer.php';