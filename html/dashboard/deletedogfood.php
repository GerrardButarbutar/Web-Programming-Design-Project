<?php
$getid = $_GET['deldogfood'];
$sql = "DELETE FROM `tb_dogfood` WHERE id = '".$getid."'";
$koneksi = mysqli_connect('localhost', 'root', '', 'petshop');

mysqli_query($koneksi,$sql);
?>