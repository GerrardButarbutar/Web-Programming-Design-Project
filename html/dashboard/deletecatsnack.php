<?php
$getid = $_GET['delcatsnack'];
$sql = "DELETE FROM `tb_catsnack` WHERE id = '".$getid."'";
$koneksi = mysqli_connect('localhost', 'root', '', 'petshop');

mysqli_query($koneksi,$sql);
?>