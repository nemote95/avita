<?php
require 'config.php';

$file=$_POST["file"];
$text=$_POST["text"];

$sql = $dbh->prepare("INSERT INTO orders (text) VALUES (:text);");
$sql->bindParam(':text', $text);
$sql->execute();
$id=$dbh->lastInsertId();

list($type, $file) = explode(';', $file);
list(, $file)      = explode(',', $file);
$file = base64_decode($file);
file_put_contents('images/orders/'.$id.'.png', $file);




