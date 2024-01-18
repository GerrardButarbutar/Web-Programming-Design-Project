<?php
$getid = $_GET['delother'];
$sql = "DELETE FROM `tb_other` WHERE id = '".$getid."'";
$koneksi = mysqli_connect('localhost', 'root', '', 'petshop');

mysqli_query($koneksi,$sql);
?>