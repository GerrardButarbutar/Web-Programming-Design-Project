<?php
session_start();
$koneksi = mysqli_connect('localhost', 'root', '', 'petshop');
$target = "../foto/".basename($_FILES['image']['name']);
$getid = $_SESSION['iddogsnack'];
$targetfile = "SELECT * FROM tb_dogsnack WHERE id='".$getid."'";
$rs = $koneksi->query($targetfile);
$row = $rs->fetch_assoc();
$image = $_FILES['image']['name'];
$title = $_POST['title'];
$caption = $_POST['caption'];
$price = $_POST['price'];
$deletefile = "../foto/".$row['image_file']."";

if(!file_exists($target)){
unlink($deletefile);
}


$sql = "UPDATE `tb_dogsnack` SET `title`='".$title."',`image_file`='".$image."',`caption`='".$caption."',`price`='".$price."' WHERE id = '".$getid."'";
mysqli_query($koneksi,$sql);
move_uploaded_file($_FILES['image']['tmp_name'],$target);
?>