<?php
$catsql = "SELECT * FROM categories;";
$catres = mysqli_query($catsql);
while($catrow = mysqli_fetch_assoc($catres)){
echo "<a href='". $config_basedir. "/products.php?id=". $catrow['caid'] ."'>". $catrow['name'] . "</a>";}

