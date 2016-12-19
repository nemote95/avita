<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 12/19/16
 * Time: 11:03 PM
 */
include 'config.php';
include 'header.php';
$requests=$dbh->query("select * from request;");

echo '
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Requests

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Requests</li>
            </ol>
        </section>
    <section class="content">
    <table class="table table-bordered">
<tr>
      <td>RID</td>
      <td>UID</td>
      <td>Text</td>
      <td>Action</td>
</tr>';
foreach ($requests as $r){
    echo'<tr>
        <td>'.$r["RID"].'</td>
        <td>'.$r["UID"].'</td>
        <td>'.$r["text"].'</td>
                <td><a href="delete_request.php?RID='.$r["RID"].'" >Delete</a></td>
    </tr>';
}
echo '</table>
</section>
    <!-- /.content -->
  </div>';
include 'footer.php';
?>

