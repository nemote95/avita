<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 12/19/16
 * Time: 11:03 PM
 */
include 'config.php';
include 'header.php';
$comments=$dbh->query("select * from comment;");

echo '
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Comments

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Comments</li>
            </ol>
        </section>
    <section class="content">
    <table class="table table-bordered">
<tr>
      <td>COID</td>
      <td>UID</td>
      <td>PRID</td>
      <td>Text</td>
      <td>Date</td>
      <td>Action</td>
</tr>';
foreach ($comments as $c){
    echo'<tr>
        <td>'.$c["COID"].'</td>
        <td>'.$c["UID"].'</td>
        <td>'.$c["PRID"].'</td>
        <td>'.$c["text"].'</td>
          <td>'.$c["date"].'</td>
                <td><a href="delete_comment.php?COID='.$c["COID"].'" >Delete</a></td>
    </tr>';
}
echo '</table>
</section>
    <!-- /.content -->
  </div>';
include 'footer.php';

