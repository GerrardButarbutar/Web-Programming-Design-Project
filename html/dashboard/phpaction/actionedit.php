<?php
session_start();
$idget = $_SESSION['idcheck'];
$email = $_POST['email'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$koneksi = mysqli_connect('localhost', 'root', '', 'petshop');
$sql = "UPDATE member SET email='". $email ."', password = '" . $password . "',fullname = '" .$fullname . "' WHERE id = " . $idget . "";

if ($koneksi->query($sql) === TRUE) {
    echo "Record updated successfully";
    unset($_SESSION['idcheck']);
  } else {
    echo "Error updating record: " . $conn->error;
  }


  header("location:member.php");

  