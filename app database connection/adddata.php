<?php
include 'conn.php';

$message=$_POST['message'];
$rating=$_POST['rating'];
$image_path='test';
$vehicle='test';
$coordinates='test';
$journey=1;

$conn->query("insert into reviews(message, rating, image_path, vehicle, coordinates, journey) values('".$message."','".$rating."','".$image_path."','".$vehicle."','".$coordinates."','".$journey."')");
?>
