<?php
require 'koneksi.php';
$id = $_GET ['id'];
$film =  mysqli_query ($conn,"DELETE FROM data_film where id= $id ");
if ($film){
    header ("location: read.php");

}
?>

