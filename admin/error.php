<?php
include 'header.php';
echo '<div class="content-wrapper">
        <section class="content-header">
            <h1>
                Error

            </h1>
            
        </section>
    <section class="content">';
echo $err->getMessage();
echo $back;
include 'footer.php';