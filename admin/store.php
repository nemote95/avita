<?php
include 'header.php';
echo '<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create Store

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Create Store</li>
            </ol>
        </section>
    <section class="content">';

if (!isset($_GET["SID"])){
    echo '<form action="create_store.php" method="post">
<label >Name :</label>
            <input type="text" name="name">
            <input type="submit" class="btn btn-primary">
           </form>';
}
else{
    include 'config.php';
    $stmnt=$dbh->prepare("select * from store where SID=:SID");
    $stmnt->bindParam(':SID',$_GET['SID']);
    $stmnt->execute();
    $str=$stmnt->fetch();
    echo '<form action="edit_store.php" method="post">
<label >Name :</label>
            <input type="text" name="name" value="'.$str["name"].'">
            <input type="hidden" name="SID" value="'.$_GET["SID"].'">
            <input type="submit" class="btn btn-primary">
           </form>';
}

echo '</div> </session>';
include 'footer.php';