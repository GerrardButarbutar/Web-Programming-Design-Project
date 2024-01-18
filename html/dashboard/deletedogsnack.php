<?php
$getid = $_GET['deldogsnack'];
$sql = "DELETE FROM `tb_dogsnack` WHERE id = '".$getid."'";
$koneksi = mysqli_connect('localhost', 'root', '', 'petshop');

mysqli_query($koneksi,$sql);
?>