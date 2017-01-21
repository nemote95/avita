<?php
include 'header.php';
echo '<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                 View Order

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">View Order</li>
            </ol>
        </section>
    <section class="content">';

if (isset($_GET["OID"])) {
    include 'config.php';
    $stmnt = $dbh->prepare("select * from orders where OID=:OID");
    $stmnt->bindParam(':OID', $_GET['OID']);
    $stmnt->execute();
    $ord = $stmnt->fetch();

    echo '
    <p><img src="../images/orders/' . $ord["OID"] . '.png" alt = "" width = "500"></p>
    <p><lable><b>OID: </b></lable>'.$ord["OID"].'</p>
      <p><lable><b>Description: </b></lable>'.$ord["text"].'</p>
      ';

}

echo '</div> </section>';
include 'footer.php';