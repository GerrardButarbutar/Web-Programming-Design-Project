<?php
session_start();
function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


$fullname = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];



$koneksi = new mysqli('localhost', 'root', '', 'petshop');

if($koneksi->connect_error){
    die('Connection Failed : '  . $koneksi->connect_error);
}
else{
    $state = $koneksi->prepare("insert into member( fullname , email , password ) values(?,?,?)");
    $state->bind_param("sss" , $fullname,$email,$password);
    $state->execute();
    debug_to_console("akun ditambah");
    $state->close();
    $koneksi->close();
}