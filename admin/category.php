<?php
include 'header.php';
echo '<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Create Category

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Create Category</li>
            </ol>
        </section>
    <section class="content">';

if (!isset($_GET["CAID"])){
    echo '<form action="create_category.php" method="post">
<label >Name :</label>
            <input type="text" name="name">
            <input type="submit" class="btn btn-primary">
           </form>';
}
else{
    include 'config.php';
    $stmnt=$dbh->prepare("select * from category where CAID=:CAID");
    $stmnt->bindParam(':CAID',$_GET['CAID']);
    $stmnt->execute();
    $cat=$stmnt->fetch();
    echo '<form action="edit_category.php" method="post">
<label >Name :</label>
            <input type="text" name="name" value="'.$cat["name"].'">
            <input type="hidden" name="CAID" value="'.$_GET["CAID"].'">
            <input type="submit" class="btn btn-primary">
           </form>';
}

echo '</div> </session>';
include 'footer.php';